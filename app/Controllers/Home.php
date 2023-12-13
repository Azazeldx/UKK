<?php

namespace App\Controllers;

use App\Models\MasyarakatModel;
use App\Models\PenggunaModel;
use App\Models\PetugasModel;

class Home extends BaseController
{
    protected $MasyarakatModel;
    protected $PenggunaModel;
    protected $PetugasModel;

    public function __construct()
    {
        $this->MasyarakatModel = new MasyarakatModel();
        $this->PenggunaModel = new PenggunaModel();
        $this->PetugasModel = new PetugasModel();
    }

    public function index()
    {
        return view('welcome_message');
    }

    public function login()
    {
        $session = session();
        $username = $this->request->getVar('username');
        $password = md5($this->request->getVar('password'));
        $validUserMasyarakat = $this->PenggunaModel->login($username, $password, 'kasta_renda');
        $validUserPetugas = $this->PenggunaModel->login($username, $password, 'kasta_tinggi');

        if ($validUserMasyarakat) {
            $ses_masyarakat = [
                'id_masyarakat' => $validUserMasyarakat->id_masyarakat,
                'nama' => $validUserMasyarakat->nama,
                'username' => $validUserMasyarakat->username,
                'telp' => $validUserMasyarakat->telp,
                'logged_in' => TRUE,
                'role' => $validUserMasyarakat->role
            ];

            $session->set($ses_masyarakat);

            return redirect()->to(base_url('/masyarakat/beranda'));
        } else if($validUserPetugas) {
            $level = $validUserPetugas->role;
            if ($level === 'admin') {
                $ses_admin = [
                    'username' => $validUserPetugas->username,
                    'nama_petugas' => $validUserPetugas->nama_petugas,
                    'level' => $validUserPetugas->role,
                    'logged_in' => TRUE,
                    'id_petugas' => $validUserPetugas->id_petugas
                ];
                $session->set($ses_admin);
                return redirect()->to(base_url('/admin/beranda'));
            } else {
                $ses_petugas = [
                    'username' => $validUserPetugas->username,
                    'nama_petugas' => $validUserPetugas->nama_petugas,
                    'level' => $validUserPetugas->role,
                    'logged_in' => TRUE,
                    'id_petugas' => $validUserPetugas->id_petugas
                ];
                $session->set($ses_petugas);
                return redirect()->to(base_url('/petugas/beranda'));
            }
        } else {
            echo '<script>
            alert("Username atau Password Salah!");
            window.location="' . base_url('home') . '"
            </script>';
            return view('home');
        }
    }
        
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('/home'));
    }
}