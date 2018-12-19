<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Dashboard1 extends CI_Controller {
     function __construct(){
         parent::__construct();
         $this->simple_login1->cek_login1();
     }
 
     //Load Halaman dashboard
     public function index() {
         $this->load->view('account/v_users');
     }
 }

 