<?php 
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Register1 extends CI_Controller {
     
     function __construct(){
         parent::__construct();
         $this->load->library(array('form_validation'));
         $this->load->helper(array('url','form'));
         $this->load->model('m_account1'); //call model
     }
 
     public function index() {
 
         $this->form_validation->set_rules('nama', 'NAMA','required');
         $this->form_validation->set_rules('username', 'USERNAME','required');
         $this->form_validation->set_rules('email','EMAIL','required|valid_email');
         $this->form_validation->set_rules('password','PASSWORD','required');
         $this->form_validation->set_rules('password_conf','PASSWORD','required|matches[password]');
         if($this->form_validation->run() == FALSE) {
             $this->load->view('account/v_register1');
         }else{
 
             $data1['nama']   =    $this->input->post('nama');
             $data1['username'] =    $this->input->post('username');
             $data1['email']  =    $this->input->post('email');
             $data1['password'] =    md5($this->input->post('password'));
 
             $this->m_account1->daftar1($data1);
             
             $pesan['message'] =    "Pendaftaran berhasil";
             
             $this->load->view('account/v_success1',$pesan);
         }
     }
 }