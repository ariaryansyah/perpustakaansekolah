<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_barang extends CI_Controller {

	public function index()
	{
		$data = array(
			'jumlahnya' => $this->Master_model->jumlah_barang();
		)
	}
}

/* End of file c_barang.php */
/* Location: ./application/controllers/c_barang.php */