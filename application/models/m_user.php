<?php 
class m_user extends CI_Model{
	function __construct(){
		parent:: __construct();
	}
	
		function user_list(){
			$query = $this->db->query("SELECT * from user");
			return $query->result();
		}
        function getkodeuser(){
        $query = $this->db->query(
            "SELECT IFNULL(MAX(SUBSTRING(userid,4,7)),0) + 1 As no_urut FROM user");

        $data = $query->row_array();
        $no_urut = $data['no_urut'];
        $id_user = 'USR'.sprintf("%04s",$no_urut);

        return $id_user;
    }
	function simpan_user($username, $password, $fullname, $level){
        $userid = $this->getkodeuser();
		$hasil = $this->db->query("INSERT into user Values('$userid', '$username', md5('$password'), '$fullname', '$level')");
		return $hasil;
		}

		function get_user_by_nouser($Userid){
        $hsl=$this->db->query("SELECT * FROM user WHERE userid='$Userid'");
        if($hsl->num_rows()>0){
            foreach ($hsl->result() as $data) {
                $hasil=array(
                    'userid'=> $data->userid,
                    'username'=> $data->username,
            		'password'=>$data->password,
            		'fullname'=>$data->fullname,
            		'level'=>$data->level
           		 	);
            }
        }
        return $hasil;
    }

    function update_user($userid,$username, $password, $fullname, $level){
		$hasil = $this->db->query("UPDATE user SET username = '$username', password = '$password', fullname =  '$fullname',  level = '$level' WHERE userid = '$userid'");
		return $hasil;
		}

	function hapus_user($userid){
        $hasil=$this->db->query("DELETE FROM user WHERE userid='$userid'");
        return $hasil;
    }

	}
?>