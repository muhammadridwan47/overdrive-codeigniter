<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ModelUser extends CI_Model
{
    public function register($data = null)
    {
        $this->db->insert('user', $data);
    }
    public function checkUser($where = null)
    {
        return $this->db->get_where('user', $where);
    }
    public function getUserWhere($where = null)
    {
        return $this->db->get_where('user', $where);
    }
}
