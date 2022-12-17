<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ModelCheckout extends CI_Model
{
    public function getAllCheckout()
    {
        $this->db->select('*');
        $this->db->from('checkout');
        $this->db->join('produk', 'produk.id_produk = checkout.id_produk');
        return $this->db->get();
    }
    public function getAllCheckoutBySearch($search)
    {
        $this->db->like('nama_produk', $search);
        $this->db->from('checkout');
        $this->db->join('produk', 'produk.id_produk = checkout.id_produk');
        return $this->db->get();
    }
}
