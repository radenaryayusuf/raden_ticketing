<?php 
class m_transportasi extends CI_Model{
	function __construct(){
		parent:: __construct();
	}
	
		function transportasi_list(){
			$query = $this->db->query("SELECT transportation.transportation_id, transportation.code, transportation.deskripsi, transportation.seat_qty, transportation_type.description from transportation inner join transportation_type on transportation.transportation_type_id = transportation_type.transportation_type_id group by transportation.transportation_id, transportation.code, transportation.deskripsi, transportation.seat_qty, transportation_type.description");
			return $query->result();
		}
	function simpan_transportasi($code, $deskripsi, $seat_qty, $transportation_type_id){
        $transportation_id = $this->getkodetransportasi();
		$hasil = $this->db->query("INSERT into transportation Values('$transportation_id', '$code', '$deskripsi', '$seat_qty', '$transportation_type_id')");
		return $hasil;
		}
             function getDataTipe(){
            $query = $this->db->get('transportation_type'); 

            return $query->result_array();
        }
function getkodetransportasi(){
        $query = $this->db->query(
            "SELECT IFNULL(MAX(SUBSTRING(transportation_id,4,7)),0) + 1 As no_urut FROM transportation");

        $data = $query->row_array();
        $no_urut = $data['no_urut'];
        $id_transportasi = 'TRP'.sprintf("%04s",$no_urut);

        return $id_transportasi;
    }
		function get_transportasi_by_id($Transportation_id){
        $hsl=$this->db->query("SELECT * FROM transportation WHERE transportation_id='$Transportation_id'");
        if($hsl->num_rows()>0){
            foreach ($hsl->result() as $data) {
                $hasil=array(
                    'transportation_id'=> $data->transportation_id,
            		'code'=>$data->code,
            		'deskripsi'=>$data->deskripsi,
            		'seat_qty'=>$data->seat_qty,
           		 	'transportation_type_id'=>$data->transportation_type_id
            );
            }
        }
        return $hasil;
    }

    function update_transportasi($transportation_id ,$code, $deskripsi, $seat_qty, $transportation_type_id){
		$hasil = $this->db->query("UPDATE transportation SET code = '$code', deskripsi = '$deskripsi', seat_qty =  '$seat_qty',  transportation_type_id = '$transportation_type_id' WHERE transportation_id = '$transportation_id'");
		return $hasil;
		}

	function hapus_transportasi($transportation_id){
        $hasil=$this->db->query("DELETE FROM transportation WHERE transportation_id='$transportation_id'");
        return $hasil;
    }

	}
?>