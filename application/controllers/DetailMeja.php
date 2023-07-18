<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DetailMeja extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Auth');
		$this->load->model('TampilData');
	}
	public function index($id_meja)
	{
		$data['user'] = $this->Auth->Session();
        $data['pageTitle'] = 'WeBilld - Pesan Meja';
		$data['meja'] = $this->TampilData->ShowMejaDetail($id_meja);
		$this->load->view('template/__Header', $data);
		$this->load->view('template/__Navbar');
		$this->load->view('detailMeja', $id_meja);
		$this->load->view('template/__Footer');
	}
}
