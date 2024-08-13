
<?php
$id = $this->uri->segment(3);
$r = $this->db->query("SELECT * FROM data_$modul a JOIN data_siswa b ON a.fid_siswa = b.id_siswa WHERE a.id_$modul='$id'")->row_object();
  function Indonesia3Tgl($tanggal){
  $namaBln = array("01" => "Januari", "02" => "Februari", "03" => "Maret", "04" => "April", "05" => "Mei", "06" => "Juni", 
           "07" => "Juli", "08" => "Agustus", "09" => "September", "10" => "Oktober", "11" => "November", "12" => "Desember");
           
  $tgl=substr($tanggal,8,2);
  $bln=substr($tanggal,5,2);
  $thn=substr($tanggal,0,4);
  $tanggal ="$tgl ".$namaBln[$bln]." $thn";
  return $tanggal;
}
?>
<style>
    .page {
  width: 21cm;
  min-height: 29.7cm;
  padding: 2cm;
  margin: 1cm auto;
  border: 1px #D3D3D3 solid;
  border-radius: 5px;
  background: white;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
}
</style>

<div class="page">
    <center><h2>KETERANGAN DIRI ANAK</h2></center>
    
    <table border="0" width="100%" style="border-collapse:collapse;font-size:large" cellpadding="10" cellspacing="5">
        <tr>
            <td colspan="4">1. Nama Anak Didik</td>
        </tr>
        <tr>
            <td width="5%"></td>
            <td width="30%">a. Nama Lengkap</td>
            <td width="2%">:</td>
            <td style="border-bottom:1px dashed black"><?php echo $r->nama_lengkap ?></td>
        </tr>
         <tr>
            <td width="5%"></td>
            <td width="30%">b. Nama Panggilan</td>
            <td width="2%">:</td>
            <td style="border-bottom:1px dashed black"><?php echo $r->nama_panggilan ?></td>
        </tr>
        <tr>
            <td colspan="2">2. Nomor Induk</td>
              <td width="2%">:</td>
            <td style="border-bottom:1px dashed black"><?php echo $r->nomor_induk ?></td>
        </tr>
        <tr>
            <td colspan="2">3. Jenis Kelamin</td>
              <td width="2%">:</td>
            <td style="border-bottom:1px dashed black"><?php echo $r->jenis_kelamin ?></td>
        </tr>
         <tr>
            <td colspan="2">4. Tempat, Tanggal Lahir</td>
              <td width="2%">:</td>
            <td style="border-bottom:1px dashed black"><?php echo $r->tempat_lahir ?>, <?php echo Indonesia3Tgl($r->tanggal_lahir) ?></td>
        </tr>
           <tr>
            <td colspan="2">5. Agama</td>
              <td width="2%">:</td>
            <td style="border-bottom:1px dashed black"><?php echo $r->agama ?></td>
        </tr>
           <tr>
            <td colspan="2">6. Anak Ke</td>
              <td width="2%">:</td>
            <td style="border-bottom:1px dashed black"><?php echo $r->anak_ke ?></td>
        </tr>
           <tr>
            <td colspan="2">7. Status anak dalam keluarga</td>
              <td width="2%">:</td>
            <td style="border-bottom:1px dashed black"><?php echo $r->status_anak ?></td>
        </tr>
         <tr>
            <td colspan="4">8. Nama Orang Tua</td>
        </tr>
        <tr>
            <td width="5%"></td>
            <td width="30%">a. Ayah Kandung</td>
            <td width="2%">:</td>
            <td style="border-bottom:1px dashed black"><?php echo $r->nama_ayah ?></td>
        </tr>
         <tr>
            <td width="5%"></td>
            <td width="30%">b. Ibu Kandung</td>
            <td width="2%">:</td>
            <td style="border-bottom:1px dashed black"><?php echo $r->nama_ibu ?></td>
        </tr>
           <tr>
            <td colspan="2">9. Nama Wali (jika ada)</td>
              <td width="2%">:</td>
            <td style="border-bottom:1px dashed black"><?php echo $r->nama_wali ?></td>
        </tr>
         <tr>
            <td colspan="2">10. Status Hubungan dengan anak</td>
              <td width="2%">:</td>
            <td style="border-bottom:1px dashed black"><?php echo $r->status_wali ?></td>
        </tr>
            <tr>
            <td colspan="2">11. Pekerjaan Orang TUa / Wali *)</td>
              <td width="2%">:</td>
            <td style="border-bottom:1px dashed black"><?php echo $r->pekerjaan_orangtua ?></td>
        </tr>
           <tr>
            <td colspan="2">12. Alamat Orang TUa / Wali *)</td>
              <td width="2%">:</td>
            <td style="border-bottom:1px dashed black"><?php echo $r->alamat_orangtua ?></td>
        </tr>
    </table>
    <div style="display:flex;margin-top:50px">
        <div style="flex:60%;padding:10px">
            <img src="<?php echo site_url().$r->file_siswa ?>" width="200" /><br/>
            <br/>
            <i><small>*) Coret yang tidak perlu</small></i>
        </div>
        <div style="flex:40%;padding:10px">
                 <center>
            <p>Tangerang, <?php echo Indonesia3Tgl(date('Y-m-d')) ?></p>
            <img src="<?php echo site_url().$r->file_ttd ?>" width="200" /><br/>
            <br/>
       
                <small style="border-bottom:1px dashed black">( <?php echo $r->nama_guru ?> )</small>
            </center>
        </div>
    </div>
    
