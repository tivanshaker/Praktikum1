<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?><!DOCTYPE html>  
 <head>
   <meta charset="UTF-8">
   <title>
    Login Page | Nacos
   </title>

  <style type="text/css" media="screen">

body{
  font-family: sans-serif;
  background: url("https://i.ibb.co/k3rHHYY/Nacos.png;");
}

h2{
  text-align: center;
  /*ketebalan font*/
  font-weight: 1000;
}

.tulisan_login{
  text-align: center;
  /*membuat semua huruf menjadi kapital*/
  text-transform: uppercase;
}

.kotak_login{
  width: 350px;
  background: white;
  /*meletakkan form ke tengah*/
  margin: 80px auto;
  padding: 30px 20px;
}

label{
  font-size: 11pt;
}

.form_login{
  /*membuat lebar form penuh*/
  box-sizing : border-box;
  width: 100%;
  padding: 10px;
  font-size: 11pt;
  margin-bottom: 20px;
}

.tombol_login{
  background: #009999;
  color: white;
  font-size: 11pt;
  width: 100%;
  border: none;
  border-radius: 3px;
  padding: 10px 20px;
}


.link{
  color: #009999;
  text-decoration: none;
  font-size: 10pt;
}
</style>
 </head>

 <body>

      <h2>Login</h2>
      <?php
   // Cetak jika ada notifikasi
      if($this->session->flashdata('sukses')) {
           echo '<p class="warning" style="margin: 10px 20px;">'.$this->session->flashdata('sukses').'</p>';
      }
      ?>
 
      <?php echo form_open('login');?>
      <div class="kotak_login">
      <p>Username:</p>
      <p>
           <input type="text" name="username" class="form_login" value="<?php echo set_value('username'); ?>"/>
      </p>
      <p> <?php echo form_error('username'); ?> </p>
 
      <p>Password:</p>
      <p>
           <input type="password" name="password" class="form_login" value="<?php echo set_value('password'); ?>"/>
      </p>
      <p> <?php echo form_error('password'); ?> </p>
 
      <p>
           <input type="submit" name="btnSubmit" class="tombol_login" value="Login" />
      </p>
 
      <?php echo form_close();?>
 
      <p>
           Don't have an account? <?php echo anchor(site_url().'/register','Sign Up!'); ?>
      </p>
 </body>
 </html>