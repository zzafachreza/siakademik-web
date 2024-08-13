	<?php

class Pengguna extends CI_Controller{

	function __construct(){

		parent::__construct();
	}

	function index(){

		$data['title']='Data Pengguna';
		$this->load->view('header',$data);
		$this->load->view('pengguna/data');
		$this->load->view('footer');
	} //ok 
	

	
  

	function add(){
		$data['title']='Data Pegawai - Add';
		$this->load->view('header',$data);
		$this->load->view('pengguna/add');
		$this->load->view('footer');
	}

	function insert(){
	    

	   
		$nama_lengkap = $this->input->post('nama_lengkap');
		$username = $this->input->post('username');
		$telepon = $this->input->post('telepon');
		$password = sha1($this->input->post('password'));
            
            $sql="INSERT INTO data_user(
            
            nama_lengkap,
            username,
            telepon,
            password
           
            )VALUES(
            '$nama_lengkap',
            '$username',
            '$telepon',
            '$password'
            
                )";
		
		if($this->db->query($sql)){
		    redirect('pengguna');
		}
	}

	function delete(){
		$id = $this->uri->segment(3);
		$this->db->query("DELETE FROM data_user WHERE id='$id'");
		redirect('pengguna');
	}

	function edit(){

		$id	= $this->uri->segment(3);

		$data['title']='Data Pengguna- Edit';
		$this->load->view('header',$data);
		$this->load->view('pengguna/edit',$data);
		$this->load->view('footer');
	}

	function detail(){
		$id	= $this->uri->segment(3);
		$data['title']='Data Pengguna - Detail';


		$this->load->view('header',$data);
		$this->load->view('pengguna/view',$data);
		$this->load->view('footer');
	}



	function update(){


				$id = $this->input->post('id');
		$nama_lengkap = $this->input->post('nama_lengkap');
		$username = $this->input->post('username');
		$telepon = $this->input->post('telepon');
		$status = $this->input->post('status');
	    

		
		
	
		
		if(!empty($this->input->post('password'))){
		    	$password = sha1($this->input->post('password'));
		    
		    $sql="UPDATE data_user SET 
		        
		        nama_lengkap='$nama_lengkap',

            telepon='$telepon',
              
       
                username='$username',
             status='$status',
               
                password='$password'
               
                
                
                WHERE id='$id'";
		    
		}else{
		    
		    
		     $sql="UPDATE data_user SET 
		        
		         nama_lengkap='$nama_lengkap',
  
            telepon='$telepon',
            status='$status',
        
                username='$username'
                
                
                WHERE id='$id'";
		}
		
		
		
		$this->db->query($sql);
		redirect('pengguna');
	}
}