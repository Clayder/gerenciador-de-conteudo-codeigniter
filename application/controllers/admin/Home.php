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
        $this->load->model("admin/pagina/Pagina_model", "pagina_model");
        $this->load->model("admin/configuracao/Login_model", "login");
        $this->load->model("admin/produto/Produto_model", "produto");
        $this->load->model("admin/mensagem/Mensagem_model", "mensagem");
        $this->conteudo['qtdPaginas'] = $this->pagina_model->count_all('pagina');
        $this->conteudo['qtdProdutos'] = $this->produto->count_all('produto');
        $this->conteudo['qtdUsuarios'] = $this->login->count_all('usuarios');
        $this->conteudo['qtdMensagens'] = $this->login->count_all('mensagem');
        $this->pagina = "home";
        $this->exibirPagina();
    }

}
