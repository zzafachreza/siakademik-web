<?php

$sqlCom = "SELECT * FROM data_company limit 1";
$hasilCom = $this->db->query($sqlCom);

$comp = $hasilCom->result();


?>
<style>
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
        padding-left:5%;
        /*border:1px solid black;*/
        margin-bottom:8%;
        border-radius:2px;
        font-size:small;
    }
    
</style> 

<div class="container" >
  
<div class="row" style="padding-top: 5%">


  <div class="col col-sm-12">
      <center>
             <img src="<?php echo base_url() ?><?php echo $company[0]['foto'] ?>" width="250">
      </center>
      <div>
              <blockquote class="blockquote" >
                <footer class="blockquote-footer" style="color:#000">
                   <?php echo $company[0]['deskripsi'] ?>
                </footer>
              </blockquote>
      </div>
    <form id="dataFormLogin"  >
      
      <div class="form-group">
        <label for="username" class="text-utama"><strong>Username</strong></label>
          <input required="required" type="text" name="username" autocomplete="off" autofocus="autofocus" class="form-control">
      </div>
       <div class="form-group">
        <label for="username" class="text-utama"><strong>Password</strong></label>
          <input required="required" type="password" name="password" autocomplete="off" class="form-control">
      </div>
    <div class="form-group">
        <button type="SUBMIT" class="btn bg-utama col-sm-12">Sign In</button>
    </div>
    </form> 


  </div>
  <div class="col-sm-12">
   <center>
        <blockquote class="blockquote text-center" style="margin-top: 5%">
        <p class="mb-0"></p>
        <footer class="blockquote-footer" style="color: #000">&copy <?php echo date('Y') ?> <?php echo $company[0]['nama'] ?></footer>
      </blockquote>
  </center>
  </div>
</div>