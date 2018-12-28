<?php 
class Datauser extends CI_Controller{
	function __construct(){
		parent:: __construct();
		$this->load->model('m_user');
        if($this->session->userdata('logged_in') != TRUE){
        $url=$this->load->view('authentication/login');
        redirect($url);
    }
        
	}
	function index(){
        $data['kode_user'] = $this->m_user->getkodeuser();
		$this->load->view('user_page',$data);
	}
    function data_user(){
        $data = $this->m_user->user_list();
        echo json_encode($data);
    }
    function get_user(){
        $Userid = $this->input->get('userid');
        $data = $this->m_user->get_user_by_nouser($Userid);
        echo json_encode($data);
    }
	    function simpan_user(){
            $username = $this->input->post('username');
            $password =$this->input->post('password');
            $fullname = $this->input->post('fullname');
            $level = $this->input->post('level');
            
            $data = $this->m_user->simpan_user($username, $password, $fullname, $level);
            echo json_encode($data);
}

 function update_user(){

            $userid = $this->input->post('userid_edit');
            $username = $this->input->post('username_edit');
            $password =$this->input->post('password_edit');
            $fullname = $this->input->post('fullname_edit');
            $level = $this->input->post('level_edit');

            $data = $this->m_user->update_user($userid,$username, $password, $fullname, $level);
            echo json_encode($data);
}
            function hapus_user(){
            $userid = $this->input->post('kode');
            $data = $this->m_user->hapus_user($userid);
            echo json_encode($userid);


}
}
?>