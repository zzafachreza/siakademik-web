
<?php

// echo "<center><h1>APLIKASI SUDAH READY</h1></center>";
// echo "<center><h1>SILAHKAN HUBUNGI ADMIN ZAVALABS</h1></center>";
// die();



$sqlCom = "SELECT * FROM data_company limit 1";
$hasilCom = $this->db->query($sqlCom);

$comp = $hasilCom->result();


?>

<!DOCTYPE html>
<html>
<head>
	<base href="">
	<meta charset="utf-8" />
	<title><?php echo $comp[0]->nama ?></title>
	<meta name="description" content="<?php echo $comp[0]->nama ?>">
	 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- area css -->
    <link href="<?php echo site_url() ?>assets/css/pagePreloaders.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo site_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo site_url() ?>assets/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo site_url() ?>assets/css/selectize.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo site_url() ?>assets/css/app.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo site_url() ?>assets/css/flaticon/flaticon.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo site_url() ?>assets/css/flaticon2/flaticon.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo site_url() ?>assets/css/bootstrap-datepicker.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo site_url() ?>assets/css/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo site_url() ?>assets/css/chart.css" rel="stylesheet" type="text/css" />  
    <link rel="stylesheet" type="text/css" href="<?php echo site_url() ?>assets/css/app.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.2/dist/sweetalert2.min.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo site_url() ?>assets/css/calendar.css">
    
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    

      <script type="text/javascript" src="<?php echo site_url() ?>assets/js/jquery.min.js"></script>

  <script type="text/javascript" src="<?php echo site_url() ?>assets/js/dataTables.min.js"></script>

  <script type="text/javascript" src="<?php echo site_url() ?>assets/js/dataTables.bootstrap4.min.js"></script>

  <script type="text/javascript" src="<?php echo site_url() ?>assets/js/notify.js"></script>
  
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.2/dist/sweetalert2.all.min.js"></script>

  <script type="text/javascript" src="<?php echo site_url() ?>assets/js/pagePreloaders.js"></script>

  <script type="text/javascript" src="<?php echo site_url() ?>assets/js/popper.min.js"></script>

  <script type="text/javascript" src="<?php echo site_url() ?>assets/js/bootstrap.min.js"></script>

  <script type="text/javascript" src="<?php echo site_url() ?>assets/js/selectize.js"></script>

  <script type="text/javascript" src="<?php echo site_url() ?>assets/js/bootstrap-datepicker.js"></script>

  <script type="text/javascript" src="<?php echo site_url() ?>assets/js/moment.js"></script>

  <script type="text/javascript" src="<?php echo site_url() ?>assets/js/chart.js"></script>

  <script type="text/javascript" src="<?php echo site_url() ?>assets/js/app.js"></script>
     
       <script src="<?php echo site_url() ?>assets/js/calendar_main.js" ></script>
         <script src="<?php echo site_url() ?>assets/js/calendar.js" ></script>
 
     
    <link rel="manifest" href="<?php echo site_url() ?>manifest.json">

    <!-- area icon -->

  <link rel="shortcut icon" href="<?php echo site_url() ?><?php echo $comp[0]->foto ?>" />
</head>

<div id="loader">
 <div class="lds-ripple"><div></div><div></div></div>
 
</div>

<div id="flash-message-error">
  test
</div>
<div id="flash-message-success">
  test
</div>

<style>

#loader{
  display: none;
  position: absolute;
  justify-content: center;
  align-items: center;
  align-content: center;
  z-index: 99;
  width: 100%;
  height: 100%;
  padding-left: 46%;
  padding-top: 20%;
  background-color:white;
  opacity: 0.9;
}

