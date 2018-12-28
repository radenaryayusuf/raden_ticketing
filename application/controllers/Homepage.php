<?php 
class Homepage extends CI_Controller{
	function __construct(){
		// session_start();
		parent:: __construct();
		$this->load->model('mread');
		if($this->session->userdata('logged_in') != TRUE){
			// $url=base_url();
			redirect('auth/login');
		}
		
	}
	function index(){ 
		// $this->session->set_userdata('akses','2');
		// print_r($_SESSION);
		$data['report'] = $this->mread->omset_harian();
		$data['report1'] = $this->mread->omset_mingguan();
		$data['report2'] = $this->mread->omset_bulanan();
		$this->load->view('main_view',$data);
	}

 
}
?>