<nav aria-label="breadcrumb">
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="<?php echo site_url() ?>">Home</a></li>
	    <li class="breadcrumb-item active" aria-current="page">pengguna</li>
	  </ol>
</nav>
<div class="container-fluid">


	<div class="card">
	  <div class="card-header">

	  	<a href="<?php echo site_url() ?>" class="btn bg-ketiga"><i class="flaticon2-left-arrow-1"></i> Kembali</a>
	  	
	  		<a href="<?php echo site_url('pengguna/add/') ?>" class="btn bg-utama"><i class="flaticon-add"></i> Tambah</a>
	  		
	  </div>
	  <div class="card-body">

	  	<table class="table table-bordered table-striped table-hover tabza">
	  		<thead>
	  			<tr class="bg bg-utama" style="color:white">
	  			<th>No</th>
	  			<th>Username</th>
	  			<th>Nama Lengkap</th>
	  			<th>Telepon</th>
	  		    <th>Status</th>
	  			
	  			<th>action</th>
	  		</tr>
	  		</thead>
	  		<tbody>
	  			<?php
	  				$no=0;
	  			
	  				      $sql="SELECT * FROM data_user";
	  			
	    
	  				  
	  			
	  				foreach($this->db->query($sql)->result() as $row):
	  				$no++;
		  		?>
		  			<tr>
		  				<td><?php echo $no ?></td>
		  				<td><?php echo $row->username ?></td>
		  				<td><?php echo $row->nama_lengkap ?></td>
		  				<td><?php echo $row->telepon ?></td>
		  			
		  					<td><?php echo $row->status ?></td>
		  				
		  			
		  		
		  				
		  				<td>
		  				

		  			<a href="<?php echo site_url('pengguna/edit/'.$row->id) ?>" class="btn bg-kedua"><i class="flaticon-edit"></i></a>	
		  					<a onClick="return confirm('Apakah anda akan hapus ini ?')" href="<?php echo site_url('pengguna/delete/'.$row->id) ?>" class="btn bg-ketiga"><i class="flaticon-delete"></i></a>	
		  			
		  			
		  					
		  				</td>
		  			</tr>

		  		<?php 
		  				endforeach;
		  		?>
	  		</tbody>
	  	</table>

	  </div>
	</div>


</div>



