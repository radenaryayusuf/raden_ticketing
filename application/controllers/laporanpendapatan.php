<?php 
/**
*  
*/
class laporanpendapatan extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_laporanpendapatan');
		if($this->session->userdata('logged_in') != TRUE){
		$url=$this->load->view('authentication/login');
		redirect($url);
	}
	}

	function index(){
		
		$this->load->view('pendapatan_page');
	}
	function getpendapatan(){
		$tglawal = $this->input->post('tgl_awal');
        $tglakhir = $this->input->post('tgl_akhir');
        $data = $this->m_laporanpendapatan->getPendapatan($tglawal, $tglakhir);
        echo json_encode($data);
	}
	
}
 ?>