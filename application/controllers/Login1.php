<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Login1 extends CI_Controller {
 
     public function index() {
 
         // Fungsi Login
         $valid = $this->form_validation;
         $username = $this->input->post('username');
         $password = $this->input->post('password');
         $valid->set_rules('username','Username','required');
         $valid->set_rules('password','Password','required');
 
         if($valid->run()) {
             $this->simple_login1->login1($username,$password, base_url('dashboard1'), base_url('login1'));
         }
         // End fungsi login
         $this->load->view('account/v_login1');
     }
 
     public function logout1(){
         $this->simple_login1->logout1();
     }        
 }