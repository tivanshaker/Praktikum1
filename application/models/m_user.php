<?php
/**
 * 
 */
class m_user extends CI_model
{
	
	public function __construct()
	{
		$this->load->database();
	}
	public function get($id=null){
		if ($id != null) {
			$query = $this->db->get_where('users', ['id'=>$id]);
			return $query->result_array();
		}
		$query=$this->db->get('users');
		return $query->result_array();
	}
}