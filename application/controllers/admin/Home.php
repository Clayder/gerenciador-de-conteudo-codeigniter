<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->pastaPagina = "componente";
    }

    public function index()
    {
        $this->pagina = "index";
        $this->exibirPagina();
    }

}
