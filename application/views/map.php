<style>
    @media print{
        .hilang{
            display:none;
        }
    }
    #map { height: 800px; }
</style>

<?php
 function Indonesia3Tgl($tanggal){
  $namaBln = array("01" => "Januari", "02" => "Februari", "03" => "Maret", "04" => "April", "05" => "Mei", "06" => "Juni", 
           "07" => "Juli", "08" => "Agustus", "09" => "September", "10" => "Oktober", "11" => "November", "12" => "Desember");
           
  $tgl=substr($tanggal,8,2);
  $bln=substr($tanggal,5,2);
  $thn=substr($tanggal,0,4);
  $tanggal ="$tgl ".$namaBln[$bln]." $thn";
  return $tanggal;
}

$sqlCom = "SELECT * FROM data_company limit 1";
$hasilCom = $this->db->query($sqlCom);

$comp = $hasilCom->result();

$id = $this->uri->segment(3);
$data = $this->db->query("SELECT * FROM data_absen JOIN data_user ON data_absen.ref_member = data_user.id where data_absen.id_absen='$id' ORDER BY id_absen*1 DESC")->row_object();



?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="">
   
<div id="map"></div>


</div>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
<script>
	var map = L.map('map').setView([<?php echo $data->latitude_masuk ?>, <?php echo $data->longitude_masuk ?>], 13);

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

	var masuk = new LeafIcon({iconUrl: 'https://absen.okeadmin.com/upload/240506121911logo.png'}),
		pulang = new LeafIcon({iconUrl: 'https://absen.okeadmin.com/upload/240506121911logo.png'});
	

	L.marker([<?php echo $data->latitude_masuk ?>, <?php echo $data->longitude_masuk ?>], {icon: masuk}).bindPopup("ABSEN MASUK").addTo(map);
	L.marker([<?php echo $data->latitude_pulang ?>, <?php echo $data->longitude_pulang ?>], {icon: pulang}).bindPopup("ABSEN PULANG").addTo(map);


</script>

