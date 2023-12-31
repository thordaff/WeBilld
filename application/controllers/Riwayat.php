<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Riwayat extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Auth');
	}

	public function index()
	{
		$data['user'] = $this->Auth->Session();
        $data['pageTitle'] = 'WeBilld - Riwayat Pemesanan';
		$this->load->view('template/__Header', $data);
        $this->load->view('template/__Navbar');
		$this->load->view('riwayat');
		$this->load->view('template/__Footer');
	}
}
