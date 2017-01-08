<?php

class Login_model extends MY_Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function login($dados)
    {
        $this->db->where('email', $dados['email']);
        $query = $this->db->get('usuarios');
        if ($query->num_rows() == 1) {
            $senha = $query->row()->senha;
            if ($senha === $dados['senha']) {
                $sessionLogin = array('id' => $query->row()->id, 'nome' => $query->row()->nome,
                    'logado' => TRUE);
                $this->session->set_userdata($sessionLogin);
                $status       = TRUE;
                $mensagem     = "Usuário logado";
            } else {
                $status   = FALSE;
                $mensagem = "<strong> Senha incorreta. </strong> Digite seu e-mail e senha novamente.";
            }
        } else {
            $status   = FALSE;
            $mensagem = "O email <strong>".$dados['email']."</strong> não foi encontrado";
        }
        $result = array(
            'status' => $status,
            'mensagem' => $mensagem
        );
        return $result;
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect_admin('login');
    }
}