<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{
  function __construct(){
    parent:: __construct();
   $this->load->model('model_users');
  }
function index(){
  $this->load->view('authentication/login');
}
  // public function cekAkun()
  // {

  //   //membuat validasi login
  //   $username = $this->input->post('username');
  //   $password = $this->input->post('password');

  //   $query = $this->model_users->cekAkun($username, $password);

  //   if ($query === 1) {
  //     return "User Tidak Ditemukan!";
  //   }
  //   else if ($query === 3) {
  //     return "Password Salah!";
  //   }
  //   else {
  //     //membuat session dengan nama userdata
  //     $userData = array(
  //       'userid' => $query->userid,
  //       'username' => $query->username,
  //       'level' => $query->level,
  //       'logged_in' => TRUE
  //     );
  //     $this->session->set_userdata($userData);
  //     return TRUE;

  //   }
  // }

  public function login()
  {
    $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);

        $cek_dosen=$this->model_users->auth_admin($username,$password);
if ($cek_dosen->num_rows() > 0) {
  $data=$cek_dosen->row_array();
  $this->session->set_userdata('logged_in',TRUE);
             if($data['level']=='1'){ //Akses admin
                $this->session->set_userdata('akses','1');
                $this->session->set_userdata('ses_id',$data['userid']);
                $this->session->set_userdata('nama',$data['fullname']);
                
                redirect('homepage');

                // print_r($this->session->userdata());
                

             }else{ //akses dosen
                $this->session->set_userdata('akses','2');
                $this->session->set_userdata('ses_id',$data['userid']);
                $this->session->set_userdata('nama',$data['fullname']);
                redirect('homepage');
                
             } 
}else{  // jika username dan password tidak ditemukan atau salah
              
              echo $this->session->set_flashdata('msg','Username Atau Password Salah');
              redirect('auth');
          }

    //melakukan pengalihan halaman sesuai dengan levelnya
// if($this->session->userdata('logged_in') == TRUE){
//    if ($this->session->userdata('level') == '0'){
//     redirect('homepage');
//   }
//     else if($this->session->userdata('level') == '1'){
//       redirect('homepage');
//     }
// }
   

//     //proses login dan validasi nya
//   // $username = $this->input->post('username');
//   // $pass = $this->input->post('password');
//   // $where = array(
//   // 'username' => $username,
//   // 'password' => md5($pass)
//   // );
//   //  $cek = $this->model_users->cek_login("user",$where)->num_rows();
//   //   if($cek > 0){
//     if ($this->input->post('submit')) {
      
//       $this->form_validation->set_rules('username', 'Username', 'required');
//       $this->form_validation->set_rules('password', 'Password', 'required');
//       $error = $this->cekAkun();
//       if ($this->form_validation->run() && $error === TRUE) {
//         $data = $this->model_users->cekAkun($this->input->post('username'), $this->input->post('password'));

//         //jika bernilai TRUE maka alihkan halaman sesuai dengan level nya
//         if($data->level == '0'){
//            // echo '<script>console.log("berhasil")</script>';
          
//           redirect('homepage');
//         }
//         else if($data->level == '1'){
          
//           redirect('homepage');
//         }
//       }

//       //Jika bernilai FALSE maka tampilkan error
//       else{
//         $data['error'] = $error;
//         $this->load->view('authentication/login', $data);
//       }
//     }
//     //Jika tidak maka alihkan kembali ke halaman login
//     else{
//       $this->load->view('authentication/login');
//     }
  }


  // public function logout()
  // {
  //   //Menghapus semua session (sesi)
  //   $this->session->sess_destroy();
  //   redirect('auth/login');
  // }
   function logout(){
        $this->session->sess_destroy();
        // $url=base_url('');
        redirect('auth/login');
    }
}
