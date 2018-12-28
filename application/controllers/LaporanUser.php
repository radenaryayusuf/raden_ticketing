<?php 
/**
*  
*/
class LaporanUser extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_laporanuser');
		// if($this->session->userdata('masuk') != TRUE){
		// $url=site_url('login');
		// redirect($url);
	// }
	}

	function index(){
		$data['tampil'] = 'data';
		$data['user'] = $this->m_laporanuser->getData();
		 
		$this->load->view('v-laporanuser',$data);
	}
	
}
 ?>