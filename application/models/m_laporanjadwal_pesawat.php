<?php
/**
* 
*/
class m_laporanjadwal_pesawat extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function getFrom(){
		$query = $this->db->query("SELECT s.*,t.*,r.*,rt.*  FROM bandara s INNER JOIN rute r ON s.bandara_id = r.rute_from INNER JOIN transportation t ON t.transportation_id = r.transportation_id INNER JOIN reservation rt ON rt.rute_id = r.rute_id GROUP BY s.bandara_id,r.rute_id");
		return $query->result_array();
	}

	function getTo($id){
		$query = $this->db->query("SELECT s.*,t.*,r.*,rt.* FROM bandara s INNER JOIN rute r ON s.bandara_id = r.rute_to INNER JOIN transportation t ON t.transportation_id = r.transportation_id INNER JOIN reservation rt ON rt.rute_id = r.rute_id WHERE s.bandara_id = '".$id."'");
		$data = $query->result_array();
		$return = '';

		foreach ($data as $key => $us) {
			$return = $us['name']."(".$us['abbr'].")" .$us['city'];
			
		}
		return $return;;
	}
	function getAR($id){
		 $date_now =  date("Ymd");
     $time_now =  date("H:i:s");
		$query = $this->db->query("SELECT COUNT('rt.reservation_id') as reserved FROM rute r INNER JOIN transportation t ON t.transportation_id = r.transportation_id INNER JOIN reservation rt ON rt.rute_id = r.rute_id  WHERE rt.rute_id = '".$id."'  AND SUBSTRING(rt.reservation_id, 1, 8) = '$date_now'  AND r.depart_to >= '$time_now' ");
		$data = $query->result_array();
		$return = '';

		foreach ($data as $key => $us) {
			$return = $us['reserved'];
			
		}
		return $return;;
	}

	 
}

?>