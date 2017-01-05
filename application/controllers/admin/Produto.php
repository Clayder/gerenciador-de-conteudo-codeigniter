<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produto extends MY_Controller
{
    const TB_CATEGORIA        = 'categoria-produto';
    const TB_PRODUTO           = 'produto';
    const ID                  = 'id';
    const TB_PRODUTO_CATEGORIA = 'produto-categoria';
    const TB_CATEGORIA_PRODUTO = 'categoria-produto';
    const MS_CADAST           = "Cadastro realizado com sucesso.";
    const MS_ERRO_CADAST      = "Erro ao cadastrar.";
    const MS_EDICAO           = "Edição realizada com sucesso.";
    const MS_ERRO_EDICAO      = "Erro ao realizar a edição.";
    const MS_EXCLUIR          = "Excluído com sucesso.";
    const MS_ERRO_EXCLUIR     = "Erro ao excluír.";

    function __construct()
    {
        parent::__construct();
        $this->pastaPagina = "produto";
        $this->load->model("admin/produto/Produto_model", "Produto_model");
    }

    public function index()
    {
        $q     = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));

        if ($q <> '') {
            $config['base_url']  = base_url_admin().'produto?q='.urlencode($q);
            $config['first_url'] = base_url_admin().'produto?q='.urlencode($q);
        } else {
            $config['base_url']  = base_url_admin().'produto';
            $config['first_url'] = base_url_admin().'produto';
        }

        $config['per_page']          = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows']        = $this->Produto_model->total_rows($q);
        $produto                      = $this->Produto_model->get_limit_data($config['per_page'],
            $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $this->conteudo = array(
            'produtos' => $produto,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );

        $this->pagina = "produto-listar";
        $this->exibirPagina();
    }

    public function editar($id = null)
    {
        if ($id != null) {
            $this->initScriptProduto();
            $id    = (integer) $id;
            $dados = $this->Produto_model->getproduto($id);
            if (count($dados) == 0) {
                $this->mensagem('', 'Produto não encontrado', "produto", false);
            }
            $this->conteudo    = $dados;
            $categoriasIds     = array();
            $tamDadosCategoria = count($this->conteudo['categorias']);
            for ($i = 0; $i < $tamDadosCategoria; $i++) {
                $categoriasIds[] = $this->conteudo['categorias'][$i]['fkCategoria'];
            }
            $this->conteudo['categorias'] = $categoriasIds;
            // pre($this->conteudo);
            $this->pagina                 = "produto-editar";
            $this->exibirPagina();
        } else {
            redirect_admin('produto');
        }
    }

    public function edicao()
    {
        if ($this->input->method() === "post") {
            $id = $this->input->post('id');
            $this->form_validation->set_rules('titulo', 'titulo', 'required');
            if ($this->form_validation->run() == FALSE) {
                $this->editar($id);
            } else {
                $imagem      = $this->input->post('imagem', true);
                $slug = $this->input->post('slug', TRUE);
                $titulo = $this->input->post('titulo', TRUE);
                $dadosProduto = array(
                    'titulo' => $titulo,
                    'texto' => $this->input->post('texto', TRUE),
                    'slug' => ($slug != null)? url_amigavel($slug) : url_amigavel($titulo),
                    'status' => $this->input->post('status', TRUE),
                );
                if ($imagem != null) {
                    $dadosProduto['imagem'] = $imagem;
                }

                $dadosCategoria = $this->input->post('categoria', TRUE);
                $this->Produto_model->editarproduto($dadosProduto,
                    $dadosCategoria, $id);
                $this->mensagem(self::MS_EDICAO, self::MS_ERRO_EDICAO,
                    "produto/editar/$id", true);
            }
        } else {
            redirect_admin('produto');
        }
    }

    public function cadastrar()
    {
        $this->initScriptProduto();
        $this->pagina = "produto-form";
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

                $slug = $this->input->post('slug', TRUE);
                $titulo = $this->input->post('titulo', TRUE);
                $dados    = array(
                    'titulo' => $titulo,
                    'texto' => $this->input->post('texto', TRUE),
                    'slug' => ($slug != null)? url_amigavel($slug) : url_amigavel($titulo),
                    'status' => $this->input->post('status', TRUE),
                    'imagem' => $this->input->post('imagem', TRUE),
                );
                $dadosCategoria = $this->input->post('categoria', TRUE);
                $return         = $this->Produto_model->add($dados,
                    $dadosCategoria);
                $this->mensagem(self::MS_CADAST, self::MS_ERRO_CADAST, "produto",
                    $return);
            }
        }
    }

    private function mensagem($msn, $msnErro, $redirect, $retornoFuncao = true)
    {
        $msnCadastro = mensagemAfirmacao($msn);
        if (!$retornoFuncao) {
            $msnCadastro = mensagemErro($msnErro);
        }
        $this->session->set_flashdata('mensagem', $msnCadastro);
        redirect_admin($redirect);
    }

    public function categorias()
    {
        $this->conteudo['linkCategoria'] = base_url_admin('produto/categoria/');
        $this->initScriptCategoria();
        $this->pagina                    = "categoria-listar";
        $this->exibirPagina();
    }

    public function categoria($id = NULL)
    {
        if ($id != NULL) {
            $this->initScriptCategoria();
            $this->load->model('admin/produto/Categoria_model', 'categoria');
            $this->conteudo                   = $this->categoria->getCategoria($id);
            $this->conteudo['linkAcaoEdicao'] = base_url_admin('produto/categoriaEditar');
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
            $this->load->model('admin/produto/Categoria_model', 'categoria');
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
            $this->load->model('admin/produto/Categoria_model', 'categoria');
            echo $this->categoria->excluirCategoria($id);
        } else {
            echo "Você não tem acesso";
        }
    }

    public function categoriaEditar()
    {
        if ($this->input->method() === "put") {
            $this->load->model('admin/produto/Categoria_model', 'categoria');
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
        $this->load->model('admin/produto/Categoria_model', 'categoria');
        echo json_encode($this->categoria->getAll('categoria-produto',
                array('nome', 'ASC')));
    }

    public function excluir()
    {
        if ($this->input->method() === "post") {
            $id     = (integer) $this->input->post('id', true);
            $return = $this->Produto_model->excluir(self::TB_PRODUTO, self::ID,
                $id);
            $this->mensagem(self::MS_EXCLUIR, self::MS_ERRO_EXCLUIR, "produto",
                $return);
        } else {
            redirect_admin('produto');
        }
    }

    public function exibir($id = null)
    {
        if ($id != null) {
            $id    = (integer) $id;
            $dados = $this->Produto_model->getproduto($id);
            if (count($dados) == 0) {
                $this->mensagem('', 'Página não encontrada', "produto", false);
            }
            $tamDadosCategoria = count($dados['categorias']);
            $categoriasIds     = array();
            for ($i = 0; $i < $tamDadosCategoria; $i++) {
                $categoriasIds[] = $dados['categorias'][$i]['fkCategoria'];
            }
            $this->load->model('admin/produto/Categoria_model', 'Categoria_model');
            $dados['categorias'] = $this->Categoria_model->getCategoriasByIds($categoriasIds);
            $this->conteudo      = $dados;
            $this->pagina        = "produto-exibir";
            $this->exibirPagina();
        } else {
            redirect_admin('produto');
        }
    }

    public function initScriptCategoria()
    {
        $this->footer['script'][] = "<script src='".base_url('assets/admin/app/service/categoria-produto-service.js')."'></script>";
        $this->footer['script'][] = "<script src='".base_url('assets/admin/app/controller/produto/categoria.js')."'></script>";
    }

    public function initScriptProduto()
    {
        $this->footer['script'][] = "<script src='".base_url('assets/admin/app/service/categoria-produto-service.js')."'></script>";
        $this->footer['script'][] = "<script src='".base_url('assets/admin/app/controller/produto/produto.js')."'></script>";
    }
}