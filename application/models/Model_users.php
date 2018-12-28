<?php
  class Model_users extends CI_Model {
    //Cek di database
function auth_admin($username,$password){
    $query=$this->db->query("SELECT * FROM user WHERE username='$username' AND password=MD5('$password') LIMIT 1");
    return $query;
  }
    //mengambil tabel users
//     public $tabel_user = 'user';
// function cek_login($table,$where){    
//     return $this->db->get_where($table,$where);
//   }
//     public function cekAkun($username, $password)
//     {
//       //cari username lalu lakukan validasi
//       $this->db->where('username', $username);
//       $query = $this->db->get($this->tabel_user)->row();

//       //jika bernilai 1 maka user tidak ditemukan
//       if (!$query) return 1;


//       //jika bernilai 3 maka password salah
//       $hash = $query->password;
//        if (md5($password) != $hash) return 3;

//       return $query;
//     }

  }
