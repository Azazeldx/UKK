<?php

namespace App\Controllers\Petugas;

use App\Controllers\BaseController;
use App\Models\PetugasModel;

class Login extends BaseController
{

    public function __construct()
    {
        $this->PetugasModel = new PetugasModel();
    }

    public function index()
    {
        return view('petugas\login\index');
    }

    public function login()
    {
        $session = session();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $validUser = $this->PetugasModel->login($username, $password);



        // var_dump($level);

        if ($validUser) {
            $level = $validUser->level;
            if ($level === 'admin') {
                $ses_admin = [
                    'username' => $validUser->username,
                    'nama_petugas' => $validUser->nama_petugas,
                    'level' => $validUser->level,
                    'logged_in' => TRUE,
                    'id_petugas' => $validUser->id_petugas
                ];
                $session->set($ses_admin);
                return redirect()->to(base_url('/admin/beranda'));
            } else {
                $ses_petugas = [
                    'username' => $validUser->username,
                    'nama_petugas' => $validUser->nama_petugas,
                    'level' => $validUser->level,
                    'logged_in' => TRUE,
                    'id_petugas' => $validUser->id_petugas
                ];
                $session->set($ses_petugas);
                return redirect()->to(base_url('/petugas/beranda'));
            }
        } else {

            echo '<script>
            alert("Username atau Password Salah!");
            window.location="' . base_url('petugas/login') . '"
            </script>';

            // // $this->session->set_flashdata('error', 'Username atau password salah');

            $this->session->set_flashdata('error', 'Username atau Password salah');
            return $this->load->view('petugas/login');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('/petugas/login'));
    }
}
