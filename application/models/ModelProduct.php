<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ModelProduct extends CI_Model
{
    public function getAllProduct()
    {
        $this->db->select('*');
        $this->db->from('produk');
        return $this->db->get();
    }

    public function getAllProductBySearch($search = '')
    {
        $this->db->from('produk');
        $this->db->like('nama_produk', $search);
        return $this->db->get();
    }

    public function getProductCheckoutById($idProduct = null)
    {
        return $this->db->get_where('checkout',['id_produk' => $idProduct])->row_array();
    }

    public function insertCheckout($idProduct)
    {
        $this->db->insert('checkout', ['id_produk' => $idProduct, 'click' => 1]);
    }

    public function setCheckout($idProduct, $click)
    {
        $this->db->set('click', $click + 1);
        $this->db->where('id_produk', $idProduct);
        $this->db->update('checkout');
    }
}
