<?php 
class m_pemesanan_pesawat extends CI_Model{
    var $tabel = 'bandara';
	function __construct(){
		parent:: __construct();
	}

         function  get_rutefrom() {  //funtion menampilkan semua data
        return $this->db->query("SELECT distinct(st.city),st.name,rt.rute_from,st.abbr from bandara st inner join rute rt on st.bandara_id = rt.rute_from");
            }
    function  get_ruteto() {  //funtion menampilkan semua data
        return $this->db->query("SELECT distinct(st.city),st.name, rt.rute_to,st.abbr from bandara st inner join rute rt on st.bandara_id = rt.rute_to");
           }
        function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

     function korsi_bereum($rute_id){
    $date_now =  date("Ymd");
     $time_now =  date("H:i:s");
       $query = $this->db->query(
            "SELECT reservation.seat_code from reservation inner join rute on reservation.rute_id = rute.rute_id Where reservation.rute_id = '{$rute_id}' AND SUBSTRING(reservation.reservation_id, 1, 8) = '$date_now'  AND rute.depart_to >= '$time_now' ")->result_array();

        // $no_urut = $data['seat_code'];
        // $id_pelanggan =  join(",", $no_urut);

        return $query;
}
       function getBaseUrl() 
{
    // output: /myproject/index.php
    $currentPath = $_SERVER['PHP_SELF']; 
    
    // output: Array ( [dirname] => /myproject [basename] => index.php [extension] => php [filename] => index ) 
    $pathInfo = pathinfo($currentPath); 
    
    // output: localhost
    $hostName = $_SERVER['HTTP_HOST']; 
    
    // output: http://
    $protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,5))=='https://'?'https://':'http://';
    
    // return: http://localhost/myproject/
    return $protocol.$hostName.$pathInfo['dirname']."/";
}
      function prosesorder(){
    for ($i=0; $i < count($this->input->post('kode_pesan[]')) ; $i++) { 
        $id_cust = $this->getkodepelanggan();
        $datacustomer = array(
            'customer_id' => $id_cust,
            'nama' => $this->input->post('nama['.$i.']'),
            'alamat' => $this->input->post('alamat['.$i.']'),
            'nohp' => $this->input->post('nohp['.$i.']'),
            'jeniskelamin' => $this->input->post('jeniskelamin['.$i.']')
        );
        $this->db->insert('customer',$datacustomer);
    
    $daftar_di = $this->getBaseUrl();
    $username = $this->session->userdata('userid');
    $reservationid = $this->get_idreservation();
    $datareservation = array(
            'reservation_id' => $reservationid,
            'reservation_code' => $this->input->post('reservation_code'),
            'reservation_at' => $daftar_di,
            'reservation_date' => $this->input->post('reservation_date'),
            'customer_id' => $id_cust,
            'seat_code' => $this->input->post('seat_code['.$i.']'),
            'rute_id' => $this->input->post('rute_id_booking'),
            'user_id' => $username,
            'price' => $this->input->post('price_sum')
              
        );
    $this->db->insert('reservation',$datareservation);
}
     // $id_cust = $this->getkodepelanggan();
     //    $datacustomer = array(
     //        'customer_id' => $id_cust,
     //        'nama' => $this->input->post('nama['.$i.']'),
     //        'alamat' => $this->input->post('alamat['.$i.']'),
     //        'nohp' => $this->input->post('nohp['.$i.']'),
     //        'jeniskelamin' => $this->input->post('jeniskelamin['.$i.']')
}
              function get_rute_by_ruteid($Rute_id){
        $hsl=$this->db->query("SELECT * FROM rute WHERE rute_id='$Rute_id'");
        if($hsl->num_rows()>0){
            foreach ($hsl->result() as $data) {
                $hasil=array(
                    'rute_id'=> $data->rute_id,
                    'price'=>$data->price
                    );
            }
        }
        return $hasil;
    }
        function kereta_list($rute_from, $rute_to){
            $transportation_type_id = 'TRID0001';
            $where =  "rute_from='$rute_from' AND rute_to='$rute_to'";
            $this->db->select("rt.rute_id,tr.deskripsi, rt.depart_at, tr.seat_qty, rt.price");
            $this->db->from("rute as rt");
            $this->db->join('transportation as tr', 'rt.transportation_id = tr.transportation_id');
            $this->db->where($where);
            $query = $this->db->get();
            $result = $query->result_array();
            return $result;
        }
         function getkodepelanggan(){
        $query = $this->db->query(
            "SELECT IFNULL(MAX(SUBSTRING(customer_id,4,7)),0) + 1 As no_urut FROM customer");

        $data = $query->row_array();
        $no_urut = $data['no_urut'];
        $id_pelanggan = 'CUS'.sprintf("%04s",$no_urut);

        return $id_pelanggan;
    }
         
          function get_name1($rute_from){
             $result = $this->db->select('name')->from('bandara')->where('bandara_id', $rute_from)->limit(1)->get()->row();
        $nama_bandara =  $result->name;

        return $nama_bandara;
           }
         function get_name2($rute_to){
           $result = $this->db->select('name')->from('bandara')->where('bandara_id', $rute_to)->limit(1)->get()->row();
        $nama_bandara =  $result->name;

        return $nama_bandara;

           }
        
        function get_rute_byrutefrom($state){  //funtion menampilkan kota berdasarkan nisn
        $this->db->select('bd.city');
        $this->db->from("bandara as bd");
        $this->db->join('rute as rt', 'rt.rute_from = bd.bandara_id');
        $this->db->where('rt.rute_from',$state);
        $query = $this->db->get();
        if($query->num_rows() > 0){
            return $query->result();
        } else {
            return FALSE;
        }
    }
     function get_rute_byruteto($state){  //funtion menampilkan kota berdasarkan nama
        $this->db->select('city, name, id');
        $this->db->where('bandara_id',$state);
        $query = $this->db->get($this->tabel);
        if($query->num_rows() > 0){
            return $query->result();
        } else {
            return FALSE;
        }
    }
function get_idreservation(){
            $tgl = date('Ymd');
            $query = $this->db->query(
            "SELECT IFNULL(MAX(SUBSTRING(reservation_id,9,3)),0) + 1 As no_urut FROM reservation
            WHERE SUBSTRING(reservation_id,1,8) = '".$tgl."'");

        $data = $query->row_array();
        $no_urut = $data['no_urut'];
        $no_pendaftaran = $tgl.sprintf("%03d",$no_urut);

        return $no_pendaftaran;

        }
	
		

	}
?>