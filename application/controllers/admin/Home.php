<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->pastaPagina = "principal";
    }

    public function index()
    {
        $this->pagina = "home";
        $this->exibirPagina();
    }

}
