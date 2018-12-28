<?php 
class Reservation_train extends CI_Controller{
	function __construct(){
		parent:: __construct();
		$this->load->model('m_pemesanan_kereta');
		if($this->session->userdata('logged_in') != TRUE){
		$url= $this->load->view('authentication/login');
		redirect($url);
	}
        
	}
	function index(){
		$data['qrutefrom'] = $this->m_pemesanan_kereta->get_rutefrom()->result();
		$data['qruteto'] = $this->m_pemesanan_kereta->get_ruteto()->result();
		// $data['id_rute'] =$this->m_pemesanan_kereta->get_koderute();
		// $dt['no_urut'] =$this->m_pemesanan_kereta->get_nourut();
		// $dt['nama_pegawai'] =$this->m_pemesanan_kereta->get_pegawai();
		// $dt['data_belum_periksa'] = $this->m_pemesanan_kereta->getDataBelumPeriksa();
		// $data['data_rute'] = $this->m_pemesanan_kereta->kereta_list();    
		// $dt['data_jadwal_dokter'] = $this->m_pemesanan_kereta->getJadwalDokter();    
		// $dt['tglsekarang'] = date("Y-m-d");
		$this->load->view('kereta_page', $data);
	}
	function get_confirmation(){
        $Rute_id = $this->input->get('rute_id');
        $data = $this->m_pemesanan_kereta->get_rute_by_ruteid($Rute_id);
        echo json_encode($data);
    }
function data_kereta(){
        $rute_from = $this->input->post('rute_from');
        $rute_to = $this->input->post('rute_to');
        $data = $this->m_pemesanan_kereta->kereta_list($rute_from, $rute_to);
        echo json_encode($data);
    }

    function get_namestasiun1($rute_from){
    	$data = $this->m_pemesanan_kereta->get_name1($rute_from);	
    	echo $data;
    }
        function get_namestasiun2($rute_to){
    	$data = $this->m_pemesanan_kereta->get_name2($rute_to);
    	echo $data;
    }
    // function get_kursi($rute_id){
    // 	$data = $this->m_pemesanan_kereta->korsi_bereum($rute_id);
    // 	echo $data;
    // }
function get_ruteto(){
 
            $rute_from = $this->input->post('rute_from');  //mengambil post data yang dijabarkan pada javascript yaitu type: "POST"
            $arrStates = $this->m_pemesanan_kereta->get_rute_byrutefrom($rute_from);  //mengambil data dari database melalui model scombobox
            foreach ($arrStates as $state) {
                $arrstates[$state->city] = $state->city;

            } //array dibuat untuk ditampilkan pada combox box
            print form_dropdown('city',$arrstates); //setelah berhasil diambil lalu ditampilkan
      }
      function get_rutefrom(){
 
            $rute_to = $this->input->post('rute_to');  //mengambil post data yang dijabarkan pada javascript yaitu type: "POST"
            $arrStates = $this->m_pemesanan_kereta->get_rute_byruteto($rute_to);  //mengambil data dari database melalui model scombobox
            foreach ($arrStates as $state) {
                $arrstates[$state->city] = $state->city;
            } //array dibuat untuk ditampilkan pada combox box
            print form_dropdown('city',$arrstates); //setelah berhasil diambil lalu ditampilkan
      }
 //      function faktur_train($kode){
	// 	$data['faktur'] = $this->m_pemesanan_kereta->data_faktur($kode);
	// 	$this->load->view('cetak/faktur',$data);
	// }
      function proses(){
  // $this->m_pemesanan_kereta->prosesbooking($amount_of_adult, $amount_of_infant, $rute_id);
      	$data['amount_of_adult'] = $this->input->post('jumlahadult');
		$data['amount_of_infant'] = $this->input->post('jumlahinfant');
		$data['amount_of_seat'] = $this->input->post('seat_qty');
		$data['kode_rute'] = $this->input->post('rute_id_bawa');
		$data['price_sum'] = $this->input->post('sum_of_price2');
		$data['tanggal_pesan'] = $this->input->post('tanggal_pesan');
		$data['harga_perorang'] = $this->input->post('price_person');
		$data['deskripsi_booking'] = $this->input->post('deskripsi_bawa');
		$data['random_code'] = $this->m_pemesanan_kereta->generateRandomString();
		$data['idreservation'] = $this->m_pemesanan_kereta->get_idreservation();
		$data['bereum_korsi'] = $this->m_pemesanan_kereta->korsi_bereum($this->input->post('rute_id_bawa'));
		$data['sisa_korsi'] = $this->m_pemesanan_kereta->korsi_sisa($this->input->post('rute_id_bawa'));
		$data['stasiun_nama'] = $this->input->post('nama_stasiuna');
		$data['stasiun_nama1'] = $this->input->post('nama_stasiunaa');
		
  		$this->load->view('booking_page',$data);

      }
        function proses_faktur(){
  // $this->m_pemesanan_kereta->prosesbooking($amount_of_adult, $amount_of_infant, $rute_id);
      	$data['amount_of_adult_faktur'] = $this->input->post('amount_adult2');
		$data['amount_of_infant_faktur'] = $this->input->post('amount_infant2');
		$data['price_sum_faktur'] = $this->input->post('price_sum2');
		$data['tanggal_pesan_faktur'] = $this->input->post('reservation_date2');
		$data['harga_perorang_faktur'] = $this->input->post('harga_per_orang2');
		$data['deskripsi_booking_faktur'] = $this->input->post('deskripsi_booking2');
		$data['random_code_faktur'] = $this->input->post('reservation_code2');
		$data['nama_wakil'] = $this->input->post('nama_faktur2');
		$data['nama_stasiun2'] = $this->input->post('nama_stasiun');
		$data['nama_stasiun3'] = $this->input->post('nama_stasiun1');
		
		// $data['seat_block'] = $this->m_pemesanan_kereta->korsi_bereum(strtoupper("TIK".substr($this->input->post('nama'),0,3).date('Ymd')))->result();

  		$this->load->view('faktur',$data);

      }
      function simpan(){
      if($this->input->post()){
  $this->m_pemesanan_kereta->prosesorder();
  echo "Input Berhasil";
}else{
echo "denied";
}
}
	// public function munculdata_pasien()
	// {
	// 	if($this->input->is_ajax_request())
	// 	{
	// 		$NoPasien = $this->input->post('NoPasien');
	// 		$this->load->model('m_pemesanan_kereta');
	// 		$data = $this->m_pemesanan_kereta->get_baris($NoPasien)->row();
	// 		$json['AlmtPas']			= ( ! empty($data->AlmtPas)) ? preg_replace("/\r\n|\r|\n/",'<br />', $data->AlmtPas) : "<small><i>Tidak ada</i></small>";
	// 		$json['TlpnPas']			= ( ! empty($data->TlpnPas)) ? $data->TlpnPas : "<small><i>Tidak ada</i></small>";
			
	// 		$json['JKPas']	= ( ! empty($data->JKPas)) ? preg_replace("/\r\n|\r|\n/",'<br />', $data->JKPas) : "<small><i>Tidak ada</i></small>";
	// 		echo json_encode($json);
	// 	}
	// }
	
    
}
?>