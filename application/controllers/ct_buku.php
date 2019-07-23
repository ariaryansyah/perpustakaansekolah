<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ct_buku extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		$this->load->model('buku_model');
		$this->load->helper('url','form');
        $this->load->library('form_validation');

	}

	// List all your items
	public function index( $offset = 0 )
	{
		$data = array(
			'data_tabel' => $this->buku_model->getAll()
		);
		$this->load->view('Master/v_buku' ,$data);
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

/* End of file ct_buku.php */
/* Location: ./application/controllers/ct_buku.php */
