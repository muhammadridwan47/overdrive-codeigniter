<?php
class Home extends CI_Controller
{
    public function index()
    {
        $allProduct = $this->ModelProduct->getAllProduct()->result_array();
        $data = ['products' => $allProduct];
        $this->load->view('templates/header');
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }
}
