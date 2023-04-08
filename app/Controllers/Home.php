<?php

namespace App\Controllers;

use App\Models\MasyarakatModel;

class Home extends BaseController
{
    protected $MasyarakatModel;

    public function __construct()
    {
        $this->MasyarakatModel = new MasyarakatModel();
    }

    public function index()
    {
        return view('welcome_message');
    }

    public function login()
    {
        $session = session();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $validUser = $this->MasyarakatModel->login($username, $password);

        if ($validUser) {
            $ses_masyarakat = [
                'nik' => $validUser->nik,
                'nama' => $validUser->nama,
                'username' => $validUser->username,
                'telp' => $validUser->telp,
                'logged_in' => TRUE,
            ];
            $session->set($ses_masyarakat);
            return redirect()->to(base_url('/masyarakat/beranda'));
        } else {

            echo '<script>
            alert("Username atau Password Salah!");
            window.location="' . base_url('home') . '"
            </script>';

            // // $this->session->set_flashdata('error', 'Username atau password salah');

            // $this->session->set_flashdata('error', 'Username atau Password salah');
            return $this->load->view('home');
            //  session()->setFlashdata("error", "Username atau password salah");
            //  return redirect()->to(base_url('/home'));


        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('/home'));
    }
}
