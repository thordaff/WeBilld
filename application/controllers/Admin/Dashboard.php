<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Auth');
	}
	public function index()
	{
		$data['user'] = $this->Auth->Session();
        $data['pageTitle'] = 'WeBilld - Kumpulan Meja';
		$this->load->view('template/__Header', $data);
		$this->load->view('Admin/dashboard');
		$this->load->view('template/__AdminFooter');
	}
}
