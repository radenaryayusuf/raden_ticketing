<?php 
class fakturbeta extends CI_Controller{
	function __construct(){
		parent:: __construct();
		$this->cekLogin();

		
	}
	function index(){
		$this->load->view('faktur');
	}
	public function cekLogin()
  {
    //Jika tidak ada session (username) maka alihkan ke controller login
    if (!$this->session->userdata('username')) {
      redirect('auth/login');
    }
  }
 
}
?>