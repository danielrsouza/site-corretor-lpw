<?php defined('BASEPATH') OR exit('No direct script access allowed');

class clientes extends CI_Controller
{
    public function cadastrar(){

        //Carrega a página de cadastro.
        $this->load->view('templates/header.php');
        $this->load->view('templates/menu.php');
        $this->load->view('clientes/cadastraCliente.php');
        $this->load->view('templates/footer.php');
    }

    public function cadastraClienteAction(){

        //Recebe os dados do formulário cadastro.
        $cliente = array(
            "nome" => $this->input->post('nome'),
            "telefone" => $this->input->post('telefone'),
            "outrotelefone" => $this->input->post('outrotelefone'),
            "email" => $this->input->post('email'),
            "descricao" => $this->input->post('descricao')
        );

        //Insere no banco e redirecionada para a pagina de cadastro.
        $this->Clientes_model->insereCliente($cliente);
        redirect(base_url().'clientes/cadastrar');
    }

    public function listar(){
        //Busca os clientes do banco. 
        $clientes = $this->Clientes_model->listaClientes();

        //Insere os clientes dentro de um array que vai para view.
        $dados = array(
            "clientes" => $clientes
        );

        //Renderiza a página listagem de clientes.
        $this->load->view('templates/header.php');
        $this->load->view('templates/menu.php');
        $this->load->view("clientes/listaCliente.php", $dados);
        $this->load->view('templates/footer.php');
    }

    public function editar($id){

        //Edita cliente com determinado ID.
        $cliente = $this->Clientes_model->editaCliente($id);

        //Coloca o retorno do banco dentro do array dados que vai para view.
        $dados = array(
            "cliente" => $cliente
        );

        //Renderiza a página de edição com os dados atuais.
        $this->load->view('templates/header.php');
        $this->load->view('templates/menu.php');
        $this->load->view("clientes/editaCliente.php", $dados);
        $this->load->view('templates/footer.php');
    }

    public function editarClienteAction(){
        // Recebe os dados atualizados do cliente.
        $cliente = array(
            "id" => $this->input->post('id'),
            "nome" => $this->input->post('nome'),
            "telefone" => $this->input->post('telefone'),
            "outrotelefone" => $this->input->post('outrotelefone'),
            "email" => $this->input->post('email'),
            "descricao" => $this->input->post('descricao')
        );
        //Insere os dados atualizado no banco.
        $this->Clientes_model->insereClienteEditado($cliente);

        //renderiza a página de lista de clientes.
        redirect(base_url().'clientes/listar');
    }

    public function excluir($id)
    {
        //Deleta do Banco o cliente com determinado ID.
        $this->Clientes_model->deletaCliente($id);   
        
        //renderiza a página de lista de clientes.
        redirect(base_url('clientes/listar'));
    }
}