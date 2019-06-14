<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller{

    public function index(){
        $cards = $this->Site_model->listaImoveis();
        $dados = array(
            "card" => $cards
        );
        $this->load->view("site/index.php",$dados);
    }


}