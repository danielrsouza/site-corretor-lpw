<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Imoveis_model extends CI_Model{

    public function listaImoveis(){
        return $this->db->get("imoveis")->result_array();
    }
    public function insereImovel($imoveis){
        $this->db->insert("imoveis", $imoveis);
        $this->db->reset_query();
    }

    public function editaImovel($id){
        $this->db->where('id', $id);
        $imoveis = $this->db->get('imoveis')->row_array();
        return $imoveis;
    }

    public function insereImovelEditado($imovel){
        $this->db->where('id', $imovel['id']);
        $this->db->set($imovel);
        $this->db->update('imoveis');
    }

    public function deletaImovel($id){
        $this->db->where('id', $id);
        $this->db->delete('imoveis');
    }
}