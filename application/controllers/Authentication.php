<?php
class Authentication extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        if ($this->session->userdata('email')) {
            redirect('home');
        }
        $this->form_validation->set_rules(
            'email',
            'Alamat Email',
            'required|trim|valid_email',
            [
                'required' => 'Email Harus diisi!!',
                'valid_email' => 'Email Tidak Benar!!'
            ]
        );
        $this->form_validation->set_rules(
            'password',
            'Password',
            'required|trim',
            [
                'required' => 'Password Harus diisi'
            ]
        );
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header');
            $this->load->view('authentication/login');
            $this->load->view('templates/footer');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email',true);
        $password = $this->input->post('password', true);
        $user = $this->ModelUser->checkUser(['email' => $email])->row_array();
        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = ['email' => $user['email']];
                $this->session->set_userdata($data);
                redirect('home');
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">Password Salah!!</div>');
                redirect('authentication');
            }
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">Email tidak terdaftar!!</div>');
            redirect('authentication');
        }
    }


    public function register()
    {
        $this->form_validation->set_rules(
            'name',
            'Nama',
            'required|trim',
            [
                'required' => 'Nama Harus diisi!!',
            ]
        );
        $this->form_validation->set_rules(
            'email',
            'Alamat Email',
            'required|trim|valid_email',
            [
                'required' => 'Email Harus diisi!!',
                'valid_email' => 'Email Tidak Benar!!'
            ]
        );
        $this->form_validation->set_rules(
            'password',
            'Password',
            'required|trim',
            [
                'required' => 'Password Harus diisi'
            ]
        );
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header');
            $this->load->view('authentication/register');
            $this->load->view('templates/footer');
        } else {
            $this->_register();
        }
    }


    private function _register()
    {
        $name = $this->input->post('name',true);
        $email = $this->input->post('email',true);
        $password = $this->input->post('password', true);
        $data = [
            'nama' => htmlspecialchars($name),
            'email' => htmlspecialchars($email),
            'password' => password_hash($password,PASSWORD_DEFAULT)
        ];
        $this->ModelUser->register($data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Berhasil registrasi</div>');
        redirect('authentication/register');
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        redirect('Authentication');
    }
    
    
}
