 <?php
$sqlCom = "SELECT * FROM data_company limit 1";
$hasilCom = $this->db->query($sqlCom);

$comp = $hasilCom->row_object();
                     
	  				
?>

<style>
    .p1{
        text-align:center;
        font-weight:600;
    }
        .p2{
        text-align:center;
        font-weight:300;
        font-size:small;
    }
</style>

<div class="container-fluid">
     <p  style="color:#000">Selamat datang <strong><?php echo $_SESSION['nama_lengkap'] ?></strong>   <span class="badge badge-primary">Tipe Akun :  <strong><?php echo $_SESSION['level'] ?></strong></span></p>
   
      <h5 style="color:#000"><?php echo $comp->nama ?></h5>
     
     <!-- Earnings (Monthly) Card Example -->
     
        <center>
             <img src="<?php echo base_url() ?><?php echo $comp->foto ?>" width="350">
             <p  style="color:#000"><?php echo $comp->deskripsi ?></p>
             
          
      </center>
     
    

</div>