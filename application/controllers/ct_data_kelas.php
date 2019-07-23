<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ct_data_kelas extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		$this->load->model('kelas_model');
		$this->load->helper('url','form');
		$this->load->library('form_validation');

	}

	// List all your items
	public function index( )
	{
		$data = array(
			'data_tabel' => $this->kelas_model->getAll()
		);
		$this->load->view('Master/v_kelas' ,$data);
	}

	// Add a new item
	public function add()
	{

	}

	//Update one item
	public function update( $id = NULL )
	{

	}

	//Delete one item
	public function delete( $id = NULL )
	{

	}
}

/* End of file ct_data_kelas.php */
/* Location: ./application/controllers/ct_data_kelas.php */
