<?php

class Artikel extends CI_Controller{

    

	function __construct(){
		parent::__construct();
		
	    
	}
	
    
    function modul(){
        return 'artikel';
    }

	function index(){

		if (!isset($_SESSION['username'])) {
			redirect('login');
		}else{
			$data['title']=$this->modul();
			$data['modul'] = $this->modul();
			$this->load->view('header',$data);
			$this->load->view($this->modul().'/data');
			$this->load->view('footer');
		}
	}
	function detail(){
		$data['title']=$this->modul().' - Detail';
		$data['modul'] = $this->modul();

		$this->load->view('header',$data);
		$this->load->view($this->modul().'/view');
		$this->load->view('footer');
	}




	function add(){
		$data['title']=$this->modul().' - Tambah';
		$data['modul'] = $this->modul();

		$this->load->view('header',$data);
		$this->load->view($this->modul().'/add');
		$this->load->view('footer');
	}
	
	public function uploadFoto($name_data,$ref_user){
		    $target_dir = "datafoto/";
    		$target_file = $target_dir .sha1(md5(date('ymdhis').$ref_user.$name_data)).'.png';
    		$ext = $target_dir .date('ymdhis').basename($_FILES[$name_data]["name"]);
    		$uploadOk = 1;
    		$imageFileType = strtolower(pathinfo($ext,PATHINFO_EXTENSION));
    
    		// Check if image file is a actual image or fake image
    		if(isset($_POST["submit"])) {
    		  $check = getimagesize($_FILES[$name_data]["tmp_name"]);
    		  if($check !== false) {
    		    echo "File is an image - " . $check["mime"] . ".";
    		    $uploadOk = 1;
    		  } else {
    		    echo "File is not an image.";
    		    $uploadOk = 0;
    		  }
    		}
    
    		// Check if file already exists
    		if (file_exists($target_file)) {
    		  echo "Sorry, file already exists.";
    		  $uploadOk = 0;
    		}
    
    		// Check file size
    		if ($_FILES[$name_data]["size"] > 12000000) {
    		  echo "Sorry, your file is too large.";
    		  $uploadOk = 0;
    		}
    
    		// Allow certain file formats
    		if($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png") {
    		  echo "Maaf File Anda harus berupa gambar";
    		  $uploadOk = 0;
    		}
    
    		// Check if $uploadOk is set to 0 by an error
    		if ($uploadOk == 0) {
    		  echo "Sorry, your file was not uploaded.";
    		// if everything is ok, try to upload file
    		} else {
    		  if (move_uploaded_file($_FILES[$name_data]["tmp_name"], $target_file)) {
    		  //  echo "The file ". basename( $_FILES["foto"]["name"]). " has been uploaded.";
    		    return $target_file;
    		  } else {
    		    echo "Sorry, there was an error uploading your file.";
    		  }
    		}
		}
		

