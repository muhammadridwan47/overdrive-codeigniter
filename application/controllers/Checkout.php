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
        if($search = $this->input->get('search', TRUE)) {
            $allProduct = $this->ModelCheckout->getAllCheckoutBySearch($search)->result_array();
        } else {
            $allProduct = $this->ModelCheckout->getAllCheckout()->result_array();
        }
        $data['products']  = $allProduct;
        $this->load->view('templates/header');
        $this->load->view('checkout/index', $data);
        $this->load->view('templates/footer');
    }
}
