<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ct_data_petugas extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		$this->load->model('petugas_model');
		$this->load->helper('url','form');
        $this->load->library('form_validation');


	}

	// List all your items
	public function index()
	{
		$data = array(
			'data_tabel' => $this->petugas_model->getAll()
		);
		$this->load->view('Master/v_datapetugas' ,$data);
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
	public function hapus($id_petugas){
        $where = array('id_petugas' => $id_petugas);
        $this->petugas_model->hapus_data($where,'tbl_petugas');
        redirect('index.php/ct_data_petugas/index');
      }
}

/* End of file ct_data_anggota.php */
/* Location: ./application/controllers/ct_data_anggota.php */
