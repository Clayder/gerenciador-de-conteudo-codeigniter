<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empresa extends MY_Controller
{
    const MS_CADAST      = "Edição realizada com sucesso.";
    const MS_ERRO_CADAST = "Erro ao editar.";

    function __construct()
    {
        parent::__construct();
        $this->pastaPagina = "empresa";
        $this->load->model("admin/empresa/empresa_model");
    }

    public function index()
    {
        $this->initScript();
        $this->conteudo = $this->empresa_model->get('empresa', 'id', 1);
        $this->pagina   = "empresa";
        $this->exibirPagina();
    }

    public function editar()
    {
        if ($this->input->method() === 'post') {
            $this->empresa_model->editar('empresa', 'id', 1,
                $this->input->post());
             $this->mensagem(self::MS_CADAST, self::MS_ERRO_CADAST,
                "empresa", true);
        } else {
            redirect_admin('empresa');
        }
    }

    public function initScript()
    {
        $this->footer['script'][] = "<script src='".base_url('assets/admin/app/plugins/via-cep.js')."'></script>";
    }
}