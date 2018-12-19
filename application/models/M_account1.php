<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
 
  class M_account1 extends CI_Model{

       function daftar1($data1)
       {
            $this->db->insert('admin',$data1);
       }

  }