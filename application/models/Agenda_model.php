<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Agenda_model extends CI_Model{
    
    public function marcarCliente(){
        return $this->db->get('clientes')->result_array();
    }
    public function buscarTodosCompromissos(){
        return $this->db->get("agenda")->result_array();
    }
    
    public function cadastrarCompromisso($compromisso){
        $this->db->insert("agenda", $compromisso);
    }

    public function buscarAgenda(){
        $this->db->select("*");
        $this->db->from("agenda");
        $this->db->join('clientes', 'clientes.id = agenda.codcliente', 'inner');
        return $this->db->get()->result_array();
    }
    public function editaCompromisso($id){
        $this->db->where('id', $id);
        return $this->db->get('agenda')->result_array();
    }
    public function insereCompromissoEditado($compromisso){
        $this->db->where('id', $compromisso['id']);
        $this->db->set($compromisso);
        $this->db->update('agenda');
    }

    public function deletaCompromisso($id){
        $this->db->where('id', $id);
        $this->db->delete('clientes');
    }
}