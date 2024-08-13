<div class="container-fluid" style="padding-top:2%">
 <div class="bg-white row" style="margin-top:0%;margin-bottom:2%">
     <div class="col col-sm-2">
         <a href="<?php echo site_url() ?>" class="btn bg-white text-black col col-sm-12"><i class="flaticon2-left-arrow-1"></i> Back</a>
     </div>
      <div class="col col-sm-2">
         <a href="<?php echo site_url($modul.'/add') ?>" class="btn bg-utama col col-sm-12"><i class="flaticon-add"></i> Add</a>
     </div>
 </div>

	  	<table class="table table-bordered table-striped table-hover tabza nowrap display"  style="width:100%">
	  		<thead class="bg-utama" style="color:white">
	  			<tr>
    	            <th>No</th>
    	            <th>Icon / Gambar</th>
    	  			<th>Nama Menu</th>
    	  			  <th>Aksi</th>
    
    	  	

    	  		</tr>
	  		</thead>
	  		<tbody>
	  	
	  				<?php
	  				$no=0;
	                $sql = "SELECT * FROM data_$modul";
	  				foreach($this->db->query($sql)->result() as $row){
	  				$no++;
	  			
		  		?>
		  			<tr>
		  			      <td><?php echo $no; ?></td>
		  			    	<td><img src="<?php echo $row->{'file_'.$modul} ?>" height="80" /></td>
		  			  
		  				<td><?php echo $row->{'menu_'.$modul} ?></td>
		
		  			
		  			  	<td>
		  				    
		  		
		  			
		  				 <?php if($_SESSION['level']=="Admin") { ?>
		  					<a href="<?php echo site_url($modul.'/edit/'.$row->{'id_' . $modul}) ?>" class="btn bg-kedua"><i class="flaticon-edit"></i></a>

		  					<a onClick="return confirm('Apakah kamu yakin akan hapus ini ?')" href="<?php echo site_url($modul.'/delete/'.$row->{'id_' . $modul}) ?>" class="btn bg-ketiga"><i class="flaticon-delete"></i></a>	
                         <?php } ?>

		  				</td>
		  			

		  	        
		  			
		  				
		  			</tr>

		  	<?php } ?>
		  			
	  		</tbody>
	  	</table>



</div>

<script type="text/javascript">

<?php if($this->session->flashdata('import')){ ?>
Swal.fire(
     'Successfully',
      '<?php echo $this->session->flashdata('import'); ?>',
      'success'
    )
<?php } ?>

<?php if($this->session->flashdata('update')){ ?>
Swal.fire(
     'Successfully',
      '<?php echo $this->session->flashdata('update'); ?>',
      'success'
    )
<?php } ?>

<?php if($this->session->flashdata('pdf')){ ?>
Swal.fire(
     'Successfully',
      '<?php echo $this->session->flashdata('pdf'); ?>',
      'success'
    )
<?php } ?>

<?php if($this->session->flashdata('error')){ ?>
Swal.fire(
     'Gagal Upload',
      '<?php echo $this->session->flashdata('error'); ?>',
      'error'
    )
<?php } ?>




	function copyToClipboard(element) {
	  var $temp = $("<input>");
	  $("body").append($temp);
	  $temp.val($(element).text()).select();
	  document.execCommand("copy");
	  $temp.remove();
	}


	$(".alink").click(function(e){
		e.preventDefault();
		var link = $(this).attr('data-id');
		$("#p1").text(link);
		copyToClipboard("#p1");
		$(this).removeClass('btn-success');
		$(this).addClass('btn-secondary');

		$(this).text('Copied');
	})
	
	$(document).ready(function() {
    $('.tabza2').DataTable( {
        "paging":false,
        "searching":false,
        "scrollX": true
    } );
    
    
} );
</script>



