<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produto_model extends MY_Model
{
    const TB_PRODUTO           = 'produto';
    const TB_PRODUTO_CATEGORIA = 'produto-categoria';
    const TB_CATEGORIA        = 'categoria-produto';
    const ID                  = 'id';
    const ORDER               = 'ASC';

    public function __construct()
    {
        parent::__construct();
    }

    public function add($dados, $categorias)
    {
        $this->db->trans_start();
        $idNovo = parent::add(self::TB_PRODUTO, $dados);

        if ($idNovo) {
            $this->cadastrarCategoria($categorias, $idNovo);
        }
        $this->db->trans_complete();

        if ($this->db->trans_status() === false) {
            return false;
        } else {
            return true;
        }
    }

    public function cadastrarCategoria($categorias, $idNovo)
    {
        $tam = count($categorias);
        for ($i = 0; $i < $tam; $i++) {
            $dadosCategoria = array(
                'fkProduto' => $idNovo,
                'fkCategoria' => $categorias[$i],
            );
            parent::add(self::TB_PRODUTO_CATEGORIA, $dadosCategoria);
        }
    }

    public function get_limit_data($limit, $start = 0, $q = NULL)
    {
        $this->db->order_by('titulo', self::ORDER);
        $this->db->like('id', $q);
        $this->db->or_like('titulo', $q);
        $this->db->or_like('slug', $q);
        $this->db->or_like('texto', $q);
        $this->db->or_like('status', $q);
        $this->db->or_like('imagem', $q);
        $this->db->limit($limit, $start);
        return $this->db->get(self::TB_PRODUTO)->result();
    }

    public function total_rows($q = NULL)
    {
        $this->db->like('id', $q);
        $this->db->or_like('titulo', $q);
        $this->db->or_like('slug', $q);
        $this->db->or_like('texto', $q);
        $this->db->or_like('status', $q);
        $this->db->or_like('imagem', $q);
        $this->db->from(self::TB_PRODUTO);
        return $this->db->count_all_results();
    }

    public function getProduto($id)
    {
        $produto = parent::get(self::TB_PRODUTO, 'id', $id);
        if (count($produto) != 0) {
            $produto['categorias'] = $this->getCategoriaByFk($produto['id'],
                'fkProduto');
        }
        return $produto;
    }

    public function editarProduto($dadosProduto, $dadosCategoria, $id)
    {
        parent::editar(self::TB_PRODUTO, 'id', $id,
                $dadosProduto);
        $this->editarProdutoCategoria($dadosCategoria, $id);
    }

    public function editarProdutoCategoria($categorias, $id)
    {
        parent::excluir(self::TB_PRODUTO_CATEGORIA, 'fkProduto', $id);
        return $this->cadastrarCategoria($categorias, $id);
    }

    public function getCategoriaByFk($fk, $campoFk)
    {
        $this->db->where($campoFk, $fk);
        return $this->db->get(self::TB_PRODUTO_CATEGORIA)->result_array();
    }
}