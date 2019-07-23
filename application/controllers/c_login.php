<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class c_login extends CI_Controller
{


    public function _construct()
    {
        session_start();
        parent::__construct();
        $this->load->model('login_model');
        $this->load->library('form_validation');
        $this->load->helper('url','form');
    }
    public function index()
    {
        $data['title'] = 'Home Perpustakaan';
        $tmp['content'] = $this->load->view('Dashboard', $data, TRUE);
        $this->load->view('Dashboard', $tmp);
    }

    //halaman login
    public function log()
    {
        $cek = $this->session->userdata('logged_in');
        if (empty($cek)) {

            //buat atribut form
            $frm['username'] = array(
                'name' => 'username',
                'id' => 'username',
                'type' => 'text',
                'value' => '',
                'class' => 'form-control',
                'placeholder' => 'Username'
            );
            $frm['password'] = array(
                'name' => 'password',
                'id' => 'password',
                'type' => 'password',
                'value' => '',
                'class' => 'form-control',
                'placeholder' => 'Password'
            );

            $frm['title'] = 'Login & Register';
            $tmp['content'] = $this->load->view('HalamanUtama/login', $frm);
        } else {
            $st = $this->session->userdata('stts');
            echo $s = $this->session->userdata('username');
            if ($st == 'admin') {
                header('location:' . base_url() . 'admin/Home');
            } else if ($st == 'petugas') {
                header('location:' . base_url() . 'petugas/Home');
            }
        }
    }

    //mengambil data login
    public function login()
    {
        $u = $_POST['username'];
        $p = $_POST['password'];
        $this->login_model->getLoginData($u, $p);

    }
// public function login()
//     {
//         $u = $_POST['username'];
//         $p = $_POST['password'];
//         $this->login_model->getLoginData($u, $p);
//     }


    //logout
    public function logout()
    {
        $cek = $this->session->userdata('logged_in');
        if (empty($cek)) {

            header('location:' . base_url() . 'web/log');
        } else {

            $this->session->sess_destroy();
            header('location:' . base_url() . 'web/log');
        }
    }
}

/* End of file web.php */
/* Location: ./application/controllers/web.php */
