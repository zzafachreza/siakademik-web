
<div class="container-fluid" style="margin-top:2%">
 <div class="bg-white row" style="margin-top:2%;margin-bottom:2%">
     <div class="col col-sm-6">
         <a href="<?php echo site_url('artikel') ?>" class="btn bg-white text-black col col-sm-12"><i class="flaticon2-left-arrow-1"></i> Back</a>
     </div>
 
   

    
  </div>
  
   <?php
	  		
	  	$row =	$this->db->query("SELECT * FROM data_$modul")->row_object()
	  		
	  		?>
        
			   
			    <h3><?php  echo $row->judul ?></h3>
	
			
			    <img src="<?php  echo  site_url().$row->foto_artikel ?>" height="200" />
		
		
			   <p><?php  echo $row->keterangan ?></p>


 


</div>



