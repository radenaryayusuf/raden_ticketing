<?php 
class Databandara extends CI_Controller{
	function __construct(){
		parent:: __construct();
		$this->load->model('m_bandara');
        if($this->session->userdata('logged_in') != TRUE){
        $url=$this->load->view('authentication/login');
        redirect($url);
    }
        
	}
	function index(){
    	// $data['kode_stasiun'] = $this->m_bandara->getkoderute();
        // $data['data_transportasi'] = $this->m_bandara->getDataTransportasi();
        $this->load->view('bandara_page');
	}
    function data_bandara(){
        $data = $this->m_bandara->bandara_list();
        echo json_encode($data);
    }
    function get_bandara(){
        $Id = $this->input->get('id');
        $data = $this->m_bandara->get_bandara_by_id($Id);
        echo json_encode($data);
    }
	    function simpan_bandara(){
            $id = $this->input->post('id');
            $name =$this->input->post('name');
            $city = $this->input->post('city');
            $abbr = $this->input->post('abbr');
            
            $data = $this->m_bandara->simpan_bandara($id, $name, $city, $abbr);
            echo json_encode($data);
}
function kodeBandara($abbr){
        $abbr = strtoupper(substr($abbr,0,3));
       $kode = $this->m_bandara->createKodeBandara($abbr);
       echo $kode;
    }


 function update_bandara(){
            $id = $this->input->post('id_edit');
            $name = $this->input->post('name_edit');
            $city =$this->input->post('city_edit');
            $abbr = $this->input->post('abbr_edit');
            
            $data = $this->m_bandara->update_bandara($id, $name, $city, $abbr);
            echo json_encode($data);
}
            function hapus_bandara(){
            $id = $this->input->post('kode');
            $data = $this->m_bandara->hapus_bandara($id);
            echo json_encode($id);


}
}
?>