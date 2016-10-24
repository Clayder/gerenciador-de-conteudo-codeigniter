<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pagina extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->pastaPagina = "pagina";
    }

    public function index()
    {
        $this->pagina = "pagina-listar";
        $this->exibirPagina();
    }

    public function cadastrar()
    {
        


        $this->pagina = "pagina-form";
        $this->exibirPagina();
    }

}
