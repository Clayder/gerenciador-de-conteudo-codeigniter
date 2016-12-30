<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->pastaPagina = "usuario";
    }

    public function index()
    {
        $this->pagina = "usuario-listar";
        $this->exibirPagina();
    }

    public function cadastrar()
    {
        $this->pagina = "usuario-form";
        $this->exibirPagina();
    }
    
        public function perfil()
    {
        $this->pagina = "usuario-perfil";
        $this->exibirPagina();
    }
    
    

}
