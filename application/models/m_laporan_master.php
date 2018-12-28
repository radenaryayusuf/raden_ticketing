<?php 
class m_laporan_master extends CI_Model{
		function __construct(){
			parent:: __construct();
		}
		function getDataCustomer1(){
		$query = $this->db->get('customer');

		return $query->result_array();
		}
		function getDataTransportation1(){
		$query = $this->db->get('transportation');

		return $query->result_array();
		}
		function getDataTransportationType1(){
		$query = $this->db->get('transportation_type');
		return $query->result_array();		
		}
		function getDataStasiun1(){
		$query = $this->db->get('stasiun');
		return $query->result_array();		
		}
		function getDataBandara1(){
		$query = $this->db->get('bandara');
		return $query->result_array();		
		}
		function getDataUser1(){
		$query = $this->db->get('user');

		return $query->result_array();
		}
		function getDataRute1(){
		$query = $this->db->get('rute');

		return $query->result_array();
		}
		function getDataCustomer(){
		$query = $this->db->query("SELECT * FROM customer"); 

			return $query->result_array();	
		}
		function getDataTransportation(){
    	$query = $this->db->query("SELECT * FROM transportation "); 

		return $query->result_array();
		}
		function getDataStasiun(){
    	$query = $this->db->query("SELECT * FROM stasiun "); 

		return $query->result_array();
		}
		function getDataBandara(){
    	$query = $this->db->query("SELECT * FROM bandara "); 

		return $query->result_array();
		}
}


 ?>