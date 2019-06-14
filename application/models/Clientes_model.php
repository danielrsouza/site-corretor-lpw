<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Clientes_model extends CI_Model{

    public function insereCliente($cliente){
        $this->db->insert("clientes", $cliente);
    }
    public function listaClientes(){
        return $this->db->get("clientes")->result_array();
    }
    public function editaCliente($id){
        $this->db->where('id', $id);
        $cliente = $this->db->get('clientes')->row_array();
        return $cliente;
    }
    public function insereClienteEditado($cliente){
        $this->db->where('id', $cliente['id']);
        $this->db->set($cliente);
        $this->db->update('clientes');
    }

    public function deletaCliente($id){
        $this->db->where('id', $id);
        $this->db->delete('clientes');
    }
}