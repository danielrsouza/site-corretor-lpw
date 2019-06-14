<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Agenda extends CI_Controller{

    public function cadastrar(){
        //busca no banco o cliente para ser escolhido.
        $clientesDisponiveis = $this->Agenda_model->marcarCliente();
        $dados = array(
            "clienteDisponivel" => $clientesDisponiveis
        );

        //Renderiza as Views
        $this->load->view("templates/header.php");
        $this->load->view("templates/menu.php");
        $this->load->view("agenda/cadastraAgenda.php", $dados);
        $this->load->view("templates/footer.php");
    }

    public function cadastrarAction(){
        //Recebe os dados
        $compromisso = array(
            "assunto" => $this->input->post("assunto"),
            "data" => $this->input->post("data"),
            "horario" => $this->input->post("horario"),
            "codcliente" => $this->input->post('codcliente')
        );

        //Insere o compromisso
        $this->Agenda_model->cadastrarCompromisso($compromisso);

        //Redirect
        redirect(base_url("agenda/listar"));
        }

        public function listar(){
            //Busca Agenda. 
            $compromisso = $this->Agenda_model->buscarAgenda();
    
            //Insere a agenda dentro de um array que vai para view.
            $dados = array(
                "agenda" => $compromisso
            );
    
            //Renderiza a página listagem de agenda.
            $this->load->view('templates/header.php');
            $this->load->view('templates/menu.php');
            $this->load->view("agenda/listaAgenda.php", $dados);
            $this->load->view('templates/footer.php');
        }

        public function editar($id){

            //Busca no Banco
            $clientes = $this->Clientes_model->listaClientes();
            //Busca no Banco
            $compromissos = $this->Agenda_model->editaCompromisso($id);
    
            //Coloca o retorno do banco dentro do array dados que vai para view.
            $dados = array(
                "compromissos" => $compromissos,
                "clientes" => $clientes
            );
    
            //Renderiza a página de edição com os dados atuais.
            $this->load->view('templates/header.php');
            $this->load->view('templates/menu.php');
            $this->load->view("agenda/editaAgenda.php", $dados);
            $this->load->view('templates/footer.php');
        }

        public function editarAgendaAction(){
            // Recebe os dados atualizados do imovel.
            $compromisso = array(
                "assunto" => $this->input->post("assunto"),
                "data" => $this->input->post("data"),
                "horario" => $this->input->post("horario"),
                "codcliente" => $this->input->post('codcliente')
            );
            //Insere os dados atualizado no banco.
            $this->Agenda_model->insereCompromissoEditado($compromisso);
    
            //renderiza a página de lista de agenda.
            redirect(base_url('agenda/listar'));
        }
    
        public function excluir($id)
        {
            //Deleta do Banco o cliente com determinado ID.
            $this->Agenda_model->deletaCompromisso($id);   
            
            //renderiza a página de lista de clientes.
            redirect(base_url('agenda/listar'));
        }
    
}