<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Site_model extends CI_Model{

    public function listaImoveis(){
        return $this->db->get("imoveis")->result_array();
    }

}