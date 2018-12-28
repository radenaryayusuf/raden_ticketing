<?php 
class laporanmaster extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_laporan_master','l');
if($this->session->userdata('logged_in') != TRUE){
		$url=$this->load->view('authentication/login');
		redirect($url);
	}
	}
	function index(){

		$data['data_customer'] = $this->l->getDataCustomer1();
		$data['data_transportation'] = $this->l->getDataTransportation1();
		$data['data_transportationtype'] = $this->l->getDataTransportationType1();
		$data['data_rute'] = $this->l->getDataRute1();
		$data['data_user'] = $this->l->getDataUser1();
		$data['data_stasiun'] = $this->l->getDataStasiun1();
		$data['data_bandara'] = $this->l->getDataBandara1();
		$this->load->view('v_laporan_data_master',$data);
	}
	function daftarbarang(){
		$data['tampil'] = 'data';
		$data['data_barang'] = $this->l->getData();
		$this->load->view('v_laporan',$data);
	}
	function cetakBarang(){
		$data['data_barang_tersedia'] = $this->l->getDataBarang();
		$this->load->view('cetak/cetakbarang',$data);
	}
	
	function cetakrute(){
		$data['data_rute'] = $this->l->getDataRute1();
		$this->load->view('cetak/cetakpengembalian',$data);
	}
	function cetakuser(){
		$data['data_user'] = $this->l->getDataUser1();
		$this->load->view('cetak/cetakuser',$data);
	}
	function cetakstasiun(){
		$data['data_stasiun'] = $this->l->getDataStasiun1();
		$this->load->view('cetak/cetakstasiun',$data);
	}
	function cetakbandara(){
		$data['data_bandara'] = $this->l->getDataBandara1();
		$this->load->view('cetak/cetakbandara',$data);
	}
	function cetakcustomer(){
		$data['data_customer'] = $this->l->getDataCustomer1();
		$this->load->view('cetak/cetakcustomer',$data);
	}

	function cetaktransportation(){
		$data['data_transportation'] = $this->l->getDataTransportation1();
		$this->load->view('cetak/cetaktransportation',$data);
	}
	function cetaktransportationtype(){
		$data['data_transportationtype'] = $this->l->getDataTransportationType1();
		$this->load->view('cetak/cetaktransportationtype',$data);
	}
}



 ?>