<?php
require_once("../koneksi.php");
require_once("../dompdf/autoload.inc.php");
use Dompdf\Dompdf;
$dompdf = new Dompdf();

$html = '<center><h3>Daftar Izin Pegawai</h3></center><hr/><br/>';
$html .= '<table border="1" width="100%" style=" border-collapse: collapse;" >
 <tr>
    	  		    <th>No</th>
    	  		    <th>NIK</th>
    	  			<th>Nama Lengkap</th>
    	  			<th>Tipe Izin</th>
    	  			<th>Tanggal</th>
    	  			<th>Jumlah</th>
    	  			<th>Keterangan/Alasan</th>
    	  			<th>Status</th>
 </tr>';
 
 
 		$no=0;
	  			
	                $sql="SELECT * FROM data_izin JOIN data_user ON data_izin.ref_member = data_user.id ORDER BY id_izin*1 DESC";
	  			
	  			
	  			    $hasil=$conn->query($sql);
	  				while($row = $hasil->fetch()){
	  				$no++;
	  				
	  		
	  	
		  	
		  			$html .='<tr><td>'.$no .'</td><td>'.$row[nip] .'</td><td>'.$row[nama_lengkap] .'</td><td>'.$row[tipe] .'</td><td>'.Indonesia3Tgl($row[tanggal]) .'</td><td>'.$row[jumlah] .' Hari</td><td>'.$row[keterangan] .'</td><td>'.$row[status] .'</td></tr>';

	  				}
		  	

$html .= "</html>";


$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'landscape');
$dompdf->render();
$dompdf->stream("dompdf_out.pdf", array("Attachment" => false));
exit(0);
?>