<?php 
/**
*  
*/
class laporanjadwalpesawat extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_laporanjadwal_pesawat','l');
		if($this->session->userdata('logged_in') != TRUE){
		$url=$this->load->view('authentication/login');
		redirect($url);
	}
	}

	function index(){
		$data['data_from'] = $this->l->getFrom();
		$this->load->view('v_jadwal_pesawat',$data);
	}
	
}
 ?>