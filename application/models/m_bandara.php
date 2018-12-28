<?php 
class m_bandara extends CI_Model{
	function __construct(){
		parent:: __construct();
	}
	
		function bandara_list(){
			$query = $this->db->query("SELECT * FROM bandara Order by SUBSTRING(bandara_id,6,8)");

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
    function createKodeBandara($abbr){
$awal = 'BU';
        $query = $this->db->query(
            "SELECT IFNULL(MAX(SUBSTRING(bandara_id,6,8)),0)+1 AS no_urut  FROM bandara ");
        $data = $query->row_array();
        $no_urut = sprintf("%'.03d",$data['no_urut']);
        $kode_pesawat = 'BU'.$abbr.$no_urut;

        return $kode_pesawat;
    }
	function simpan_bandara($id, $name, $city, $abbr){
		$hasil = $this->db->query("INSERT into bandara Values('$id', '$name', '$city', '$abbr')");
		return $hasil;
		}

        function get_bandara_by_id($Id){
        $hsl=$this->db->query("SELECT * FROM bandara WHERE bandara_id='$Id'");
        
        if($hsl->num_rows()>0){
            foreach ($hsl->result() as $data) {
                $hasil=array(
                    'bandara_id'=> $data->bandara_id,
            		'name'=>$data->name,
            		'city'=>$data->city,
            		'abbr'=>$data->abbr
            );
            }
        }
        return $hasil;
    }

    function update_bandara($id, $name, $city, $abbr){
		$hasil = $this->db->query("UPDATE bandara SET name = '$name', city = '$city', abbr =  '$abbr' WHERE bandara_id = '$id'");
		return $hasil;
		}

	function hapus_bandara($id){
        $hasil=$this->db->query("DELETE FROM bandara WHERE bandara_id='$id'");
        return $hasil;
    }

	}
?>