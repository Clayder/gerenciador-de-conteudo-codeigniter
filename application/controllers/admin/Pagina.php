<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagina extends MY_Controller
{
    const TB_CATEGORIA        = 'categoria-pagina';
    const TB_PAGINA           = 'pagina';
    const ID                  = 'id';
    const TB_PAGINA_CATEGORIA = 'pagina-categoria';
    const MS_CADAST           = "Cadastro realizado com sucesso.";
    const MS_ERRO_CADAST      = "Erro ao cadastrar.";
    const MS_EXCLUIR          = "Excluído com sucesso.";
    const MS_ERRO_EXCLUIR     = "Erro ao excluír.";

    function __construct()
    {
        parent::__construct();
        $this->pastaPagina = "pagina";
        $this->load->model("admin/pagina/Pagina_model");
    }

    public function index()
    {
        $q     = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));

        if ($q <> '') {
            $config['base_url']  = base_url_admin().'pagina?q='.urlencode($q);
            $config['first_url'] = base_url_admin().'pagina?q='.urlencode($q);
        } else {
            $config['base_url']  = base_url_admin().'pagina';
            $config['first_url'] = base_url_admin().'pagina';
        }

        $config['per_page']          = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows']        = $this->Pagina_model->total_rows($q);
        $pagina                      = $this->Pagina_model->get_limit_data($config['per_page'],
            $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $this->conteudo = array(
            'pagina_data' => $pagina,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );

        $this->pagina = "pagina-listar";
        $this->exibirPagina();
    }

    public function cadastrar()
    {
        $this->initScriptPagina();
        $this->pagina = "pagina-form";
        $this->exibirPagina();
    }

    public function cadastro()
    {
        if ($this->input->method() === "post") {
            $this->form_validation->set_rules('titulo', 'titulo', 'required');
            if ($this->form_validation->run() == FALSE) {
                $this->cadastrar();
            } else {
                /*
                  $teste          = array(
                  'titulo' => 'asasasa',
                  'texto' => 'sasasasasa',
                  'resumo' => 'sasasasa',
                  'slug' => 'sasasasa',
                  'status' => 'Público',
                  'imagem' => 'http://localhost/www/peterdev/sige-ci/assets/uploads/source/Captura%20de%20tela%20de%202016-10-10%2008-50-47.png',
                  );
                  $testeCategoria = array(
                  0 => 91,
                  1 => 85,
                  2 => 73,
                  3 => 90,
                  );
                 * */

                $dadosPagina    = array(
                    'titulo' => $this->input->post('titulo', TRUE),
                    'texto' => $this->input->post('texto', TRUE),
                    'resumo' => $this->input->post('resumo', TRUE),
                    'slug' => $this->input->post('slug', TRUE),
                    'status' => $this->input->post('status', TRUE),
                    'imagem' => $this->input->post('imagem', TRUE),
                );
                $dadosCategoria = $this->input->post('categoria', TRUE);
                $return = $this->Pagina_model->add($dadosPagina, $dadosCategoria);
                $this->mensagem(self::MS_CADAST, self::MS_ERRO_CADAST, "pagina", $return);
            }
        }
    }

    private function mensagem($msn, $msnErro, $redirect, $retornoFuncao = null)
    {
        $msnCadastro = mensagemAfirmacao($msn);
        if (!$retornoFuncao && $retornoFuncao != null) {
            $msnCadastro = mensagemErro($msnErro);
        }
        $this->session->set_flashdata('mensagem', $msnCadastro);
        redirect_admin($redirect);
    }

    public function categorias()
    {
        $this->conteudo['linkCategoria'] = base_url_admin('pagina/categoria/');
        $this->initScriptCategoria();
        $this->pagina                    = "categoria-listar";
        $this->exibirPagina();
    }

    public function categoria($id = NULL)
    {
        if ($id != NULL) {
            $this->initScriptCategoria();
            $this->load->model('admin/pagina/Categoria_model', 'categoria');
            $this->conteudo                   = $this->categoria->getCategoria($id);
            $this->conteudo['linkAcaoEdicao'] = base_url_admin('pagina/categoriaEditar');
            $this->conteudo['categorias']     = $this->categoria->getFuturosPaisByCateg($id);
            $this->initScriptCategoria();
            $this->pagina                     = "categoria-editar";
            $this->exibirPagina();
        } else {
            redirect(base_urlAdmin());
        }
    }

    public function categoriaCadastrar()
    {
        if ($this->input->method() === "post") {
            $this->load->model('admin/pagina/Categoria_model', 'categoria');
            $dados = json_decode($this->input->raw_input_stream, true);

            if (isset($dados['slug'])) {
                $dados['slug'] = url_amigavel($dados['slug']);
            } else {
                $dados['slug'] = url_amigavel($dados['nome']);
            }
            echo json_encode($this->categoria->add(self::TB_CATEGORIA, $dados));
        } else {
            redirect(base_urlAdmin());
        }
    }

    public function categoriaExcluir($id = NULL)
    {
        if ($this->input->method() === 'delete') {
            $this->load->model('admin/pagina/Categoria_model', 'categoria');
            echo $this->categoria->excluirCategoria($id);
        } else {
            echo "Você não tem acesso";
        }
    }

    public function categoriaEditar()
    {
        if ($this->input->method() === "put") {
            $this->load->model('admin/pagina/Categoria_model', 'categoria');
            $categoria = json_decode($this->input->raw_input_stream, true);
            $slug      = $categoria['nome'];
            if ($categoria['slug'] !== "") {
                $slug = $categoria['slug'];
            }
            $dados = array(
                'nome' => $categoria['nome'],
                'slug' => url_amigavel($slug),
                'descricao' => $categoria['descricao'],
                'pai' => $categoria['pai'],
            );
            echo json_encode($this->categoria->editar(self::TB_CATEGORIA, 'id',
                    $categoria['id'], $dados));
        } else {
            redirect(base_url_admin());
        }
    }

    public function getCategorias()
    {
        $this->load->model('admin/pagina/Categoria_model', 'categoria');
        echo json_encode($this->categoria->getAll('categoria-pagina',
                array('nome', 'ASC')));
    }

    public function excluir()
    {
        if ($this->input->method() === "post") {
            $id = (integer) $this->input->post('id', true);
            $return = $this->Pagina_model->excluir(self::TB_PAGINA, self::ID, $id);
            $this->mensagem(self::MS_EXCLUIR, self::MS_ERRO_EXCLUIR, "pagina", $return);
        } else {
            redirect_admin('pagina');
        }
    }

    public function exibir($id){
        //pre($this->Pagina_model->getPagina($id));
        $this->pagina = "pagina-exibir";
        $this->exibirPagina();
    }

    public function initScriptCategoria()
    {
        $this->footer['script'][] = "<script src='".base_url('assets/admin/app/service/categoria-pagina-service.js')."'></script>";
        $this->footer['script'][] = "<script src='".base_url('assets/admin/app/controller/pagina/categoria.js')."'></script>";
    }

    public function initScriptPagina()
    {
        $this->footer['script'][] = "<script src='".base_url('assets/admin/app/service/categoria-pagina-service.js')."'></script>";
        $this->footer['script'][] = "<script src='".base_url('assets/admin/app/controller/pagina/pagina.js')."'></script>";
    }
}