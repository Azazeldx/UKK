<?php

namespace App\Controllers\Petugas;

use App\Controllers\BaseController;
use App\Models\PenggunaModel;
use App\Models\PetugasModel;

class Login extends BaseController
{
    protected $PetugasModel;
    protected $PenggunaModel;
    public function __construct()
    {
        $this->PetugasModel = new PetugasModel();
        $this->PenggunaModel = new PenggunaModel();
    }

    public function index()
    {
        if(!session()->get('logged_in')) {
            return redirect()->to(base_url('/'));
        }
        return view('petugas\login\index');
    }

    public function login()
    {
        $session = session();
        $username = $this->request->getVar('username');
        $password = md5($this->request->getVar('password'));
        $validUser = $this->PenggunaModel->login($username, $password, 'petugas');

        if ($validUser) {
            $level = $validUser->role;
            if ($level === 'admin') {
                $ses_admin = [
                    'username' => $validUser->username,
                    'nama_petugas' => $validUser->nama_petugas,
                    'level' => $validUser->role,
                    'logged_in' => TRUE,
                    'id_petugas' => $validUser->id_petugas
                ];
                $session->set($ses_admin);
                return redirect()->to(base_url('/admin/beranda'));
            } else {
                $ses_petugas = [
                    'username' => $validUser->username,
                    'nama_petugas' => $validUser->nama_petugas,
                    'level' => $validUser->role,
                    'logged_in' => TRUE,
                    'id_petugas' => $validUser->id_petugas
                ];
                $session->set($ses_petugas);
                return redirect()->to(base_url('/petugas/beranda'));
            }
        } else {

            echo '<script>
            alert("Username atau Password Salah!");
            window.location="' . base_url('home') . '"
            </script>';

            // // $this->session->set_flashdata('error', 'Username atau password salah');

            // $this->session->set_flashdata('error', 'Username atau Password salah');
            return view('home');
            //  session()->setFlashdata("error", "Username atau password salah");
            //  return redirect()->to(base_url('/home'));


        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('/petugas/login'));
    }
}