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

    public function __construct()
    {
        parent::__construct();
        $this->init();
    }

    public function init()
    {
        $this->header = array('titulo'=> '');
        $this->sidebar = array();
        $this->conteudo = array();
        $this->footer['script'] = array();
    }

    protected function exibirPagina()
    {
        $this->parser->parse('admin/componente/header', $this->header);
        $this->parser->parse('admin/componente/sidebar', $this->sidebar);
        $this->parser->parse('admin/' . $this->pastaPagina . '/' . $this->pagina, $this->conteudo);
        $this->load->view('admin/componente/footer', $this->footer);
    }

}
