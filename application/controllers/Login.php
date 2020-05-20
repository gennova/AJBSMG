<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('M_login');
    } 

    	public function index(){
		$this->load->view('vlogin');
	}

	public function cek(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$result = $this->M_login->login_process($username,$password);
		if(isset($result)){
			echo "Login Sukses";
			$data = array(
			'username' => $username,
			'namauser' => $result->namauser,
			'level' => $result->level,
			'status' => "login"
			);
			$this->session->set_userdata($data);
			redirect(base_url());

		}{
			echo "Login gagal";
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}