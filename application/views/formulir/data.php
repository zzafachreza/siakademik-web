<div class="container-fluid" style="padding-top:2%">
 <div class="bg-white row" style="margin-top:0%;margin-bottom:2%">
     <div class="col col-sm-2">
         <a href="<?php echo site_url() ?>" class="btn bg-white text-black col col-sm-12"><i class="flaticon2-left-arrow-1"></i> Back</a>
     </div>
      <div class="col col-sm-2">
         <a href="<?php echo site_url($modul.'/add') ?>" class="btn bg-utama col col-sm-12"><i class="flaticon-add"></i> Add</a>
     </div>
     <div class="col col-sm-2">
         <a onClick="submitData(0)" href="#" class="btn btn-danger col col-sm-12"><i class="flaticon2-print"></i> print</a>
     </div>
         <div class="col col-sm-2">
         <a onClick="submitData(1)" href="#" class="btn btn-secondary col col-sm-12"><i class="flaticon2-trash"></i> Hapus</a>
     </div>
 </div>

	  	<form action="formulir/print" id="dataForm" method="POST">
	  	    <input type="hidden" name="aksi" id="aksi" value="0" />
	  	    <table class="table table-bordered table-responsive table-striped table-hover tabza2 nowrap display"  style="width:100%">
	  		<thead class="bg-utama" style="color:white">
	  			<tr>
	  			    <th><input type="checkbox" name="checkedAll" id="checkedAll" /></th>
    	            <th>No</th>
    	            	<th>Tanggal</th>
    	            	<th>Status</th>
    	            	<th>Pemesan</th>
    	            	<th>Jumlah</th>
    	            	<th>Ring</th>
    	            	<th>Nama</th>
    	            	<th>Nomor Telepon</th>
    	            	<th>Nomor Seri</th>
    	            	<th>Warna</th>
    	            	<th>Model</th>
    	            	
    	            <th>Gambar</th>
    	            <th>Keterangan</th>
    	  		<th>Input Oleh</th>
    	  			  <th>Aksi</th>
    
    	  	

    	  		</tr>
	  		</thead>
	  		<tbody>
	  	
	  				<?php
	  				$no=0;
	                $sql = "SELECT * FROM data_$modul a JOIN data_user b ON a.fid_user = b.id";
	  				foreach($this->db->query($sql)->result() as $row){
	  				$no++;
	  			
		  		?>
		  			<tr>
		  			    <td><input type="checkbox" name="checkAll[]" value="<?php echo $row->id_formulir ?>" class="checkSingle" /></td>
		  			      <td><?php echo $no; ?></td>
		  			      	<td><?php echo $row->tanggal ?> <?php echo $row->jam ?></td>
		  			      	<td><?php echo $row->status_formulir ?></td>
		  			      	<td><?php echo $row->pemesan ?></td>
		  			      	<td><?php echo $row->jumlah ?></td>
		  			      	<td><?php echo $row->ring ?></td>
		  			      	<td><?php echo $row->nama ?></td>
		  			      	<td><?php echo $row->telepon ?></td>
		  			      	<td><?php echo $row->nomor_seri ?></td>
		  			      	<td><?php echo $row->warna ?></td>
		  			      	<td><?php echo $row->model ?></td>
		  			    	<td><img src="<?php echo $row->{'file_'.$modul} ?>" height="80" /></td>
		  			  
		  			
					      	<td><?php echo $row->keterangan ?></td>
					      	<td><?php echo $row->nama_lengkap ?></td>
		  			
		  			  	<td>
		  				    
		  		
		  				<a href="<?php echo site_url($modul.'/detail/'.$row->{'id_' . $modul}) ?>" class="btn btn-danger"><i class="flaticon2-print"></i> Print</a>
		  				 <?php if($_SESSION['level']=="Admin") { ?>
		  					<a href="<?php echo site_url($modul.'/edit/'.$row->{'id_' . $modul}) ?>" class="btn bg-kedua"><i class="flaticon-edit"></i></a>

		  					<a onClick="return confirm('Apakah kamu yakin akan hapus ini ?')" href="<?php echo site_url($modul.'/delete/'.$row->{'id_' . $modul}) ?>" class="btn bg-ketiga"><i class="flaticon-delete"></i></a>	
                         <?php } ?>

		  				</td>
		  			

		  	        
		  			
		  				
		  			</tr>

		  	<?php } ?>
		  			
	  		</tbody>
	  	</table>
	  	</form>



</div>

<script type="text/javascript">

function submitData(x){
    
    if(x==0){
        $("#aksi").val(0);
    }else{
         $("#aksi").val(1);
    }
    
    $("#dataForm").submit();
    // if(x==0){
    //      $("#dataForm").submit();
    // }else{
    //      $("#dataForm").submit();
    // }
}

$("#checkedAll").change(function() {
        if (this.checked) {
            $(".checkSingle").each(function() {
                this.checked=true;
            });
        } else {
            $(".checkSingle").each(function() {
                this.checked=false;
            });
        }
    });

    $(".checkSingle").click(function () {
        if ($(this).is(":checked")) {
            var isAllChecked = 0;

            $(".checkSingle").each(function() {
                if (!this.checked)
                    isAllChecked = 1;
            });

            if (isAllChecked == 0) {
                $("#checkedAll").prop("checked", true);
            }     
        }
        else {
            $("#checkedAll").prop("checked", false);
        }
    });
    
    
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
     'Warning',
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
        "searching":true,
    } );
    
    
} );
</script>



