<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Meja extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Auth');
		$this->load->model('TampilData');
	}
	public function index()
	{
		$data['user'] = $this->Auth->Session();
        $data['pageTitle'] = 'WeBilld - Kumpulan Meja';
		$data['meja'] = $this->TampilData->showMeja();
		$this->load->view('template/__Header', $data);
		$this->load->view('template/__Navbar');
		$this->load->view('meja');
		$this->load->view('template/__Footer');
	}
}
