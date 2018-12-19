<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class users extends CI_Controller {
 
     public function index() {
     	$this->load->view('account/v_users');

     }
 }

