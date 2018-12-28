<?php
/**
* 
*/
class m_laporanuser extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function getData(){
		$query = $this->db->query("SELECT * FROM user");
		return $query->result_array();
	}

	 
}

?>