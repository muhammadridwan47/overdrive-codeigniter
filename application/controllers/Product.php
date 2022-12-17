<?php
class Product extends CI_Controller
{
    public function index()
    {
        if($search = $this->input->get('search', TRUE)) {
            $allProduct = $this->ModelProduct->getAllProductBySearch($search)->result_array();
        } else {
            $allProduct = $this->ModelProduct->getAllProduct()->result_array();
        }
        $data = ['products' => $allProduct];
        $this->load->view('templates/header');
        $this->load->view('product/index', $data);
        $this->load->view('templates/footer');
    }

    public function checkout($idProduct)
    {
        if (!$this->session->userdata('email')) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message text-center" role="alert">Anda harus login terlebih dahulu sebelum menghubungi penjual</div>');
            redirect('authentication');
        } else {
            $result = $this->ModelProduct->getProductCheckoutById($idProduct);
            if($result) {
                $this->ModelProduct->setCheckout($idProduct, $result['click']);
            } else {
                $this->ModelProduct->insertCheckout($idProduct);
            }
            redirect('https://wa.me/6281217637240');
        }
    }
}
