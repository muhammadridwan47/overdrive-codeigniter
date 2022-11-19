<?php
class Product extends CI_Controller
{
    public function index()
    {
        $allProduct = $this->ModelProduct->getAllProduct()->result_array();
        $data = ['products' => $allProduct];
        $this->load->view('templates/header');
        $this->load->view('product/index', $data);
        $this->load->view('templates/footer');
    }
}
