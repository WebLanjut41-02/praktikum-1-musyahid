<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends MY_Controller {



	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{

		$this->load->view('login');
	}

	public function proses_login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$mahasiswa = array("Abror", "Rizki", "Yusuf");

		if (in_array($username, $mahasiswa)) {
			$this->session->set_userdata('username', $username);
			redirect('login/hasil');
		} else {
			$this->load->view('login');

		}

		// $this->load->view('hasil', $data);
	}

	public function hasil()
	{
		$mahasiswa = array("Abror", "Rizki", "Yusuf");

		$this->load->view('hasil', $mahasiswa);
	}

	public function logout()
	{
		$this->session->unset_userdata(array('username'	=> ''));

		redirect('login');
	}

}