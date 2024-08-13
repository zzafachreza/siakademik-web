<?php
$id = $this->uri->segment(3);
$data = $this->db->query("SELECT * FROM data_$modul WHERE id_$modul='$id'")->row_object();

?>
<nav aria-label="breadcrumb">
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="<?php echo site_url() ?>">Home</a></li>
	    <li class="breadcrumb-item"><a href="<?php echo site_url($modul) ?>"><?php echo ucfirst($modul) ?></a></li>
	    <li class="breadcrumb-item active" aria-current="page">Detail</li>
	  </ol>
</nav>
<div class="container-fluid">

	<div class="card">
	  <div class="card-header">
	  		
	
	<a href="<?php echo site_url($modul) ?>" class="btn bg-ketiga"><i class="flaticon2-left-arrow-1"></i> Kembali</a>
	
  
	  	<div class="card-body">

	  		  
			    <?php
    	  			

    	  			
    	  			foreach($this->db->query("SHOW COLUMNS from `data_$modul` WHERE FIELD !='id_$modul'")->result() as $col){
    	  			?>
    	  	
    	  	
    	<?php 
    	  			
    	  			if($col->Field=="file_$modul"){
    	  			        ?>
    	  			        
    	
        			         <!--<div class="form-group col col-sm-6">-->
                			 <!--   <label><strong>	<?php echo ucfirst(str_replace("_"," ",$col->Field)) ?> </strong></label>-->
                    <!--			  <div>-->
                    <!--			       <a href="<?php echo site_url().$data->{$col->Field} ?>"><img src="<?php echo site_url().$data->{$col->Field} ?>" width="200" /></a>-->
                    <!--			  </div>-->
                			 <!--</div>-->
        			  
        			  <?php 
    	  			    }else{
    	  			        ?>
    	  			        
    	  			        <div class="form-group col col-sm-6">
                			    <label><strong>	<?php echo ucfirst(str_replace("_"," ",$col->Field)) ?> </strong></label>
                			   <p><?php echo $data->{$col->Field} ?></p>
                			 </div>
    	  			        
    	  			        <?php
    	  			    }
    	  			?>
    	  			
    	  			
    	  	
    	  			
    	  			
    	  			<?php } ?>
<hr />


<div class="row">
    <?php

    
        foreach($this->db->query("SELECT *,(SELECT count(*) FROM data_hadir WHERE fid_sesi=a.id_sesi) hadir FROM data_sesi a WHERE a.fid_murid ='$id'")->result() as $r){

?>

<div class="col-sm-4 p-1">
    <div class="card">
        <table class="table">
            <tr>
                <th>Status Sesi</th>
                <td><?php echo $r->status ?></td>
            </tr>
              <tr>
                <th>Status Bayar</th>
                <td><?php echo $r->bayar ?></td>
            </tr>
             <tr>
                <th>Tanggal Bayar</th>
                <td><?php echo $r->tanggal_bayar ?></td>
            </tr>
                 <tr>
                <th>jumlah Pertemuan</th>
                <td><?php echo $r->jumlah ?></td>
            </tr>
             <tr>
                <th>jumlah Hadir</th>
                <td><?php echo $r->hadir ?></td>
            </tr>
             <tr>
                <th>Sisa Pertemuan</th>
                <td><?php echo $r->jumlah-$r->hadir ?></td>
            </tr>
        </table>
        <h5>Informasi Kehadiran</h5>
        <table class="table table-borderd">
            <tr class="bg-utama">
                <th>No</th>
                <th>Tanggal</th>
            </tr>
             <?php

                $no=1;
                        foreach($this->db->query("SELECT * FROM data_hadir WHERE fid_sesi ='".$r->id_sesi."'")->result() as $s){
                
                ?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $s->tanggal ?></td>
                </tr>
                <?php $no++; } ?>
        </table>
    </div>
</div>


<?php } ?>

</div>
	
		  </div>
		  <div class="card-footer">

		  </div>
	
	</div>


</div>



