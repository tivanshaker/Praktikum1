 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?><!DOCTYPE html>  
 <head>
   <meta charset="UTF-8">
   <title>
     Account Registration | Nacos
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

.kotak_signup{
  width: 350px;
  background: white;
  /*meletakkan form ke tengah*/
  margin: 80px auto;
  padding: 30px 20px;
}

label{
  font-size: 11pt;
}

.form_signup{
  /*membuat lebar form penuh*/
  box-sizing : border-box;
  width: 100%;
  padding: 10px;
  font-size: 11pt;
  margin-bottom: 20px;
}

.tombol_signup{
  background: #009999;
  color: white;
  font-size: 11pt;
  width: 100%;
  border: none;
  border-radius: 3px;
  padding: 10px 20px;
}
</style>
 </head>
 <body>
     <h2>Sign Up</h2>
 
     <?php echo form_open('register');?>
     <div class="kotak_signup">
     <p>Nama:</p>
     <p>
     <input type="text" name="nama" class="form_signup" value="<?php echo set_value('nama'); ?>"/>
     </p>
     <p> <?php echo form_error('name'); ?> </p>
 
     <p>Username:</p>
     <p>
     <input type="text" name="username" class="form_signup" value="<?php echo set_value('username'); ?>"/> 
     </p>
     <p> <?php echo form_error('username'); ?> </p>
 
     <p>Email:</p>
     <p>
     <input type="text" name="email" class="form_signup" value="<?php echo set_value('email'); ?>"/>
     </p>
     <p> <?php echo form_error('email'); ?> </p>
 
     <p>Password:</p>
     <p>
     <input type="password" name="password" class="form_signup" value="<?php echo set_value('password'); ?>"/>
     </p>
     <p> <?php echo form_error('password'); ?> </p>
 
     <p>Password Confirm:</p>
     <p>
     <input type="password" name="password_conf" class="form_signup" value="<?php echo set_value('password_conf'); ?>"/>
     </p>
     <p> <?php echo form_error('password_conf'); ?> </p>
 
     <p>
     <input type="submit" name="btnSubmit" class="tombol_signup" value="Daftar" />
     </p>
 
     <?php echo form_close();?>
 
     <p>
     Already have an account? click <?php echo anchor(site_url().'/login','here!'); ?>
     </p>
 </body>
 </html>