<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Google Classroom';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/footer');
    }
    public function tambah_akun()
    {
        $data['title'] = 'Google Classroom';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/main', $data);
        $this->load->view('templates/footer');
    }

    public function login_email()
    {
        $data['title'] = 'email';
        $this->form_validation->set_rules('email', 'Email', 'required');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('user/login', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'email' => $this->input->post('email')
            ];
            redirect('user/login_pass');
        }
    }
    public function login_pass()
    {
        $data['title'] = 'password';
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('user/login_pass', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'password' => $this->input->post('password')
            ];
            redirect('user/dashboard');
        }
    }
    public function dashboard()
    {
        $data['title'] = 'Kelas';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('user/dashboard', $data);
        $this->load->view('templates/footer');
    }
    public function postest()
    {
        $data['title'] = 'PRETEST';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar_user', $data);
        $this->load->view('user/postest', $data);
        $this->load->view('templates/footer');
    }
    public function tambah_file()
    {
        $data['title'] = 'POSTEST';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar_user', $data);
        $this->load->view('user/tambah_file', $data);
        $this->load->view('templates/footer');
    }
    public function selesai()
    {
        $data['title'] = 'POSTEST';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar_user', $data);
        $this->load->view('user/selesai', $data);
        $this->load->view('templates/footer');
    }
}
