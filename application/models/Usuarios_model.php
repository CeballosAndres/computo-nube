<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Usuarios_model extends CI_Model
{

    public function get_usuarios()
    {
        $query = $this->db->get('Users');
        return $query->result_array();
    }
}