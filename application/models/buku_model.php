<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku_model extends CI_Model {

	private $Tabel ='tbl_buku';

    private $id_buku;
    private $judul;
    private $id_kategori;
    private $id_penerbit;
    private $id_oengarang;
    private $thn_terbit;
    private $stok;


    public function rules() {
        return [
            ['field' => 'judul',
            'label' => 'Judul',
            'rules' => 'required'],

             ['field' => 'thn_terbit',
            'label' => 'Thn_terbit',
            'rules' => 'required'],

             ['field' => 'stok',
            'label' => 'Stok',
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

/* End of file buku_model.php */
/* Location: ./application/models/buku_model.php */