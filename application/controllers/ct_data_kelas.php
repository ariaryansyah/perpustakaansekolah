<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ct_data_kelas extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies

	}

	// List all your items
	public function index( $offset = 0 )
	{
		echo "Data kelas";
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
