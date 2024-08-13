<div class="container-fluid" style="margin-top:2%">
   
            <div style="margin-bottom:2%">
                	<a href="<?php echo site_url() ?>" class="btn bg-ketiga"><i class="flaticon2-left-arrow-1"></i> Kembali</a>
	              <a href="<?php echo site_url($modul.'/add') ?>" class="btn bg-utama"><i class="flaticon-add"></i> Tambah</a>
            </div>
 

	  	<table class="table table-bordered table-striped table-hover tabza2 nowrap display"  style="width:100%">
	  		<thead class="bg-utama" style="color:white">
	  			<tr>
    	  			<th>No</th>
    	  			<th>foto</th>
    	  			<th>Judul</th>
    	  			<th>Action</th>
    	  		</tr>
	  		</thead>
	  		<tbody>
	  			<?php
	  				$no=0;
	  				foreach($this->db->query("SELECT * FROM data_$modul")->result() as $row):
	  				$no++;
		  		?>
		  			<tr>
		  				<td><?php echo $no ?></td>
		  					<td><img src="<?php echo $row->{'foto_' . $modul} ?>" width="100" /></td>
		  				
		  							<td><?php echo $row->judul ?></td>

		  				
		  						
		  


		  				
		  				
                	  			
    	  			
		  			
		  				<td>
		  				<a href="<?php echo site_url($modul.'/detail/'.$row->{'id_' . $modul}) ?>" class="btn bg-utama"><i class="flaticon-search"></i></a>
		  					<a href="<?php echo site_url($modul.'/edit/'.$row->{'id_' . $modul}) ?>" class="btn bg-kedua"><i class="flaticon-edit"></i></a>

		  					<a href="<?php echo site_url($modul.'/delete/'.$row->{'id_' . $modul}) ?>" class="btn bg-ketiga"><i class="flaticon-delete"></i></a>	


		  				</td>
		  			</tr>

		  		<?php 
		  				endforeach;
		  		?>
	  		</tbody>
	  	</table>



</div>

<script type="text/javascript">

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
        "scrollX": true
    } );
} );
</script>



