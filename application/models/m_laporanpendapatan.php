<?php
/**
* 
*/
class m_laporanpendapatan extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function getPendapatan($tglawal, $tglakhir){
		$query = $this->db->query("SELECT reservation_date , COUNT(reservation_id) AS JMLTRANSAKSI,  SUM(price) AS TOTALOMSET From reservation WHERE reservation_date BETWEEN '$tglawal' AND '$tglakhir' GROUP BY reservation_date ");
		return $query->result_array();
	}


	 
}

?>