<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/configuracao/Login_model', 'login');
    }

    public function index()
    {
        $this->dados  = array();
        $this->pagina = "login";
        $this->paginas();
    }
    /*
     * Recebe o conjunto de paginas
     */

    public function paginas()
    {
        $this->load->view('admin/configuracao/'.$this->pagina, $this->dados);
    }

    public function validar()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $this->form_validation->set_rules('email', 'E-mail',
                'required|valid_email');
            $this->form_validation->set_rules('senha', 'senha', 'required');
            if ($this->form_validation->run() == FALSE) {
                $this->pagina = "login";
                $this->paginas();
            } else {
                $dados = array(
                    'email' => $this->input->post('email'),
                    'senha' => $this->input->post('senha'),
                );

                $login = $this->login->login($dados);

                if ($login['status']) {
                    redirect_admin('home');
                } else {
                    $this->dados['erroLogin'] = mensagemErro($login['mensagem']);
                    $this->pagina             = "login";
                    $this->paginas();
                }
            }
        } else {
            redirect('login');
        }
    }

    public function logout()
    {
        $this->login->logout();
    }
}