<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

    public function index()
    {
        $dados = array(
            "title" => "Sign-up - MBR",
            "nav_active" => "8",
            "class" => "act"
            );

        //$this->load->view('header',$dados);
        $this->load->view('sign-up');
        //$this->load->view('footer');
        
    }

    
}