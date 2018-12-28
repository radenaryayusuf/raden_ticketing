<?php 
class m_rute extends CI_Model{
    var $tabel = 'stasiun';
	function __construct(){
		parent:: __construct();
	}
	
		function rute_list(){
			 $query = $this->db->get('rute'); 

            return $query->result_array();
		}
        function stasiun_list(){
            $query = $this->db->query("SELECT * FROM stasiun Order by SUBSTRING(id,6,8)");

            return $query->result_array();
        }
        function pesawat_list(){
            $query = $this->db->query("SELECT * FROM bandara Order by SUBSTRING(bandara_id,6,8)");

            return $query->result_array();
        }
        function getDataTransportasi(){
             $query = $this->db->get('transportation'); 

            return $query->result_array();
        }
         function getDataRute($Id){
             return $this->db->query("SELECT * From stasiun WHERE id <> '$Id'"); 

        }

  function getkoderute(){
        $query = $this->db->query(
            "SELECT IFNULL(MAX(SUBSTRING(rute_id,4,7)),0) + 1 As no_urut FROM rute");

        $data = $query->row_array();
        $no_urut = $data['no_urut'];
        $id_rute = 'RTE'.sprintf("%04s",$no_urut);

        return $id_rute;
    }
	function simpan_rute($depart_at,$depart_to, $rute_from, $rute_to, $price, $transportation_id){
        $rute_id = $this->getkoderute();
		$hasil = $this->db->query("INSERT into rute Values('$rute_id', '$depart_at', '$depart_to', '$rute_from', '$rute_to', '$price', '$transportation_id')");
		return $hasil;
		}

		function get_rute_by_id($Rute_id){
        $hsl=$this->db->query("SELECT * FROM rute WHERE rute_id='$Rute_id'");
        if($hsl->num_rows()>0){
            foreach ($hsl->result() as $data) {
                $hasil=array(
                    'rute_id'=> $data->rute_id,
            		'depart_at'=>$data->depart_at,
                    'depart_to'=>$data->depart_to,
            		'rute_from'=>$data->rute_from,
            		'rute_to'=>$data->rute_to,
           		 	'price'=>$data->price,
                    'transportation_id'=>$data->transportation_id
            );
            }
        }
        return $hasil;
    }
    // function get_rute_byrutefrom($state){  //funtion menampilkan kota berdasarkan nisn
    //     $this->db->select('city');
       
    //     $query = $this->db->get($this->tabel);
    //     if($query->num_rows() > 0){
    //         return $query->result();
    //     } else {
    //         return FALSE;
    //     }
    // }
    // function  get_rutefrom() {  //funtion menampilkan semua data
    //     return $this->db->query("SELECT distinct(city) from stasiun");
    //         }
    // function  get_ruteto() {  //funtion menampilkan semua data
    //     return $this->db->query("SELECT distinct(city) from stasiun");
    //        }

    function update_rute($rute_id, $depart_at,$depart_to, $rute_from, $rute_to, $price, $transportation_id){
		$hasil = $this->db->query("UPDATE rute SET depart_at = '$depart_at',depart_to = '$depart_to', rute_from = '$rute_from', rute_to =  '$rute_to',  price = '$price',  transportation_id = '$transportation_id' WHERE rute_id = '$rute_id'");
		return $hasil;
		}

	function hapus_rute($rute_id){
        $hasil=$this->db->query("DELETE FROM rute WHERE rute_id='$rute_id'");
        return $hasil;
    }

	}
?>