<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->pastaPagina = "post";
    }

    public function index()
    {
        $this->pagina = "post-listar";
        $this->exibirPagina();
    }

    public function cadastrar()
    {
        $this->pagina = "post-form";
        $this->exibirPagina();
    }
    
    public function categorias(){
        $this->pagina = "categoria-listar";
        $this->exibirPagina();
    }
    
    public function categoria(){
        $this->pagina = "categoria-editar";
        $this->exibirPagina();
    }
    
    public function editar(){
        $this->pagina = "post-form";
        $this->exibirPagina();
    }
}
