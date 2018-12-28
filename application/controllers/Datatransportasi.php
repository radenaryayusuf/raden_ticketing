<?php 
class Datatransportasi extends CI_Controller{
	function __construct(){
		parent:: __construct();
		$this->load->model('m_transportasi');
        if($this->session->userdata('logged_in') != TRUE){
        $url=$this->load->view('authentication/login');
        redirect($url);
    }
        
	}
	function index(){
        $data['kode_transportasi'] = $this->m_transportasi->getkodetransportasi();
        $data['data_tipe'] = $this->m_transportasi->getDataTipe();
		$this->load->view('transportasi_page',$data);
	}
    function data_transportasi(){
        $data = $this->m_transportasi->transportasi_list();
        echo json_encode($data);
    }


    function get_transportasi(){
        $Transportation_id = $this->input->get('transportation_id');
        $data = $this->m_transportasi->get_transportasi_by_id($Transportation_id);
        echo json_encode($data);
    }
	    function simpan_transportasi(){
            $code = $this->input->post('code');
            $deskripsi =$this->input->post('deskripsi');
            $seat_qty = $this->input->post('seat_qty');
            $transportation_type_id = $this->input->post('transportation_type_id');

            $data = $this->m_transportasi->simpan_transportasi($code, $deskripsi, $seat_qty, $transportation_type_id);
            echo json_encode($data);
}

 function update_transportasi(){
            $transportation_id = $this->input->post('transportation_id_edit');
            $code = $this->input->post('code_edit');
            $deskripsi =$this->input->post('deskripsi_edit');
            $seat_qty = $this->input->post('seat_qty_edit');
            $transportation_type_id = $this->input->post('transportation_type_id_edit');

            $data = $this->m_transportasi->update_transportasi($transportation_id ,$code, $deskripsi, $seat_qty, $transportation_type_id);
            echo json_encode($data);
}
            function hapus_transportasi(){
            $transportation_type_id = $this->input->post('kode');
            $data = $this->m_transportasi->hapus_transportasi($transportation_type_id);
            echo json_encode($transportation_type_id);


}
}
?>