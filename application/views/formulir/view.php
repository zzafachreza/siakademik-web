<?php

$id_formulir = $this->uri->segment(3);

$r = $this->db->query("SELECT * FROM data_formulir WHERE id_formulir='$id_formulir'")->row_object();

?>

 <table width="30%" border="1" cellpadding="4" style="border-collapse: collapse;margin-top:1%;margin-bottom:3%">
     
  <tr>
         <td><strong>STATUS</strong></td>
         <td><?php echo $r->status_formulir ?></td>
     </tr>
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
            <img src="<?php echo site_url().$r->file_formulir ?>" width="100%" />
        <br/>
       <?php echo $r->keterangan ?>
        </td>
        
     </tr>

</table>

<script>
    window.print();
    window.onafterprint = function(){
       history.back()
   console.log("Printing completed...");
}
</script>