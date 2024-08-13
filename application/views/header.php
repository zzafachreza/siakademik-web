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


<?php

error_reporting(0);
    if(isset($_SESSION['username'])){

 
 $nav = explode("/", $_SERVER['REQUEST_URI']);

$menu = $nav[1];
$menu2 = $nav[2];



?>

<body style="font-family: 'PT Sans', sans-serif;">
  <nav class="navbar navbar-expand-lg navbar-light bg-white" style="border-bottom:4px solid <?php echo $comp[0]->warna_utama ?>">
  <a class="navbar-brand" href="<?php echo site_url() ?>">
    <img src="<?php echo site_url() ?><?php echo $comp[0]->foto ?>" width="50" class="d-inline-block align-top" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      
      
      
      
    <li class="nav-item" <?php echo $menu=="" ? "style='background-color:".$comp[0]->warna_utama.";color:white;border-radius:5px'":"" ?>>
        <a class="nav-link" href="<?php echo site_url() ?>" <?php echo $menu=="" ? "style='background-color:".$comp[0]->warna_utama.";color:white;border-radius:5px'":"" ?>><i class="flaticon-pie-chart"></i> Dashboard</a>
      </li>
      
       <li class="nav-item" <?php echo $menu=="siswa" ? "style='background-color:".$comp[0]->warna_utama.";color:white;border-radius:5px'":"" ?>>
        <a class="nav-link" href="<?php echo site_url('siswa') ?>" <?php echo $menu=="siswa" ? "style='background-color:".$comp[0]->warna_utama.";color:white;border-radius:5px'":"" ?> ><i class="flaticon-list"></i> Data Siswa</a>
      </li>
      
             <li class="nav-item" <?php echo $menu=="nilai" ? "style='background-color:".$comp[0]->warna_utama.";color:white;border-radius:5px'":"" ?>>
        <a class="nav-link" href="<?php echo site_url('nilai') ?>" <?php echo $menu=="nilai" ? "style='background-color:".$comp[0]->warna_utama.";color:white;border-radius:5px'":"" ?> ><i class="flaticon-notes"></i> Data Nilai</a>
      </li>
            <li class="nav-item" <?php echo $menu=="absen" ? "style='background-color:".$comp[0]->warna_utama.";color:white;border-radius:5px'":"" ?>>
        <a class="nav-link" href="<?php echo site_url('absen') ?>" <?php echo $menu=="absen" ? "style='background-color:".$comp[0]->warna_utama.";color:white;border-radius:5px'":"" ?> ><i class="flaticon-download"></i> Data Absen</a>
      </li>
      
            <li class="nav-item" <?php echo $menu=="informasi" ? "style='background-color:".$comp[0]->warna_utama.";color:white;border-radius:5px'":"" ?>>
        <a class="nav-link" href="<?php echo site_url('informasi') ?>" <?php echo $menu=="informasi" ? "style='background-color:".$comp[0]->warna_utama.";color:white;border-radius:5px'":"" ?> ><i class="flaticon-web"></i> Data Informasi</a>
      </li>
     

  <li class="nav-item" <?php echo $menu=="pengguna" ? "style='background-color:".$comp[0]->warna_utama.";color:white;border-radius:5px'":"" ?>>
        <a class="nav-link" href="<?php echo site_url('pengguna') ?>" <?php echo $menu=="pengguna" ? "style='background-color:".$comp[0]->warna_utama.";color:white;border-radius:5px'":"" ?> ><i class="flaticon-user"></i> Data Guru</a>
      </li>

      
      
      
      
        <?php if($_SESSION['level']=="Admin") { ?>
 

       
  
        <li class="nav-item" <?php echo $menu=="company" ? "style='background-color:".$comp[0]->warna_utama.";color:white;border-radius:5px'":"" ?>>
        <a class="nav-link" href="<?php echo site_url('company') ?>" <?php echo $menu=="company" ? "style='background-color:".$comp[0]->warna_utama.";color:white;border-radius:5px'":"" ?> ><i class="flaticon-cogwheel-2"></i> Pengaturan</a>
      </li>
      
<?php } ?>
     
                 <li class="nav-item" <?php echo $menu=="users" ? "style='background-color:".$comp[0]->warna_utama.";color:white;border-radius:5px'":"" ?>>
        <a class="nav-link" href="<?php echo site_url('users') ?>" <?php echo $menu=="users" ? "style='background-color:".$comp[0]->warna_utama.";color:white;border-radius:5px'":"" ?>><i class="flaticon-user"></i> Profile</a>
      </li>
    
    
  

  
    </ul>
    <ul class="navbar-nav ml-auto">

    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Hallo Selamat datang,<strong> <?php echo $_SESSION['nama_lengkap'] ?></strong></a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo site_url('company') ?>">Pengaturan</a>
          <a class="dropdown-item" href="<?php echo site_url('users') ?>">User Admin</a>
        <a class="dropdown-item" href="<?php echo site_url('login/logout') ?>">Logout</a>
      </div>
    </li>
  </ul>
  </div>
</nav>
<?php
  }
  
  function Indonesia3Tgl($tanggal){
  $namaBln = array("01" => "Januari", "02" => "Februari", "03" => "Maret", "04" => "April", "05" => "Mei", "06" => "Juni", 
           "07" => "Juli", "08" => "Agustus", "09" => "September", "10" => "Oktober", "11" => "November", "12" => "Desember");
           
  $tgl=substr($tanggal,8,2);
  $bln=substr($tanggal,5,2);
  $thn=substr($tanggal,0,4);
  $tanggal ="$tgl ".$namaBln[$bln]." $thn";
  return $tanggal;
}


  function IDRtgl($tanggal){
  $namaBln = array("01" => "Januari", "02" => "Februari", "03" => "Maret", "04" => "April", "05" => "Mei", "06" => "Juni", 
           "07" => "Juli", "08" => "Agustus", "09" => "September", "10" => "Oktober", "11" => "November", "12" => "Desember");
           
  $tgl=substr($tanggal,8,2);
  $bln=substr($tanggal,5,2);
  $thn=substr($tanggal,0,4);
  $tanggal =$tgl.'/'.$bln.'/'.$thn;
  return $tanggal;
}


function format_hari($waktu){
    
   $hari =  date('D', strtotime($waktu));
    
    
    switch($hari){
		case 'Sun':
			$hari_ini = "Minggu";
		break;
 
		case 'Mon':			
			$hari_ini = "Senin";
		break;
 
		case 'Tue':
			$hari_ini = "Selasa";
		break;
 
		case 'Wed':
			$hari_ini = "Rabu";
		break;
 
		case 'Thu':
			$hari_ini = "Kamis";
		break;
 
		case 'Fri':
			$hari_ini = "Jumat";
		break;
 
		case 'Sat':
			$hari_ini = "Sabtu";
		break;
		
		default:
			$hari_ini = "Tidak di ketahui";		
		break;
	}
	
	return $hari_ini;
}
?>
