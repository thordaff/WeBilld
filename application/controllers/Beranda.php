<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Auth');
	}
	public function index()
	{
		$data['user'] = $this->Auth->Session();
		$this->load->view('template/__Header');
		$this->load->view('template/__Navbar', $data);
		$this->load->view('beranda');
		$this->load->view('template/__Footer');
	}
}
