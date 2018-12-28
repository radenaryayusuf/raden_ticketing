<?php 
class m_pelanggan extends CI_Model{
	function __construct(){
		parent:: __construct();
	}
	
		function pelanggan_list(){
			$query = $this->db->query("SELECT * FROM customer");
			return $query->result();
		}
                function getDataPoli(){
            $query = $this->db->get('tb_poliklinik'); 

            return $query->result_array();
        }

        function getkodepelanggan(){
        $query = $this->db->query(
            "SELECT IFNULL(MAX(SUBSTRING(customer_id,4,7)),0) + 1 As no_urut FROM customer");

        $data = $query->row_array();
        $no_urut = $data['no_urut'];
        $id_pelanggan = 'CUS'.sprintf("%04s",$no_urut);

        return $id_pelanggan;
    }
	function simpan_pelanggan($nama, $alamat, $nohp, $jeniskelamin){
        $customer_id = $this->getkodepelanggan();
		$hasil = $this->db->query("INSERT into customer (customer_id, nama, alamat, nohp, jeniskelamin) Values('$customer_id', '$nama', '$alamat', '$nohp', '$jeniskelamin')");
		return $hasil;
		}

		function get_pelanggan_by_customerid($Customer_id){
        $hsl=$this->db->query("SELECT * FROM customer WHERE customer_id='$Customer_id'");
        if($hsl->num_rows()>0){
            foreach ($hsl->result() as $data) {
                $hasil=array(
                    'customer_id'=> $data->customer_id,
            		'nama'=>$data->nama,
            		'alamat'=>$data->alamat,
            		'nohp'=>$data->nohp,
           		 	'jeniskelamin'=>$data->jeniskelamin
            		);
            }
        }
        return $hasil;
    }

    function update_pelanggan($customer_id, $nama, $alamat, $nohp, $jeniskelamin){
		$hasil = $this->db->query("UPDATE customer SET nama = '$nama', alamat = '$alamat', nohp =  '$nohp',  jeniskelamin = '$jeniskelamin' WHERE customer_id = '$customer_id'");
		return $hasil;
		}

	function hapus_pelanggan($customer_id){
        $hasil=$this->db->query("DELETE FROM customer WHERE customer_id='$customer_id'");
        return $hasil;
    }

	}
?>