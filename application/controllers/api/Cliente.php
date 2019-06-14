<?php
   
require APPPATH . 'libraries/REST_Controller.php';
     
class Cliente extends REST_Controller {
    
    public function __construct() {
       parent::__construct();
       $this->load->database();
    }
    
       
	public function index_get($id = 0)
	{
        if(!empty($id)){
            $data = $this->db->get_where("clientes", ['id' => $id])->row_array();
        }else{
            $data = $this->db->get("clientes")->result();
        }
     
        $this->response($data, REST_Controller::HTTP_OK);
	}
      
    public function index_post()
    {
        $cliente = array(
            "nome" => $this->input->post('nome'),
            "telefone" => $this->input->post('telefone'),
            "outrotelefone" => $this->input->post('outrotelefone'),
            "email" => $this->input->post('email'),
            "descricao" => $this->input->post('descricao')
        );
        $this->db->insert('clientes',$cliente);
     
        $this->response(['Cliente Inserido'], REST_Controller::HTTP_OK);
    } 
     

    public function index_put($id)
    {
        $cliente = array(
            "nome" => $this->input->post('nome'),
            "telefone" => $this->input->post('telefone'),
            "outrotelefone" => $this->input->post('outrotelefone'),
            "email" => $this->input->post('email'),
            "descricao" => $this->input->post('descricao')
        );
        $this->db->update('clientes', $cliente, array('id'=>$id));
     
        $this->response(['Cliente editado com sucesso..'], REST_Controller::HTTP_OK);
    }
     
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_delete($id)
    {
        $this->db->delete('clientes', array('id'=>$id));
       
        $this->response(['Cliente deletado com sucesso..'], REST_Controller::HTTP_OK);
    }
    	
}