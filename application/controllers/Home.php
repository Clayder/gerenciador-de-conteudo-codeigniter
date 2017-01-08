<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
    private $conteudo;

    function __construct()
    {
        parent::__construct();
        $this->setCookie();
        $this->conteudo = array();
    }

    public function index()
    {
        $this->load->model("admin/empresa/Empresa_model", 'empresa');
        $this->load->model("admin/pagina/Pagina_model", 'pagina');
        $this->load->model("admin/produto/Produto_model", 'produto');
        $this->conteudo['empresa']  = $this->empresa->get('empresa', 'id', 1);
        $this->conteudo['paginas']  = $this->pagina->getAll('pagina',
            array('id', 'ASC'));
        $this->conteudo['produtos'] = $this->produto->getAll('produto',
            array('titulo', 'ASC'));
        $this->load->view('site/home', $this->conteudo);
    }

    private function setCookie()
    {
        //  cookie irá durar três dias
        setcookie('acesso', date('d/m/Y - H:i-s'), (time() + (3 * 24 * 3600)));
    }

    public function mensagem()
    {
        if ($this->input->method() === 'post') {
            $this->load->model("admin/mensagem/Mensagem_model", 'mensagem_model');
            $dados         = $this->input->post();
            $dados['date'] = date('Y-m-d');
            $dados['time'] = date('H:m:s');
            $result        = $this->mensagem_model->add('mensagem', $dados);
            if ($result) {
                $from = array(
                    'nome' => $this->input->post('nome', true),
                    'email' => $this->input->post('email', true)
                );
                enviar_email($from, 'peterclayder@gmail.com', 'site',
                    $this->input->post('mensagem', true));
            }
            $this->redirecionamento("Mensagem enviada",
                "Erro ao enviar mensagem", 'home/#contato', $result);
        } else {
            redirect('home');
        }
    }

    private function redirecionamento($msn, $msnErro, $redirect,
                                      $retornoFuncao = true)
    {
        $msnCadastro = mensagemAfirmacao($msn);
        if (!$retornoFuncao) {
            $msnCadastro = mensagemErro($msnErro);
        }
        $this->session->set_flashdata('mensagem', $msnCadastro);
        redirect($redirect);
    }
}