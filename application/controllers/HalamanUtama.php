<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HalamanUtama extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Master_model');
		$this->load->helper('url','form');
        $this->load->library('form_validation');
	}

	public function index()
	{
		$data = array(
		'data_tabel' => $this->Master_model->getAll()
	);
		$this->load->view('Dashboard', $data);
	}
	public function login()
	{
		$this->load->view('login');
	}
}
