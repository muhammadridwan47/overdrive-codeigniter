<?php
class Checkout extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if(!isAdmin()) redirect('home');
    }

    public function index()
    {
        $data['products']  = $this->ModelCheckout->getAllCheckout()->result_array();
        $this->load->view('templates/header');
        $this->load->view('checkout/index', $data);
        $this->load->view('templates/footer');
    }
}
