<?php
require_once("koneksi.php");
require_once("dompdf/autoload.inc.php");
use Dompdf\Dompdf;
$dompdf = new Dompdf();

$html = '<center><h3>Daftar Hadir Pegawai</h3></center><hr/><br/>';
$html .= '<table border="1" width="100%" style=" border-collapse: collapse;" >
 <tr>
    	  			<th>No</th>
    	  			<th>Pengguna</th>
    	  			<th>Tanggal</th>
    	  			<th>Jam Masuk</th>
    	  			<th>Jam Pulang</th>
    	  			<th>Lama Bekerja</th>
 </tr>';
 
 
 		$no=0;
	  			
	                $sql="SELECT * FROM data_absen JOIN data_user ON data_absen.ref_member = data_user.id";
	  			
	  			
	  			    $hasil=$conn->query($sql);
	  				while($row = $hasil->fetch()){
	  				$no++;
	  				
	  				  $awal=$row[tanggal].' '.$row[jam_masuk];
                $waktuawal  = date_create($awal); //waktu di setting
                $akhir=$row[tanggal].' '.$row[jam_pulang];
                $waktuakhir = date_create($akhir); //2019-02-21 09:35 waktu sekarang
                
                $diff  = date_diff($waktuawal, $waktuakhir);
                          
                $durasi = $diff->h . ' jam '.$diff->i . ' menit '.$diff->s . ' detik';
	  	
		  	
		  			$html .='<tr><td>'.$no .'</td><td>'.$row[nip].' - '.$row[nama_lengkap] .'</td><td>'.$row[tanggal] .'</td><td>'.$row[jam_masuk] .'</td><td>'.$row[jam_pulang] .'</td><td>'.$durasi .'</td></tr>';

	  				}
		  	

$html .= "</html>";


$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'landscape');
$dompdf->render();
$dompdf->stream("dompdf_out.pdf", array("Attachment" => false));
exit(0);
?>