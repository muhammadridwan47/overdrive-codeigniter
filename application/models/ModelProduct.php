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
}
