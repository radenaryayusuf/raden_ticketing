<?php 
class Datarute extends CI_Controller{
	function __construct(){
		parent:: __construct();
		$this->load->model('m_rute');
        if($this->session->userdata('logged_in') != TRUE){
        $url=$this->load->view('authentication/login');
        redirect($url);
    }
        
	}
	function index(){
    	$data['kode_rute'] = $this->m_rute->getkoderute();
        $data['data_transportasi'] = $this->m_rute->getDataTransportasi();
        // $data['data_stasiun'] = $this->m_rute->getDataStasiun();
        // $data['qrutefrom'] = $this->m_rute->get_rutefrom()->result();
        // $data['qruteto'] = $this->m_rute->get_ruteto()->result();
        $this->load->view('rute_page', $data);
	}
    function get_Rutestasiun(){
        $Id = $this->input->get('rute_from');
        $data = $this->m_rute->getDataRute($Id);
        echo json_encode($data);
    }
   
    // function get_ruteto(){
 
    //         $rute_from = $this->input->post('rute_from');  //mengambil post data yang dijabarkan pada javascript yaitu type: "POST"
    //         $arrStates = $this->m_rute->get_rute_byrutefrom($rute_from);  //mengambil data dari database melalui model scombobox
    //         foreach ($arrStates as $state) {
    //             $arrstates[$state->city] = $state->city;
    //         } //array dibuat untuk ditampilkan pada combox box
    //         print form_dropdown('city',$arrstates); //setelah berhasil diambil lalu ditampilkan
    //   }
    //   function get_rutefrom(){
 
    //         $rute_to = $this->input->post('rute_to');  //mengambil post data yang dijabarkan pada javascript yaitu type: "POST"
    //         $arrStates = $this->m_rute->get_rute_byruteto($rute_to);  //mengambil data dari database melalui model scombobox
    //         foreach ($arrStates as $state) {
    //             $arrstates[$state->city] = $state->city;
    //         } //array dibuat untuk ditampilkan pada combox box
    //         print form_dropdown('city',$arrstates); //setelah berhasil diambil lalu ditampilkan
    //   }
    function data_rute(){
        $data = $this->m_rute->rute_list();
        echo json_encode($data);
    }
    function data_stasiun_awal(){
        $data = $this->m_rute->stasiun_list();
        echo json_encode($data);
    }
      function data_pesawat_awal(){
        $data = $this->m_rute->pesawat_list();
        echo json_encode($data);
    }
    function get_rute(){
        $Rute_id = $this->input->get('rute_id');
        $data = $this->m_rute->get_rute_by_id($Rute_id);
        echo json_encode($data);
    }
	    function simpan_rute(){
            $depart_at = $this->input->post('depart_at');
            $depart_to = $this->input->post('depart_to');
            $rute_from =$this->input->post('rute_from');
            $rute_to = $this->input->post('rute_to');
            $price = $this->input->post('price');
            $transportation_id = $this->input->post('transportation_id');

            $data = $this->m_rute->simpan_rute($depart_at,$depart_to, $rute_from, $rute_to, $price, $transportation_id);
            echo json_encode($data);
}

 function update_rute(){
            $rute_id = $this->input->post('rute_id_edit');
            $depart_at = $this->input->post('depart_at_edit');
            $depart_to = $this->input->post('depart_to_edit');
            $rute_from =$this->input->post('rute_from_edit');
            $rute_to = $this->input->post('rute_to_edit');
            $price = $this->input->post('price_edit');
            $transportation_id = $this->input->post('transportation_id_edit');

            $data = $this->m_rute->update_rute($rute_id, $depart_at,$depart_to, $rute_from, $rute_to, $price, $transportation_id);
            echo json_encode($data);
}
            function hapus_rute(){
            $rute_id = $this->input->post('kode');
            $data = $this->m_rute->hapus_rute($rute_id);
            echo json_encode($rute_id);


}
}
?>