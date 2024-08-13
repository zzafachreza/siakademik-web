<?php
require_once("koneksi.php");
require_once("dompdf/autoload.inc.php");
use Dompdf\Dompdf;
$dompdf = new Dompdf();

 $id_customer= $_GET['id_customer'];

$sql="select * from data_referensi where id_customer='$id_customer'";
$hasil = $conn->query($sql);




// $html = '<center><h3>Daftar Nama Siswa</h3></center><hr/><br/>';
// $html .= '<table border="1" width="100%">
//  <tr>
//  <th>No</th>
//  <th>Nama</th>
//  <th>Kelas</th>
//  <th>Alamat</th>
//  </tr>';

// $html .= "</html>";


// $dompdf->loadHtml($html);
// $dompdf->setPaper('A4', 'potrait');
// $dompdf->render();
// $dompdf->stream("dompdf_out.pdf", array("Attachment" => false));
// exit(0);

$nama =$_GET['nama'];
$hp = $_GET['hp'];
$alamat=$_GET['alamat'];
$ID = date('Ymdhis');

$html ='<p style="text-align:right">Nomor Tiket Referensi : <strong>'.$ID.'</strong>
</p>
<table width="100%" style="border-collapse: collapse;" border="1" cellpadding="10">
    <tr>
        <td width="150px">Nama</td>
        <td>'.$nama.'</td>
    </tr>
     <tr>
        <td>No. Whatsapp</td>
        <td>'.$hp.'</td>
    </tr>
     <tr>
        <td>Alamat</td>
        <td>'.$alamat.'</td>
    </tr>
</table>
<hr/>';


$html .='<table width="100%" style="border-collapse: collapse;" border="1" cellpadding="10">';

   while($r = $hasil->fetch()) { 
                                # code...
                                
                                $id_customer_in = $r['id_customer_in'];
                                
                               
                                
                                
                                $sql3="select foto from tb_foto_out WHERE id_barang='$id_customer_in' limit 1";
                                $hasil3 =  $conn->query($sql3);
                                $data3 = $hasil3->fetch();
                                $fotoAfter=$data3['foto'];
                                
                                
                               $sqlPort="select tb_customer_in.id,id_brand,brand,id_jenis_sepatu,jenis_sepatu,size,insole,tali_sepatu,request_tambahan,size,insole,tali_sepatu,rating,komentar
                 from tb_customer_in join tb_jenis_sepatu on tb_jenis_sepatu.id = tb_customer_in.id_jenis_sepatu 
                 join tb_brand on tb_brand.id = tb_customer_in.id_brand where tb_customer_in.id='$id_customer_in'";
                 
                          $hasil4 = $conn->query($sqlPort);
                                $port = $hasil4->fetch();
                           
                            
                            $html.='<tr>
                                <th colspan="4">&nbsp;</th>
                            </tr>
                            
                            <tr>
                                <td colspan="4">Data Sepatu</td>
                            </tr>
                            <tr>';
                      
                                
                                 $sql2="select foto from tb_foto_in WHERE id_barang='$id_customer_in' limit 2";
                                $hasil2 = $conn->query($sql2);
                                while($rB = $hasil2->fetch()){
                                 $fotoBefore=$rB['foto'];
                                
                                
                                $html .='<td>
                                    <img src="https://admin.shoeworkshop.id/img/foto_in/'.$fotoBefore.'" style="width: 150px;max-height:100px">
                                </td>';
                                
                                
                                 } 
                                 
                                $sql3="select foto from tb_foto_out WHERE id_barang='$id_customer_in' limit 2";
                                $hasil3 =  $conn->query($sql3);
                      
                                while($rA = $hasil3->fetch()){
                                    
                                    $fotoAfter = $rA['foto'];
                                
                                    $html .='<td>
                                    <img src="https://admin.shoeworkshop.id/img/foto_out/'.$fotoAfter.'" style="width: 150px;max-height:120px">
                                    </td>';
                                
                                }
                                
                                $html.='</tr>
                            <tr>
                                <td>'.$port['brand'].'</td>
                                <td>'.$port['jenis_sepatu'] .'</td>
                                <td colspan="2">Size : '. $port['size'].'</td>
                            </tr>';
                                

                            }
                            
                            
                            $html .='</table >';

$dompdf->loadHtml($html);
$dompdf->set_option('isRemoteEnabled', true);
$dompdf->setPaper('A4', 'potrait');
$dompdf->render();
$dompdf->stream("Ref_".$ID.".pdf", array("Attachment" => false));
exit(0);

                        ?>

