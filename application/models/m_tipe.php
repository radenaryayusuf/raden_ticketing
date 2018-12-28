<?php 
class m_tipe extends CI_Model{
	function __construct(){
		parent:: __construct();
	}
	
		function tipe_list(){
			$query = $this->db->query("SELECT * from transportation_type");
			return $query->result();
		}

        function getkodetipe(){
        $query = $this->db->query(
            "SELECT IFNULL(MAX(SUBSTRING(transportation_type_id,5,9)),0) + 1 As no_urut FROM transportation_type");

        $data = $query->row_array();
        $no_urut = $data['no_urut'];
        $transportation_id = 'TRID'.sprintf("%04s",$no_urut);

        return $transportation_id;
    }
	function simpan_tipe($description){
		$transportation_id = $this->getkodetipe();
        $hasil = $this->db->query("INSERT into transportation_type Values('$transportation_id', '$description')");
		return $hasil;
		}

		function get_tipe_by_transportationtypeid($Transportation_type_id){
        $hsl=$this->db->query("SELECT * FROM transportation_type WHERE transportation_type_id='$Transportation_type_id'");
        if($hsl->num_rows()>0){
            foreach ($hsl->result() as $data) {
                $hasil=array(
                    'transportation_type_id'=> $data->transportation_type_id,
            		'description'=>$data->description
            );
            }
        }
        return $hasil;
    }

    function update_tipe($transportation_type_id, $description){
		$hasil = $this->db->query("UPDATE transportation_type SET description = '$description' WHERE transportation_type_id = '$transportation_type_id'");
		return $hasil;
		}

	function hapus_tipe($transportation_type_id){
        $hasil=$this->db->query("DELETE FROM transportation_type WHERE transportation_type_id='$transportation_type_id'");
        return $hasil;
    }

	}
?>