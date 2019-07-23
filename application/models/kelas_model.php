<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas_model extends CI_Model {

	  private $Tabel ='tbl_kelas';

    private $id_kelas;
    private $kelas;

    public function rules() {
        return [
            ['field' => 'kelas',
            'label' => 'Kelas',
            'rules' => 'required'],
        ];
    }

    public function getAll(){
        return $this->db->get($this->Tabel)->result();
    }
   
    public function simpan($tabel,$data)
    {
        $this->db->insert($tabel,$data);
    }	

}

/* End of file kelas_model.php */
/* Location: ./application/models/kelas_model.php */