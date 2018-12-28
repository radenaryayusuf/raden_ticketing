<?php 
class Datastasiun extends CI_Controller{
	function __construct(){
		parent:: __construct();
		$this->load->model('m_stasiun');
        if($this->session->userdata('logged_in') != TRUE){
        $url=$this->load->view('authentication/login');
        redirect($url);
    }
        
	}
	function index(){
    	// $data['kode_stasiun'] = $this->m_stasiun->getkoderute();
        // $data['data_transportasi'] = $this->m_stasiun->getDataTransportasi();
        $this->load->view('station_page');
	}
    function data_stasiun(){
        $data = $this->m_stasiun->stasiun_list();
        echo json_encode($data);
    }
    function get_stasiun(){
        $Id = $this->input->get('id');
        $data = $this->m_stasiun->get_stasiun_by_id($Id);
        echo json_encode($data);
    }
	    function simpan_stasiun(){
            $id = $this->input->post('id');
            $name =$this->input->post('name');
            $city = $this->input->post('city');
            $abbr = $this->input->post('abbr');
            
            $data = $this->m_stasiun->simpan_stasiun($id, $name, $city, $abbr);
            echo json_encode($data);
}
function kodeStasiun($abbr){
        $abbr = strtoupper(substr($abbr,0,3));
       $kode = $this->m_stasiun->createKodeStasiun($abbr);
       echo $kode;
    }


 function update_stasiun(){
            $id = $this->input->post('id_edit');
            $name = $this->input->post('name_edit');
            $city =$this->input->post('city_edit');
            $abbr = $this->input->post('abbr_edit');
            
            $data = $this->m_stasiun->update_stasiun($id, $name, $city, $abbr);
            echo json_encode($data);
}
            function hapus_stasiun(){
            $id = $this->input->post('kode');
            $data = $this->m_stasiun->hapus_stasiun($id);
            echo json_encode($id);


}
}
?>