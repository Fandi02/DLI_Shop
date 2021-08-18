<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DLI_shop_controller extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('components/header');
		$this->load->view('login');
		$this->load->view('components/footer');
	}

	public function register()
	{
		$this->load->view('components/header');
		$this->load->view('register');
		$this->load->view('components/footer');
	}
}
