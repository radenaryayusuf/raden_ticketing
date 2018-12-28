<?php 
class m_pemeriksaan extends CI_Model{
	function __construct(){
		parent:: __construct();
	}
	function getJadwalDokter(){
            $query = $this->db->get('v_jpraktek'); 

            return $query->result_array();
        }
function get_pasien(){
    $tgl = date('Y-m-d');
              $this->db->select("pdf.noPendaftaran, pas.NmPas, pas.AlmtPas, pas.TglLhrPas, pas.JKPas");
    $this->db->from("tb_pendaftaran as pdf");
    $this->db->join('tb_pasien as pas', 'pdf.NoPasien = pas.NoPasien');
    $this->db->where('pdf.TglPendaftaran', $tgl);
    $query = $this->db->get();
    $result = $query->result_array();
    return $result;
        }
        function get_nopemeriksaan(){
        	$tgl = date('Ymd');
        	$query = $this->db->query(
            "SELECT IFNULL(MAX(SUBSTRING(noPemeriksaan,9,3)),0) + 1 As no_urut FROM tb_pemeriksaan
            WHERE SUBSTRING(noPemeriksaan,1,8) = '".$tgl."'");

        $data = $query->row_array();
        $no_urut = $data['no_urut'];
        $no_pemeriksaan = $tgl.sprintf("%03d",$no_urut);

        return $no_pemeriksaan;

        }
        // function get_kode_detail(){
        // 	$tgl = date('Ymd');
        // 	$query = $this->db->query(
        //     "SELECT IFNULL(MAX(SUBSTRING(kode_det_biaya,8,3)),0) + 1 As no_urut FROM tb_detbiaya
        //     WHERE SUBSTRING(kode_det_biaya,1,8) = '".$tgl."'");

        // $data = $query->row_array();
        // $no_urut = $data['no_urut'];
        // $kode_detail = sprintf("%03d",$no_urut);

        // return $kode_detail;

        // }
          function prosespemeriksaan(){
        $noPemeriksaan = $this->get_nopemeriksaan();
    $data_periksa = array(
    'noPemeriksaan' => $noPemeriksaan,
    'Keluhan' => $this->input->post('keluhan'),
    'Diagnosa' => $this->input->post('diagnosa'),
    'Perawatan' => $this->input->post('perawatan'),
    'tindakan' => $this->input->post('tindakan'),
    'BeratBadan' => $this->input->post('berat_badan'),
    'TensiDiastolik' => $this->input->post('tensi_diastolik'),
    'TensiSistolik' => $this->input->post('tensi_sistolik'),
    'noPendaftaran' => $this->input->post('nodaftar_input')
     
);
$this->db->insert('tb_pemeriksaan',$data_periksa);

}
               function getDataBelumPeriksa(){
            $query = $this->db->get('v_belum_diperiksa'); 

            return $query->result_array();
        }
        function get_nourut(){
        	$tgl = date('Ymd');
        	$query = $this->db->query(
            "SELECT IFNULL(MAX(SUBSTRING(NoUrut,1,3)),0) + 1 As no_urut FROM tb_pendaftaran
            WHERE SUBSTRING(noPendaftaran,1,8) = '".$tgl."'");

        $data = $query->row_array();
        $no_urut = $data['no_urut'];
        $no_urut_pendaftaran = sprintf("%03d",$no_urut);

        return $no_urut_pendaftaran;

        }
        function get_pegawai(){
        	$NIP = $this->session->userdata('username');
			$result = $this->db->select('NmPeg')->from('tb_pegawai')->where('NIP', $NIP)->limit(1)->get()->row();
		$nama_pegawai =  $result->NmPeg;

		return $nama_pegawai;
	        }
	function get_all()
	{
		return $this->db
			->select('NoPasien, NmPas, AlmtPas, TlpnPas, JKPas')
			->order_by('NmPas','asc')
			->get('tb_pasien');
	}
	function get_baris($NoPasien)
	{
		return $this->db
			->select('NoPasien, NmPas, AlmtPas, TlpnPas, JKPas')
			->where('NoPasien', $NoPasien)
			->limit(1)
			->get('tb_pasien');
	}
	
		

	}
?>