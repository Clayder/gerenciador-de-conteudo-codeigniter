<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Comentario extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->pastaPagina = "comentario";
    }

    public function index()
    {
        $this->pagina = "comentario-listar";
        $this->exibirPagina();
    }

    public function responder()
    {
        $this->pagina = "comentario-form";
        $this->exibirPagina();
    }

}
