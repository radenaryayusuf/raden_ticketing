<?php 
class Datatransportasitipe extends CI_Controller{
	function __construct(){
		parent:: __construct();
		$this->load->model('m_tipe');
        if($this->session->userdata('logged_in') != TRUE){
        $url=$this->load->view('authentication/login');
        redirect($url);
    }
        
	}
	function index(){
        $data['kode_tipe'] = $this->m_tipe->getkodetipe();
        
		$this->load->view('tipe_page',$data);
	}
    function data_tipe(){
        $data = $this->m_tipe->tipe_list();
        echo json_encode($data);
    }
    function get_tipe(){
        $Transportation_type_id = $this->input->get('transportation_type_id');
        $data = $this->m_tipe->get_tipe_by_transportationtypeid($Transportation_type_id);
        echo json_encode($data);
    }
	    function simpan_tipe(){
            $description =$this->input->post('description');
           

            $data = $this->m_tipe->simpan_tipe($description);
            echo json_encode($data);
}

 function update_tipe(){
            $transportation_type_id = $this->input->post('transportation_type_id_edit');
            $description =$this->input->post('description_edit');
            

            $data = $this->m_tipe->update_tipe($transportation_type_id, $description);
            echo json_encode($data);
}
            function hapus_tipe(){
            $transportation_type_id = $this->input->post('kode');
            $data = $this->m_tipe->hapus_tipe($transportation_type_id);
            echo json_encode($transportation_type_id);


}
}
?>