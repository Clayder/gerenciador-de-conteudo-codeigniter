<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mensagem extends MY_Controller
{
    const MS_EXCLUIR      = "Excluído com sucesso.";
    const MS_ERRO_EXCLUIR = "Erro ao excluír.";

    function __construct()
    {
        parent::__construct();
        $this->pastaPagina = "mensagem";
        $this->load->model("admin/mensagem/Mensagem_model", 'mensagem_model');
    }

    public function index()
    {
        $this->pagina                = "mensagem-listar";
        $this->conteudo['mensagens'] = $this->mensagem_model->getAll('mensagem',
            array('id', 'DESC'));
        $this->exibirPagina();
    }

    public function responder($id = null)
    {
        if ($id != null){
            $id = (Integer)$id;
            $dados = $this->mensagem_model->get('mensagem', 'id', $id);
            if(count($dados) == 0){
                redirect_admin('mensagem');
            }
            $this->conteudo = $dados;
            $this->pagina = "mensagem-form";
            $this->exibirPagina();
        } else {
            redirect_admin('mensagem');
        }
    }

    public function excluir()
    {
        if ($this->input->method() === "post") {
            $return = $this->mensagem_model->excluir('mensagem', 'id',
                $this->input->post('id', true));
            $this->mensagem(self::MS_EXCLUIR, self::MS_ERRO_EXCLUIR, "mensagem",
                $return);
        } else {
            redirect_admin('mensagem');
        }
    }

     public function enviar()
    {
        if ($this->input->method() === "post") {
            $from = array(
                'nome' => 'Site',
                'email' => "peterclayder@gmail.com"
            );
            enviar_email($from, $this->input->post('email', true), 'site', $this->input->post('mensagem', true));
            $this->mensagem("Mensagem enviada", '', "mensagem/responder/".$this->input->post('id', true),
                true);

        } else {
            redirect_admin('mensagem');
        }
    }
}