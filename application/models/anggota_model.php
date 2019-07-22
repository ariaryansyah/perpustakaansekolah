<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota_model extends CI_Model {

    private $Tabel ='tb_anggota';

    private $id_anggota;
    private $nama;
    private $id_kelas;
    private $jenis_kelamin;

    public function rules() {
        return [
            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'id_kelas',
            'label' => 'id_kelas',
            'rules' => 'required'],
            
            ['field' => 'jenis_kelamin',
            'label' => 'jenis_kelamin',
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

/* End of file anggota_model.php */
/* Location: ./application/models/anggota_model.php */