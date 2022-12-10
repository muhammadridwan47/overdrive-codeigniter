<?php 

function isAdmin()
{
    $ci = get_instance();
    $userAccess = $ci->db->get_where('user', [
        'email' => $ci->session->userdata('email'),
        'role' => 'admin'
    ]);
    return $userAccess->num_rows() > 0;
}
