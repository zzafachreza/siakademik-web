<?php

$modul="pengguna";

?>

<nav aria-label="breadcrumb">
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="<?php echo site_url() ?>">Home</a></li>
	    <li class="breadcrumb-item"><a href="<?php echo site_url($modul) ?>"><?php echo ucfirst($modul) ?></a></li>
	    <li class="breadcrumb-item active" aria-current="page">Add</li>
	  </ol>
</nav>
<div class="container-fluid">

	<div class="card">
	  <div class="card-header">
	  		
	  <form action="<?php echo site_url($modul.'/insert') ?>" method="POST" enctype="multipart/form-data">

	<a href="<?php echo site_url($modul) ?>" class="btn bg-ketiga"><i class="flaticon2-left-arrow-1"></i> Kembali</a>
   	<button class="btn bg-utama" id="simpan" type="SUBMIT"><i class="flaticon2-files-and-folders"></i> Simpan</button>
	  </div>
	  	<div class="card-body">
	  		<form>
	  		    
	  		    
	  		 
		
			 
			  <div class="form-group col col-sm-6">
			    <label for="nama_lengkap" class="AppLabel">Nama Lengkap</label>
			    <i class="flaticon-user iconInput"></i>
			    <input autocomplete="off" type="text" name="nama_lengkap" class="AppInput" id="nama_lengkap" autofocus="autofocus">
			  </div>
			  

			  
			  
		
			  
			    <div class="form-group col col-sm-6">
			    <label for="username" class="AppLabel">Username</label>
			    <i class="flaticon-user iconInput"></i>
			    <input autocomplete="off" type="text" name="username" class="AppInput" id="username" autofocus="autofocus">
			  </div>
			  
			  
		
			  
			  
			  
			  
			  
			    <div class="form-group col col-sm-6">
			    <label for="username" class="AppLabel">Telepon</label>
			    <i class="flaticon-user iconInput"></i>
			    <input autocomplete="off" type="text" name="telepon" class="AppInput" id="telepon" autofocus="autofocus">
			  </div>
			  
			  
			  
			  	  <div class="form-group col col-sm-6">
			    <label for="password" class="AppLabel">Password</label>
			    <i class="flaticon-user iconInput"></i>
			    <input autocomplete="off" type="password" name="password" class="AppInput" id="password" autofocus="autofocus">
			  </div>
			  
			  
			  	

	
			   
			   
			
			</form>
		  </div>
		  <div class="card-footer">

		  </div>
	  </form>
	</div>


</div>