/*loader automatic*/
.lds-ripple,
.lds-ripple div {
  box-sizing: border-box;
}
.lds-ripple {
  display: inline-block;
  position: relative;
  width: 300px;
  height: 300px;
}
.lds-ripple div {
  position: absolute;
  border:7px solid <?php echo $comp[0]->warna_utama ?>;
  opacity: 1;
  border-radius: 50%;
  animation: lds-ripple 1s cubic-bezier(0, 0.2, 0.8, 1) infinite;
}
.lds-ripple div:nth-child(2) {
  animation-delay: -0.5s;
}
@keyframes lds-ripple {
  0% {
    top: 36px;
    left: 36px;
    width: 8px;
    height: 8px;
    opacity: 0;
  }
  4.9% {
    top: 36px;
    left: 36px;
    width: 8px;
    height: 8px;
    opacity: 0;
  }
  5% {
    top: 36px;
    left: 36px;
    width: 8px;
    height: 8px;
    opacity: 1;
  }
  100% {
    top: 0;
    left: 0;
    width: 80px;
    height: 80px;
    opacity: 0;
  }
}

@import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;800&family=Poppins:wght@300;400;600&display=swap');
  a,h1,h6,i,p,span{
     font-family: 'Poppins', sans-serif;
 }
 .form-eza:focus {
      outline: none; 
  	 color: #000;
     border-bottom:1px solid #D01818;
     
     
 }
 

 
.form-eza {
    display: block;
    width: 100%;
    height: calc(1.5em + 0.75rem + 2px);
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border-bottom: 1px solid #ced4da;
    border-top: 0px;
    border-left: 0px;
    border-right: 0px;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}


 .bg-utama{
        background-color:<?php echo $comp[0]->warna_utama ?>;
        color:#FFF;
        border-radius:0px;
        
    }
    
    .text-utama{
        color:<?php echo $comp[0]->warna_utama ?>;
    }
    .bg-utama:hover{
       box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
       color:#FFF;
    }
    
  .bg-kedua{
        background-color:<?php echo $comp[0]->warna_kedua ?>;
        color:#FFF;
        border-radius:0px;
 
    }
    
    .text-kedua{
        color:<?php echo $comp[0]->warna_kedua ?>;
    }
    .bg-kedua:hover{
       box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
    }
    
    
    
    .bg-ketiga{
        background-color:<?php echo $comp[0]->warna_ketiga ?>;
        color:#FFF;
        border-radius:0px;
 
    }
    
    .text-ketiga{
        color:<?php echo $comp[0]->warna_ketiga ?>;
    }
    .bg-ketiga:hover{
        color:white;
       box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
    }
    
    

    
    .nav-item{
        padding-left:0%;
        /*border:1px solid black;*/
        margin-bottom:0%;
        border-radius:2px;
        font-size:small;
    }
    
</style> 
<html>
    <body>
        <div class="row" style="padding:2%">
    
    <?php

$im = implode(",",$_POST['checkAll']);
 $sql="SELECT * FROM data_formulir WHERE id_formulir in(".$im.")";
foreach($this->db->query($sql)->result() as $r){

?>
    
    <div class="col-sm-4" style="padding:5px">
         <table width="100%" border="1" cellpadding="4" style="border-collapse: collapse;">
     

       <tr>
         <td><strong>PEMESAN</strong></td>
         <td><?php echo $r->pemesan ?></td>
     </tr>
       <tr>
         <td><strong>JUMLAH</strong></td>
         <td><?php echo $r->jumlah ?></td>
     </tr>
       <tr>
         <td><strong>RING</strong></td>
         <td><?php echo $r->ring ?></td>
     </tr>  <tr>
         <td><strong>NAMA</strong></td>
         <td><?php echo $r->nama ?></td>
     </tr>
       <tr>
         <td><strong>No. TLP</strong></td>
         <td><?php echo $r->telepon ?></td>
     </tr>
       <tr>
         <td><strong>No SERI</strong></td>
         <td><?php echo $r->nomor_seri ?></td>
     </tr>
       <tr>
         <td><strong>WARNA</strong></td>
         <td><?php echo $r->warna ?></td>
     </tr>
       <tr>
         <td><strong>MODEL</strong></td>
         <td><?php echo $r->model ?></td>
     </tr>
        <tr>
        <td colspan="2">
            <strong>KETERANGAN</strong>
            <img src="<?php echo site_url().$r->file_formulir ?>" width="100%" height="200" />
        
        
        </td>
        
     </tr>

</table>
    </div>
<?php } ?>
</div>
    </body>
</html>

<script>
    window.print();
    window.onafterprint = function(){
      history.back()
  console.log("Printing completed...");
}
</script>