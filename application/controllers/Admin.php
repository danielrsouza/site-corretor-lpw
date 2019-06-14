<?php defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller
{
    public function index(){
        $this->load->helper("url");
        $this->load->view('templates/header.php');
        $this->load->view('templates/menu.php');
        $this->load->view('admin/admin.php');
        $this->load->view('templates/footer.php');
    }

    public function sessionDestroy(){
        $this->session->unset_userdata('usuario');

        redirect(base_url("login"));
    }

}