<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RiwayatPesanan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Auth');
        $this->load->model('TampilData');
	}
	public function index()
	{
		$data['user'] = $this->Auth->Session();
        $data['pesananUser'] = $this->TampilData->ShowPesananUser();
        $data['pageTitle'] = 'WeBilld - Beranda';
		$this->load->view('template/__Header', $data);
		$this->load->view('template/__Navbar');
		$this->load->view('RiwayatPesanan');
		$this->load->view('template/__Footer');
	}
}
