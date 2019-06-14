<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model{

    public function verificaLogin($usuario, $senha){
        $this->db->where('usuario', $usuario);
        $this->db->where('senha', $senha);
        $usuario = $this->db->get("Admin")->row_array();
        return $usuario;
    }
}