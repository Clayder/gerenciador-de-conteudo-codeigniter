<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagina extends MY_Controller
{
    const TB_CATEGORIA = 'categoria-pagina';

    function __construct()
    {
        parent::__construct();
        $this->pastaPagina = "pagina";
    }

    public function index()
    {
        $this->pagina = "pagina-listar";
        $this->exibirPagina();
    }

    public function cadastrar()
    {
        $this->initScriptPagina();
        $this->pagina = "pagina-form";
        $this->exibirPagina();
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

    public function initScriptCategoria()
    {
        $this->footer['script'][] = "<script src='".base_url('assets/admin/app/controller/pagina/categoria.js')."'></script>";
    }

    public function initScriptPagina()
    {
        $this->footer['script'][] = "<script src='".base_url('assets/admin/app/controller/pagina/pagina.js')."'></script>";
    }
}