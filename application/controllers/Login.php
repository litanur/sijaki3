<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index(){
		$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');
	}
	function verify_login(){
		$this->load->model('LoginModel');
		$verify = $this->LoginModel->verify($_POST);
		if($verify != 0){
			if($verify['type'] == 'admin')
				redirect("Admin/");
			else if($verify['type'] == 'dosen')
				redirect("Dosen/index/".$verify['result'][0]->kode_dosen);
			else
				redirect("Mahasiswa/index/".$verify['result'][0]->nim);
		}
		else{
			$this->index();
		}
	}
}