	function insert(){
	    
	    

           $myFoto = $this->uploadFoto('foto_'.$this->modul(),date('ymdhis'));
   
        
        
        $sql="INSERT INTO data_".$this->modul()."
        
                (";
                
                
            $no=1;
                 
            $jml =$this->db->query("SHOW COLUMNS from `data_".$this->modul()."` WHERE FIELD !='id_".$this->modul()."'")->num_rows();
        foreach($this->db->query("SHOW COLUMNS from `data_".$this->modul()."` WHERE FIELD !='id_".$this->modul()."'")->result() as $col){
        	    
        	   
        	   
        	   if($jml==$no){
        	       $sql .= $col->Field;
        	   }else{
        	       $sql .= $col->Field.",";
        	   }
        	   
        	   
        	   $no++;
        	    
        	}
                
                
                
                    
          $sql .=") VALUES(";
          
          $no2=1;
          
           foreach($this->db->query("SHOW COLUMNS from `data_".$this->modul()."` WHERE FIELD !='id_".$this->modul()."'")->result() as $col){
        	    
        	    
        	    $data_field = $col->Field;
        	    
        	    
        	   
        	    
        	    
        	    
        	    if($data_field=="foto_".$this->modul()){
        	        $data_field = $myFoto;
        	    }else{
        	         if($data_field=="harga_asset"){
        	             $data_field = str_replace(",","",$this->input->post($col->Field));
        	           
            	    }else{
            	        $data_field = $this->input->post($col->Field);
            	    }
        	    }
        	    
        	      
        	    
        	    
        	    
        	    
        	     if($jml==$no2){
        	       $sql .= "'".$data_field."'";
        	   }else{
        	       $sql .= "'".$data_field."',";
        	   }
        	   
        	   
        	   $no2++;
        	   
        	   
        	   
        	    
        	}
        	
                
            
                
          $sql .=");";
            
      
            
        // echo $sql;
            if($this->db->query($sql)){
              redirect($this->modul()); 
           
            }
		
	}
	
	function download(){
	    	$data['modul'] = $this->modul();
	    $this->load->view($this->modul().'/download',$data);
	    
	}

	function delete(){
		$id = $this->uri->segment(3);
		
		
// 		$sqlFoto = "SELECT foto_".$this->modul()." FROM data_".$this->modul()." WHERE id_".$this->modul()."='$id'";
// 		$fotoDelete = $this->db->query($sqlFoto)->row_object();

		     
		      $sql="DELETE FROM data_".$this->modul()." WHERE id_".$this->modul()."='$id'";
                if($this->db->query($sql)){
                    // unlink($fotoDelete->foto_laptop);
                   redirect($this->modul()); 
                }
                
                
		
        
      
	}

	function edit(){

		$id	= $this->uri->segment(3);
		$data['title']=$this->modul().' - Edit';
		$data['id'] = $id;
		$data['modul'] = $this->modul();
		$this->load->view('header',$data);
		$this->load->view($this->modul().'/edit',$data);
		$this->load->view('footer');
	}

	



	function update(){
	    
	      $foto_old = $_POST['foto_'.$this->modul().'_old'];

      
      if(!empty($_FILES['foto_'.$this->modul()]['name'])){
        
          $myFoto = $this->uploadFoto('foto_'.$this->modul(),date('ymdhis'));
          unlink($foto_old);
           
      }else{
          
           $myFoto =$foto_old;
      }
      

      
      

		$id = $this->input->post('id_'.$this->modul());

        $sql="UPDATE data_".$this->modul()." SET ";
        
        
        	
        	
        	
        	        
            $jml =$this->db->query("SHOW COLUMNS from `data_".$this->modul()."` WHERE FIELD !='id_".$this->modul()."'")->num_rows();
 
        	$no=1;
          
           foreach($this->db->query("SHOW COLUMNS from `data_".$this->modul()."` WHERE FIELD !='id_".$this->modul()."'")->result() as $col){
        	    
        	    
        	     $data_field = $col->Field;
  
        	    
        	   	    
        	    if($data_field=='foto_'.$this->modul()){
        	        $data_field = $myFoto;
        	    }else{
        	         if($data_field=="harga_asset"){
        	             $data_field = str_replace(",","",$this->input->post($col->Field));
        	           
            	    }else{
            	        $data_field = $this->input->post($col->Field);
            	    }
        	    }
        	    
        	    
        	    
        	    
        	    
        	    
        	     if($jml==$no){
        	        $sql .= "".$col->Field."='".$data_field."'";
        	   }else{
        	      $sql .= "".$col->Field."='".$data_field."',";
        	   }
        	   
        	   
        	   $no++;
        	   
        	   
        	   
        	    
        	}
        	
                
                
        $sql .=" WHERE id_".$this->modul()."='$id'";
        
        
              
        
            
            if($this->db->query($sql)){
              redirect($this->modul()); 
            }
	    
	    
	}
	
}