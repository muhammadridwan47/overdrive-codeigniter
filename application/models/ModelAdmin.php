<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ModelAdmin extends CI_Model
{
    public function getAllProduct()
    {
        $this->db->select('*');
        $this->db->from('produk');
        return $this->db->get();
    }

    public function deleteProductById($idProduct)
    {
        $this->db->delete('produk', ['id_produk' => $idProduct]);
    }

    public function createProduct($data)
    {
        $this->db->insert('produk', $data);
    }
    

    public function getProductById($idProduct = null)
    {
        return $this->db->get_where('produk',['id_produk' => $idProduct])->row_array();
    }
}
