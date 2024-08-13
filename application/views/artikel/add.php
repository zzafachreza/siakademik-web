<div class="container-fluid">


	  <form action="<?php echo site_url($modul.'/insert') ?>" method="POST" enctype="multipart/form-data">

   <div style="margin-top:2%;margin-bottom:2%">
       	<a href="<?php echo site_url($modul) ?>"class="btn bg-ketiga"><i class="flaticon2-left-arrow-1"></i> Kembali</a>
    	<button  class="btn bg-utama" id="simpan" type="SUBMIT"><i class="flaticon2-files-and-folders"></i> Simpan</button>
   </div>
	
	  		<form>
	  		    
	  		    
	  		   <?php
    	  			

    	  			
    	  			foreach($this->db->query("SHOW COLUMNS from `data_$modul` WHERE FIELD !='id_$modul'")->result() as $col):
    	  			?>
    	  			
    	  			<?php 
    	  			
    	  			    if($col->Field=="keterangan"){
    	  			        ?>
    	  			        
    	  			        <div class="form-group col col-sm-6">
        			    <label class="AppLabel">
        			      Keterangan
        			     </label>
        			       <textarea name="<?php echo $col->Field ?>" id="summernote"></textarea>
        			  
        		     </div>
        			  
        			  <?php 
    	  			    }else if($col->Field=="tipe"){
    	  			        ?>
    	  			        
    	  			        <div class="form-group col col-sm-6">
        			    <label class="AppLabel">
        			      Tipe
        			     </label>
        			       <select class="form-control" name="tipe">
        			           <option>Balita</option>
        			           <option>Ibu Hamil</option>
        			       </select>
        			  
        		     </div>
        			  
        			  <?php 
    	  			    }elseif($col->Field=="foto_$modul"){
    	  			        ?>
    	  			        
    	  			        <div class="form-group col col-sm-6">
        			    <label class="AppLabel">
        			        <?php echo ucfirst(str_replace("_"," ",str_replace("asset","provider",$col->Field))) ?> 
        			     </label>
        			    <input type="file" name="foto_<?php echo $modul ?>" class="form-control" />
        		     </div>
        			  
        			  <?php 
    	  			    }else{
    	  			        ?>
    	  			        
    	  			        <div class="form-group col col-sm-6">
        			    <label for="nama_kecamatan" class="AppLabel">
        			       <?php echo ucfirst(str_replace("_"," ",str_replace("asset","provider",$col->Field))) ?> 
        			     </label>
        			   
        			    <input autocomplete="off" type="<?php echo $col->Field=='password'?'password':'' ?>" name="<?php echo $col->Field ?>" class="form-eza <?php echo $col->Field=='harga_'.$modul?'uang':'' ?>" id="<?php echo $col->Field ?>" autofocus="autofocus">
        			  </div>
    	  			        
    	  			        <?php
    	  			    }
    	  			?>
    	  		
    	  			
    	  			  
    	  			
    	  			<?php
    	  			
    	  			endforeach;
    	  			?>
	  		    

			

	
			   
			   
			
			</form>





</div>




<script>
    $(document).ready(function() {
        $('#summernote').summernote();

    });
  </script>
