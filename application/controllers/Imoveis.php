<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Imoveis extends CI_Controller{


    public function listar(){
        //Busca todos os imoveis no banco
        $imoveis = $this->Imoveis_model->listaImoveis(); 

        // Transforma os dados do banco num array.
        $dados = array(
            "imoveis" => $imoveis
        );
    
        //Renderiza as paginas 
        $this->load->view("templates/header.php");
        $this->load->view("templates/menu.php");
        $this->load->view("imoveis/listaImoveis.php", $dados);
        $this->load->view("templates/footer.php");
    }
    public function cadastrar(){
        //renderiza as páginas 
        $this->load->view("templates/header.php");
        $this->load->view("templates/menu.php");
        $this->load->view("imoveis/cadastroImoveis.php");
        $this->load->view("templates/footer.php");
    }

    public function cadastraImoveisAction(){

        $config['upload_path']  = FCPATH.'public/imgsImoveis';
        //Tipos de ficheiros suportados. * Todos os ficheiros
        $config['allowed_types']        = 'gif|jpg|png';
        //Tamanho máximo do ficheiro
        $config['max_size']             = 1024;
        //Nome do ficheiro é encriptado
        $config['encrypt_name'] = TRUE;

        $this->load->library("upload",$config);
        $this->upload->initialize($config);
        
        if($this->upload->do_upload('image')){
            $image_data = $this->upload->data();
            $config['image_library'] = 'gd2';
            $config['source_image'] = $image_data['full_path'];
            $config['maintain_ratio'] = TRUE;
            $config['width'] = 500;
            $config['height'] = 500;
            $nome_arquivo = $image_data["file_name"];

            $imoveis = array(
                "nome" => $this->input->post('nome'),
                "valor" => $this->input->post('valor'),
                "dormitorios" => $this->input->post('dormitorios'),
                "descricao" => $this->input->post('descricao'),
                "image" => $nome_arquivo
            );
            //Busca no Banco e retorna
            $this->Imoveis_model->insereImovel($imoveis);
                    
        }

            redirect(base_url().'imoveis/listar');
    
    }

    public function editar($id){

        //Busca no banco.
        $imoveis = $this->Imoveis_model->editaImovel($id);

        //Coloca o retorno do banco dentro do array dados que vai para view.
        $dados = array(
            "imoveis" => $imoveis
        );

        //Renderiza a página de edição com os dados atuais.
        $this->load->view('templates/header.php');
        $this->load->view('templates/menu.php');
        $this->load->view("imoveis/editaImoveis.php", $dados);
        $this->load->view('templates/footer.php');
    }

    public function editarImovelAction(){
        // Recebe os dados atualizados do imovel
        $imovel = array(
            "id" => $this->input->post('id'),
            "nome" => $this->input->post('nome'),
            "valor" => $this->input->post('valor'),
            "dormitorios" => $this->input->post('dormitorios'),
            "descricao" => $this->input->post('descricao')
        );
        //Insere os dados atualizado no banco.
        $this->Imoveis_model->insereImovelEditado($imovel);

        //renderiza a página de lista de imoveis
        redirect(base_url().'imoveis/listar');
    }

    public function excluir($id)
    {
        //Deleta.
        $this->Imoveis_model->deletaImovel($id);   
        
        //renderiza a página de lista de imoveis.
        redirect(base_url().'imoveis/listar');
    }

}