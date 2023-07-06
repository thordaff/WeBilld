<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Riwayat extends CI_Controller {

	public function index()
	{
		$this->load->view('template/__Header');
        $this->load->view('template/__Navbar');
		$this->load->view('riwayat');
		$this->load->view('template/__Footer');
	}
}
