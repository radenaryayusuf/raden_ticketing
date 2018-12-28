<?php 
class m_stasiun extends CI_Model{
	function __construct(){
		parent:: __construct();
	}
	
		function stasiun_list(){
			 $query = $this->db->query("SELECT * FROM stasiun Order by SUBSTRING(id,6,8)");

            return $query->result_array();
		}
        //         function getDataTransportasi(){
        //      $query = $this->db->get('transportation'); 

        //     return $query->result_array();
        // }

  // function getkodestasiun(){
  //       $query = $this->db->query(
  //           "SELECT IFNULL(MAX(SUBSTRING(stasiun_id,4,7)),0) + 1 As no_urut FROM rute");

  //       $data = $query->row_array();
  //       $no_urut = $data['no_urut'];
  //       $id_rute = 'RTE'.sprintf("%04s",$no_urut);

  //       return $id_rute;
  //   }
    function createKodeStasiun($abbr){
$awal = 'ST';
        $query = $this->db->query(
            "SELECT IFNULL(MAX(SUBSTRING(id,6,8)),0)+1 AS no_urut  FROM stasiun ");
        $data = $query->row_array();
        $no_urut = sprintf("%'.03d",$data['no_urut']);
        $kode_mobil = 'ST'.$abbr.$no_urut;

        return $kode_mobil;
    }
	function simpan_stasiun($id, $name, $city, $abbr){
		$hasil = $this->db->query("INSERT into stasiun Values('$id', '$name', '$city', '$abbr')");
		return $hasil;
		}

        function get_stasiun_by_id($Id){
        $hsl=$this->db->query("SELECT * FROM stasiun WHERE id='$Id'");
        
        if($hsl->num_rows()>0){
            foreach ($hsl->result() as $data) {
                $hasil=array(
                    'id'=> $data->id,
            		'name'=>$data->name,
            		'city'=>$data->city,
            		'abbr'=>$data->abbr
            );
            }
        }
        return $hasil;
    }

    function update_stasiun($id, $name, $city, $abbr){
		$hasil = $this->db->query("UPDATE stasiun SET name = '$name', city = '$city', abbr =  '$abbr' WHERE id = '$id'");
		return $hasil;
		}

	function hapus_stasiun($id){
        $hasil=$this->db->query("DELETE FROM stasiun WHERE id='$id'");
        return $hasil;
    }

	}
?>