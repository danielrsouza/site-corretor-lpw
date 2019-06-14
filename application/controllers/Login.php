<?php defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller
{
    public function index(){
        //Renderiza as Views
        $this->load->view("templates/header.php"); 
        $this->load->view("login/login.php"); 
    }

    public function autenticaLogin(){
        //Recebe usuário e senha vindo do formulario
        $usuario = $this->input->post('usuario');
        $senha = $this->input->post('senha');

        //Verifica no banco a existência do user.
        $user = $this->Admin_model->verificaLogin($usuario, $senha);

        
        // Verifica se está logado e redirecionada para a área admin ou para o LOGIN novamente.
        if($user){
            //Seta uma sessão para o admin.
            $this->session->set_userdata(array('usuario' => $user));
            redirect(base_url("clientes/listar"));
        }else{
            redirect(base_url("login"));
        }
    }
}