</div>

<div class="page">
      <table border="1" width="100%" style="border-collapse:collapse;font-size:large" cellpadding="10" cellspacing="5">
        <tr>
            <th rowspan="2" width="5%" >No. </th>
            <th rowspan="2">ASPEK PERKEMBANGAN INDIKATOR</th>
            <th colspan="3">HASIL PENGAMATAN</th>
        </tr>
        <tr>
            <th width="10%">BM</th>
            <th width="10%">MM</th>
            <th width="10%">SM</th>
        </tr>
        <tr>
            <th><strong>I</strong></th>
            <td><strong>MORAL DAN NILAI-NILAI AGAMA</strong></td>
             <td></td>
            <td></td>
            <td></td>
        </tr>
         <tr>
            <th>1</th>
            <td>Dapat membedakan baik dan buruk</td>
            <td align="center"><?php echo $r->n1==1?'&#x2713;':'' ?></td>
            <td align="center"><?php echo $r->n1==2?'&#x2713;':'' ?></td>
            <td align="center"><?php echo $r->n1==3?'&#x2713;':'' ?></td>
        </tr>
        <tr>
            <th>2</th>
            <td>Menyayangi ciptaan Allah</td>
           <td align="center"><?php echo $r->n2==1?'&#x2713;':'' ?></td>
            <td align="center"><?php echo $r->n2==2?'&#x2713;':'' ?></td>
            <td align="center"><?php echo $r->n2==3?'&#x2713;':'' ?></td>
        </tr>
        <tr>
            <th><strong>II</strong></th>
            <td><strong>MOTORIK</strong></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <th></th>
            <td><strong>A. Motorik Kasar</strong></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
         <tr>
            <th>1</th>
            <td>Berlari sambil membawa benda ringan</td>
            <td align="center"><?php echo $r->n3==1?'&#x2713;':'' ?></td>
            <td align="center"><?php echo $r->n3==2?'&#x2713;':'' ?></td>
            <td align="center"><?php echo $r->n3==3?'&#x2713;':'' ?></td>
        </tr>
        <tr>
            <th>2</th>
            <td>Naik turun tangga dengan kaki bergantian</td>
            <td align="center"><?php echo $r->n4==1?'&#x2713;':'' ?></td>
            <td align="center"><?php echo $r->n4==2?'&#x2713;':'' ?></td>
            <td align="center"><?php echo $r->n4==3?'&#x2713;':'' ?></td>
        </tr>
         <tr>
            <th>3</th>
            <td>Meniti di atas papan titian yang cukup lebar</td>
            <td align="center"><?php echo $r->n5==1?'&#x2713;':'' ?></td>
            <td align="center"><?php echo $r->n5==2?'&#x2713;':'' ?></td>
            <td align="center"><?php echo $r->n5==3?'&#x2713;':'' ?></td>
        </tr>
         <tr>
            <th>4</th>
            <td>Melompat turun dari ketingian kurang lebih 20 cm</td>
            <td align="center"><?php echo $r->n6==1?'&#x2713;':'' ?></td>
            <td align="center"><?php echo $r->n6==2?'&#x2713;':'' ?></td>
            <td align="center"><?php echo $r->n6==3?'&#x2713;':'' ?></td>
        </tr>
         <tr>
            <th>5</th>
            <td>Meniru gerakan senam sederhana</td>
            <td align="center"><?php echo $r->n7==1?'&#x2713;':'' ?></td>
            <td align="center"><?php echo $r->n7==2?'&#x2713;':'' ?></td>
            <td align="center"><?php echo $r->n7==3?'&#x2713;':'' ?></td>
        </tr>
         <tr>
            <th></th>
            <td><strong>B. Motorik Halus</strong></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
         <tr>
            <th>6</th>
            <td>Menuang air, pasir atau biji-bijian ke tempat penampung (mangkuk, ember, dll)</td>
            <td align="center"><?php echo $r->n8==1?'&#x2713;':'' ?></td>
            <td align="center"><?php echo $r->n8==2?'&#x2713;':'' ?></td>
            <td align="center"><?php echo $r->n8==3?'&#x2713;':'' ?></td>
        </tr>
         <tr>
            <th>7</th>
            <td>Memasukkan benda kecil ke dalam botol (potongan lidi, kerikil, biji-bijian)</td>
            <td align="center"><?php echo $r->n9==1?'&#x2713;':'' ?></td>
            <td align="center"><?php echo $r->n9==2?'&#x2713;':'' ?></td>
            <td align="center"><?php echo $r->n9==3?'&#x2713;':'' ?></td>
        </tr>
         <tr>
            <th>8</th>
            <td>Meronce manik-manik yang tidak terlalu kecil dengan benang yang agak kaku</td>
            <td align="center"><?php echo $r->n10==1?'&#x2713;':'' ?></td>
            <td align="center"><?php echo $r->n10==2?'&#x2713;':'' ?></td>
            <td align="center"><?php echo $r->n10==3?'&#x2713;':'' ?></td>
        </tr>
         <tr>
            <th>9</th>
            <td>Menggunting kertas mengikuti pola garis lurus</td>
            <td align="center"><?php echo $r->n11==1?'&#x2713;':'' ?></td>
            <td align="center"><?php echo $r->n11==2?'&#x2713;':'' ?></td>
            <td align="center"><?php echo $r->n11==3?'&#x2713;':'' ?></td>
        </tr>
        <tr>
            <th><strong>III</strong></th>
            <td><strong>KOGNITIF</strong></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <th></th>
            <td><strong>A. Pengetahuan Umum</strong></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
         <tr>
            <th>1</th>
            <td>Menemukan bagian yang hilang dari gambar</td>
            <td align="center"><?php echo $r->n12==1?'&#x2713;':'' ?></td>
            <td align="center"><?php echo $r->n12==2?'&#x2713;':'' ?></td>
            <td align="center"><?php echo $r->n12==3?'&#x2713;':'' ?></td>
        </tr>
            <tr>
            <th>2</th>
            <td>Menyebutkan berbagai makanan dan rasanya</td>
            <td align="center"><?php echo $r->n13==1?'&#x2713;':'' ?></td>
            <td align="center"><?php echo $r->n13==2?'&#x2713;':'' ?></td>
            <td align="center"><?php echo $r->n13==3?'&#x2713;':'' ?></td>
        </tr>
            <tr>
            <th>3</th>
            <td>Dapat membedakan dua hal dari jenis yang sama (misalnya perbedaan antara ayam dan kucing, antara rambutan dan pisang)</td>
            <td align="center"><?php echo $r->n14==1?'&#x2713;':'' ?></td>
            <td align="center"><?php echo $r->n14==2?'&#x2713;':'' ?></td>
            <td align="center"><?php echo $r->n14==3?'&#x2713;':'' ?></td>
        </tr>
         <tr>
            <th></th>
            <td><strong>B. Konsep ukuran, bentuk dan pola</strong></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
         <tr>
            <th>4</th>
            <td>Dapat mengurutkan benda dari benda yang paling kecil hingga benda yang paling besar atau sebaliknya</td>
            <td align="center"><?php echo $r->n15==1?'&#x2713;':'' ?></td>
            <td align="center"><?php echo $r->n15==2?'&#x2713;':'' ?></td>
            <td align="center"><?php echo $r->n15==3?'&#x2713;':'' ?></td>
        </tr>
            <tr>
            <th>5</th>
                 <td>Dapat mengikuti pola tepuk tangan</td>
            <td align="center"><?php echo $r->n16==1?'&#x2713;':'' ?></td>
            <td align="center"><?php echo $r->n16==2?'&#x2713;':'' ?></td>
            <td align="center"><?php echo $r->n16==3?'&#x2713;':'' ?></td>
        </tr>
            <tr>
            <th>6</th>
            <td>Dapat membedakan konsep banyak dan sedikit</td>
            <td align="center"><?php echo $r->n17==1?'&#x2713;':'' ?></td>
            <td align="center"><?php echo $r->n17==2?'&#x2713;':'' ?></td>
            <td align="center"><?php echo $r->n17==3?'&#x2713;':'' ?></td>
        </tr>
    </table>
    </div>
    
    <div class="page">
    <table border="1" width="100%" style="border-collapse:collapse;font-size:large" cellpadding="10" cellspacing="5">
         <tr>
            <th rowspan="2" width="5%" >No. </th>
            <th rowspan="2">ASPEK PERKEMBANGAN INDIKATOR</th>
            <th colspan="3">HASIL PENGAMATAN</th>
        </tr>
        <tr>
            <th width="10%">BM</th>
            <th width="10%">MM</th>
            <th width="10%">SM</th>
        </tr>
        <tr>
            <th><strong>IV</strong></th>
            <td><strong>BAHASA</strong></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
         <tr>
            <th></th>
            <td><strong>A. Menerima Bahasa</strong></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
         <tr>
            <th>1</th>
            <td>Pura-pura membaca cerita bergambar dalam buku dengan kata-kata sendiri</td>
            <td align="center"><?php echo $r->n18==1?'&#x2713;':'' ?></td>
            <td align="center"><?php echo $r->n18==2?'&#x2713;':'' ?></td>
            <td align="center"><?php echo $r->n18==3?'&#x2713;':'' ?></td>
        </tr>
            <tr>
            <th>2</th>
            <td>Memahami 2 perintah yang diberikan</td>
            <td align="center"><?php echo $r->n19==1?'&#x2713;':'' ?></td>
            <td align="center"><?php echo $r->n19==2?'&#x2713;':'' ?></td>
            <td align="center"><?php echo $r->n19==3?'&#x2713;':'' ?></td>
        </tr>
        <tr>
            <th></th>
            <td><strong>B. Mengungkapkan Bahasa</strong></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
         <tr>
            <th>2</th>
            <td>Manyatakan keinginan dengan kalimat sederhana</td>
            <td align="center"><?php echo $r->n20==1?'&#x2713;':'' ?></td>
            <td align="center"><?php echo $r->n20==2?'&#x2713;':'' ?></td>
            <td align="center"><?php echo $r->n20==3?'&#x2713;':'' ?></td>
        </tr>
            <tr>
            <th>4</th>
            <td>Menceritakan pengalaman yang dialami dengan cerita sederhana </td>
            <td align="center"><?php echo $r->n21==1?'&#x2713;':'' ?></td>
            <td align="center"><?php echo $r->n21==2?'&#x2713;':'' ?></td>
            <td align="center"><?php echo $r->n21==3?'&#x2713;':'' ?></td>
        </tr>
        <tr>
            <th><strong>V</strong></th>
            <td><strong>SOSIAL EMOSIONAL</strong></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
       
        <tr>
            <th>1</th>
            <td>Baung air kecil tanpa bantuan</td>
            <td align="center"><?php echo $r->n22==1?'&#x2713;':'' ?></td>
            <td align="center"><?php echo $r->n22==2?'&#x2713;':'' ?></td>
            <td align="center"><?php echo $r->n22==3?'&#x2713;':'' ?></td>
        </tr>
        <tr>
            <th>2</th>
            <td>Sabar Menunggu giliran</td>
            <td align="center"><?php echo $r->n23==1?'&#x2713;':'' ?></td>
            <td align="center"><?php echo $r->n23==2?'&#x2713;':'' ?></td>
            <td align="center"><?php echo $r->n23==3?'&#x2713;':'' ?></td>
        </tr>
        <tr>
            <th>3</th>
            <td>Menunjukkan sikap toleran sehingga dapat bekerja dalam kelompok </td>
            <td align="center"><?php echo $r->n24==1?'&#x2713;':'' ?></td>
            <td align="center"><?php echo $r->n24==2?'&#x2713;':'' ?></td>
            <td align="center"><?php echo $r->n24==3?'&#x2713;':'' ?></td>
        </tr>
        <tr>
            <th>4</th>
            <td>Menghargai orang lain</td>
            <td align="center"><?php echo $r->n25==1?'&#x2713;':'' ?></td>
            <td align="center"><?php echo $r->n25==2?'&#x2713;':'' ?></td>
            <td align="center"><?php echo $r->n25==3?'&#x2713;':'' ?></td>
        </tr>
        <tr>
            <th>5</th>
            <td>Bereaksi terhadap hal yang dianggap tidak benar (marah bila diganggu atau diperlakukan berbeda)</td>
            <td align="center"><?php echo $r->n26==1?'&#x2713;':'' ?></td>
            <td align="center"><?php echo $r->n26==2?'&#x2713;':'' ?></td>
            <td align="center"><?php echo $r->n26==3?'&#x2713;':'' ?></td>
        </tr>
        <tr>
            <th>6</th>
            <td>Menunjukkan ekspresi menyesal ketika melakukan kesalahan</td>
            <td align="center"><?php echo $r->n27==1?'&#x2713;':'' ?></td>
            <td align="center"><?php echo $r->n27==2?'&#x2713;':'' ?></td>
            <td align="center"><?php echo $r->n27==3?'&#x2713;':'' ?></td>
        </tr>
         <tr>
            <th><strong>VI</strong></th>
            <td><strong>REKOMENDASI PENDIDIK</strong></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <th></th>
            <td colspan="4" style="height:100px">
                <?php echo $r->rekomendasi ?>
            </td>
        </tr>
        <tr>
      
            <td colspan="5">
                Tinggi badan dan berat badan : <?php echo $r->tinggi_badan ?> cm / <?php echo $r->berat_badan ?> kg
            </td>
        </tr>
        <tr>
            <td colspan="2" rowspan="3"><strong>KEHADIRAN</strong></td>
            <td>Sakit</td>
            <td colspan="2" align="right"><?php echo $r->sakit ?> hari</td>
    

        </tr>
        <tr>
          
            <td>Izin</td>
            <td colspan="2" align="right"><?php echo $r->izin ?> hari</td>
    

        </tr><tr>
           
            <td>Alfa</td>
            <td colspan="2" align="right"><?php echo $r->alfa ?> hari</td>
    

        </tr>

</div>

<script>
    window.print();
</script>