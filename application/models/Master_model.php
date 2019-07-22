<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master_model extends CI_Model {

	private $Tabel ='tb_anggota';

	private $id_anggota;
	private $nama;
	private $id_kelas;
	private $jenis_kelamin;

    public function rules() {
        return [
            ['field' => 'nama_pembeli',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'jk',
            'label' => 'jenis_kelamin',
            'rules' => 'required'],
            
            ['field' => 'alamat',
            'label' => 'Alamat',
            'rules' => 'required']
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

/* End of file Master_model.php */
/* Location: ./application/models/Master_model.php */