<?php 
class Datapelanggan extends CI_Controller{
	function __construct(){
		parent:: __construct();
		$this->load->model('m_pelanggan');
        if($this->session->userdata('logged_in') != TRUE){
        $url=$this->load->view('authentication/login');
        redirect($url);
    }
        
	}
	function index(){
        $data['kode_pelanggan'] = $this->m_pelanggan->getkodepelanggan();
        // $data['data_pelanggan'] = $this->m_pelanggan->getDataPelanggan();

		$this->load->view('pelanggan_page',$data);
	}
    function data_pelanggan(){
        $data = $this->m_pelanggan->pelanggan_list();
        echo json_encode($data);
    }
    function get_pelanggan(){
        $Customer_id = $this->input->get('customer_id');
        $data = $this->m_pelanggan->get_pelanggan_by_customerid($Customer_id);
        echo json_encode($data);
    }
	    function simpan_pelanggan(){
            $nama =$this->input->post('nama');
            $alamat = $this->input->post('alamat');
            $nohp = $this->input->post('nohp');
            $jeniskelamin = $this->input->post('jeniskelamin');


            $data = $this->m_pelanggan->simpan_pelanggan($nama, $alamat, $nohp, $jeniskelamin);
            echo json_encode($data);
}

 function update_pelanggan(){
            $customer_id = $this->input->post('customer_id_edit');
            $nama =$this->input->post('nama_edit');
            $alamat = $this->input->post('alamat_edit');
            $nohp = $this->input->post('nohp_edit');
            $jeniskelamin = $this->input->post('jeniskelamin_edit');

            $data = $this->m_pelanggan->update_pelanggan($customer_id, $nama, $alamat, $nohp, $jeniskelamin);
            echo json_encode($data);
}
            function hapus_pelanggan(){
            $customer_id = $this->input->post('kode');
            $data = $this->m_pelanggan->hapus_pelanggan($customer_id);
            echo json_encode($customer_id);


}
}
?>