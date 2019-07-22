<?php
defined('BASEPATH') or exit('No direct script access allowed');

class login_model extends CI_Model
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function getLoginData($usr, $psw)
    {
        //khusus PHP deprecated
        $u = $usr;
        $p = $psw;
        $q_cek_login = $this->db->get_where('tbl_login', array('username' => $u, 'password' => $p));
        if (count($q_cek_login->result()) > 0) {
            foreach ($q_cek_login->result() as $qck) {
                if ($qck->stts == 'petugas') {
                    $sess_data['logged_in'] = 'yes';
                    $sess_data['stts'] = 'petugas';
                    $sess_data['username'] = $u;
                    $this->session->set_userdata($sess_data);
                    echo "<script>
                    alert('Selamat, Anda telah login');
                    window.location='", site_url('HalamanUtama/index'), "';
                </script>";
                } else if ($qck->stts == 'siswa') {
                    $sess_data['logged_in'] = 'yes';
                    $sess_data['stts'] = 'siswa';
                    $sess_data['username'] = $u;
                    $this->session->set_userdata($sess_data);
                    echo "<script>
                    alert('Selamat, Anda telah login');
                    window.location='", site_url('HalamanUtama/index'), "';
                </script>";
                } elseif ($qck->stts == 'karyawan') {
                    $sess_data['logged_in'] = 'yes';
                    $sess_data['stts'] = 'karyawan';
                    $sess_data['username'] = $u;
                    $this->session->set_userdata($sess_data);
                    echo "<script>
                    alert('Selamat, Anda telah login');
                    window.location='", site_url('HalamanUtama/index'), "';
                </script>";
                } elseif ($qck->stts == 'guru') {
                    $sess_data['logged_in'] = 'yes';
                    $sess_data['stts'] = 'guru';
                    $sess_data['username'] = $u;
                    $this->session->set_userdata($sess_data);
                    echo "<script>
                    alert('Selamat, Anda telah login');
                    window.location='", site_url('HalamanUtama/index'), "';
                </script>";
                }
            }
        } else {
            echo "<script>
                    alert('Username dan Password tidak sesuai');
                    window.location='", site_url('HalamanUtama/login'), "';
                </script>";
        }
    }
    public function db_dataanggota()
    {
        $query_data_surat = $this->db->query("select * from tbl_anggota");
        return $query_data_surat;
    }
}
