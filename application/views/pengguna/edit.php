<nav aria-label="breadcrumb">
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="<?php echo site_url() ?>">Home</a></li>
	    <li class="breadcrumb-item"><a href="<?php echo site_url('pengguna') ?>">pengguna</a></li>
	    <li class="breadcrumb-item active" aria-current="page">Edit</li>
	  </ol>
</nav>
<div class="container-fluid">

	<div class="card">
	  <div class="card-header">
	  		
	  <form action="<?php echo site_url('pengguna/update') ?>" method="POST" >

	<a href="<?php echo site_url('pengguna') ?>" class="btn bg-ketiga"><i class="flaticon2-left-arrow-1"></i> Kembali</a>

  	<button class="btn bg-utama" type="SUBMIT"><i class="flaticon2-files-and-folders"></i> Simpan</button>
	  </div>
	  	<div class="card-body">
	  		<form>
	
			    <td><input type="hidden" name="id" value="<?php echo $this->uri->segment(3) ?>">
			   
			   

	  	
			  <?php  $id = $this->uri->segment(3);
			  
			        $sqlData = "SELECT * FROM data_user WHERE id='$id'";
			        $user = $this->db->query($sqlData)->row_object();
			  
			  ?>
			  
		
	

			  <div class="form-group col col-sm-6">
			    <label for="nama_lengkap" class="AppLabel">Nama Lengkap</label>
			    <i class="flaticon-user iconInput"></i>
			    <td><input autocomplete="off" type="text" name="nama_lengkap" class="AppInput" id="nama_lengkap" autofocus="autofocus" value="<?php echo $user->nama_lengkap ?>">
			  </div>
			  

			 
			 

			  
			  
			    <div class="form-group col col-sm-6">
			    <label for="username" class="AppLabel">Usename</label>
			    <i class="flaticon-user iconInput"></i>
			    <td><input autocomplete="off" type="text" name="username" class="AppInput" id="username" autofocus="autofocus" value="<?php echo $user->username ?>">
			  </div>
			  
		
			   
			    <div class="form-group col col-sm-6">
			    <label for="username" class="AppLabel">Telepon</label>
			    <i class="flaticon-user iconInput"></i>
			    <td><input autocomplete="off" type="text" name="telepon" class="AppInput" id="telepon" autofocus="autofocus" value="<?php echo $user->telepon ?>">
			  </div>
			  
			 
			  
			  <div class="form-group col col-sm-6">
			    <label for="username" class="AppLabel">Status</label>

			    <select name="status" class="form-control" >
			        <option <?php echo $user->status=='Aktif'?'selected':'' ?> >Aktif</option>
			        <option <?php echo $user->status=='Tidak Aktif'?'selected':'' ?> >Tidak Aktif</option>
			    </select>
			  </div>
			  
			  
		
			  
			  	  <div class="form-group col col-sm-6">
			    <label for="password" class="AppLabel">Password</label>
			    <i class="flaticon-user iconInput"></i>
			    <td><input autocomplete="off" type="password" name="password" class="AppInput" id="password" placeholder="kosongkan jika tidak diubah passwordnya...">
			  </div>
			  
			  
			        

	
			   
			   
			
			</form>
		  </div>
		  <div class="card-footer">

		  </div>
	  </form>
	</div>


</div>





		  <div class="card-footer">

		  </div>
	  </form>
	</div>


</div>



