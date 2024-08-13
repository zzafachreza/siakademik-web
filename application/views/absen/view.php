<style>
    @media print{
        .hilang{
            display:none;
        }
    }
    #map { height: 800px; }
</style>

<?php
$sqlCom = "SELECT * FROM data_company limit 1";
$hasilCom = $this->db->query($sqlCom);

$comp = $hasilCom->result();

$id = $this->uri->segment(3);
$data = $this->db->query("SELECT * FROM data_absen WHERE id_absen='$id'")->row_object();



?>
 <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="">
   
<nav aria-label="breadcrumb">
	  <ol class="breadcrumb hilang">
	    <li class="breadcrumb-item"><a href="<?php echo site_url() ?>">Home</a></li>
	    <li class="breadcrumb-item"><a href="<?php echo site_url('transaksi') ?>">Data Absensi</a></li>
	    <li class="breadcrumb-item active" aria-current="page">Detail</li>
	  </ol>
</nav>
<div class="container-fluid">

	<div class="card">
	  <div class="card-header">
	  		
	
	<a href="<?php echo site_url('absen') ?>" class="hilang btn bg-ketiga"><i class="flaticon2-left-arrow-1"></i> Kembali</a>

		  </div>  
		  	   
	  	      
	  	<div class="card-body">
	  	 
	  
	  	  <div class="row">
	  	      <div class="col col-sm-6">
	  	           <table class="table table-bordered" style="width:100%">
	  	        <tr>
	  	            <th>
	  	               Nama Lengkap
	  	            </th>
	  	            <td><?php echo $data->nama ?>
	  	            </td>
	  	            
	  	        </tr>
	  	        <tr>
	  	            <th>
	  	                Tanggal
	  	            </th>
	  	            <td><?php echo Indonesia3Tgl( $data->tanggal) ?></td>
	  	        </tr>
	  	        <tr>
	  	            <td>Foto Absen</td>
	  	            <td>
	  	                 <img  src="<?php echo site_url().$data->foto_absen ?>" width="50%"/>
	  	            </td>
	  	        </tr>
	  	              <tr>
	  	            <th>
	  	               Jenis Absen
	  	            </th>
	  	            <td><?php echo $data->jenis ?>
	  	            </td>
	  	            
	  	        </tr>
	  
	  	      
	  	     
	  	        
	  	    </table>
	  	   
	  	      </div>
	  	      <div class="col col-sm-6">
	  	           <div class="row">
	  	        <div class="col col-sm-6">
	  	          
	  	   
	  	   
	  	       
	  	        </div>
	  	        
	  	        </div>
	  	    </div>
	  	      </div>
	  	        <center><h3>Lihat Lokasi Absen</h3></center>
	  	  </div>
	  	   
	  	   
	  	  
	  	   
	  	     <div id="map"></div>
	  	 
		
			  
		  </div>
		  <div class="card-footer">

		  </div>
	
	</div>


</div>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
<script>
	var map = L.map('map').setView([<?php echo $data->latitude ?>, <?php echo $data->longitude ?>], 20);

	L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
	}).addTo(map);

	var LeafIcon = L.Icon.extend({
		options: {
// 			shadowUrl: 'leaf-shadow.png',
			iconSize:     [35, 35],
			shadowSize:   [50, 64],
			iconAnchor:   [22, 94],
			shadowAnchor: [4, 62],
			popupAnchor:  [-3, -76]
		}
	});

	var masuk = new LeafIcon({iconUrl: 'https://okeadmin.com/map.png'});
	

	L.marker([<?php echo $data->latitude ?>, <?php echo $data->longitude ?>], {icon: masuk}).bindPopup("ABSEN").addTo(map);



</script>


