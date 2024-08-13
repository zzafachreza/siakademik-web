<nav aria-label="breadcrumb">
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="<?php echo site_url() ?>">Home</a></li>
	    <li class="breadcrumb-item"><a href="<?php echo site_url('pengguna') ?>">pengguna</a></li>
	    <li class="breadcrumb-item active" aria-current="page">Detail</li>
	  </ol>
</nav>
<div class="container-fluid">

	<div class="card">
	  <div class="card-header">
	  		
	
	<a href="<?php echo site_url('pengguna') ?>" class="btn bg-kedua"><i class="flaticon2-left-arrow-1"></i> Kembali</a>

		  </div>
	  	<div class="card-body">
	  	     <?php 
	  	        $id = $this->uri->segment(3);
	  	        $usr = $this->db->query("SELECT * FROM data_user a JOIN data_kota b ON a.fid_kota = b.id_kota JOIN data_provinsi c ON b.fid_provinsi = c.id_provinsi WHERE a.id='$id'")->row_object();
	  	     ?>
	  	     
	  	     <table class="table table-bordered">
	  	         <tr><th>Nama Pribadi</th><td><?php echo $usr->nama_lengkap ?></td></tr>
	  	         <tr><th>Telepon</th><td><?php echo $usr->telepon ?></td></tr>
	  	         <tr><th>E-mail</th><td><?php echo $usr->email ?></td></tr>
	  	         <tr><th>Alamat</th><td><?php echo $usr->alamat ?></td></tr>
	  	          <tr><th>Kota - Provinsi</th><td><?php echo $usr->nama_kota ?>  - <?php echo $usr->nama_provinsi ?></td></tr>

	  	         
	  	   
	  	         
	  	         
	  	         
	  	     </table>
			  
		  </div>
		  <div class="card-footer">

		  </div>
	
	</div>


</div>



