<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas_model extends CI_Model {

    private $Tabel ='tbl_petugas';

    private $id_petugas;
    private $nama;
    private $img;
    private $jenis_kelamin;
    private $alamat;
    private $password;
    private $hp;
    public function rules() {
        return [
            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'img',
            'label' => 'img',
            'rules' => 'required'],

            ['field' => 'jenis_kelamin',
            'label' => 'jenis_kelamin',
            'rules' => 'required'],
            
            ['field' => 'alamat',
            'label' => 'alamat',
            'rules' => 'required'],

            ['field' => 'password',
            'label' => 'password',
            'rules' => 'required'],

            ['field' => 'hp',
            'label' => 'hp',
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

    function hapus_data($where,$table){
            $this->db->where($where);
            $this->db->delete($table);
        }

}

/* End of file anggota_model.php */
/* Location: ./application/models/anggota_model.php */