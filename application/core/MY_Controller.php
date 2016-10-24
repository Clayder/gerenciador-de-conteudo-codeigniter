<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    protected $conteudo;
    protected $pastaPagina;
    protected $header;
    protected $footer;
    protected $sidebar;
    protected $pagina;

    public function __construct() {
        parent::__construct();
        $this->header = array();
        $this->sidebar = array();
        $this->conteudo = array();
        $this->footer = array();
    }

    protected function exibirPagina() {
        $this->load->view('admin/componente/header', $this->header);
        $this->load->view('admin/'.$this->pastaPagina.'/'.$this->pagina, $this->conteudo);
        $this->load->view('admin/componente/footer', $this->footer);
    }

}
