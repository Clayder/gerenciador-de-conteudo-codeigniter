<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagina_model extends MY_Model
{
    const TB_PAGINA           = 'pagina';
    const TB_PAGINA_CATEGORIA = 'pagina-categoria';
    const TB_CATEGORIA = 'categoria-pagina';
    const ID                  = 'id';
    const ORDER               = 'ASC';

    public function __construct()
    {
        parent::__construct();
    }

    public function add($dados, $categorias)
    {
        $this->db->trans_start();
        $idNovaPagina = parent::add(self::TB_PAGINA, $dados);

        if ($idNovaPagina) {
            $this->cadastrarCategoriaPagina($categorias, $idNovaPagina);
        }
        $this->db->trans_complete();

        if ($this->db->trans_status() === false) {
            return false;
        } else {
            return true;
        }
    }

    public function cadastrarCategoriaPagina($categorias, $idNovaPagina)
    {
        $tam = count($categorias);
        for ($i = 0; $i < $tam; $i++) {
            $dadosCategoria = array(
                'fkPagina' => $idNovaPagina,
                'fkCategoria' => $categorias[$i],
            );
            parent::add(self::TB_PAGINA_CATEGORIA, $dadosCategoria);
        }
    }

    public function get_limit_data($limit, $start = 0, $q = NULL)
    {
        $this->db->order_by('titulo', self::ORDER);
        $this->db->like('id', $q);
        $this->db->or_like('titulo', $q);
        $this->db->or_like('slug', $q);
        $this->db->or_like('texto', $q);
        $this->db->or_like('resumo', $q);
        $this->db->or_like('status', $q);
        $this->db->or_like('imagem', $q);
        $this->db->limit($limit, $start);
        return $this->db->get(self::TB_PAGINA)->result();
    }

    public function total_rows($q = NULL)
    {
        $this->db->like('id', $q);
        $this->db->or_like('titulo', $q);
        $this->db->or_like('slug', $q);
        $this->db->or_like('texto', $q);
        $this->db->or_like('resumo', $q);
        $this->db->or_like('status', $q);
        $this->db->or_like('imagem', $q);
        $this->db->from(self::TB_PAGINA);
        return $this->db->count_all_results();
    }

    public function getPagina($id){
        $pagina = parent::get(self::TB_PAGINA, 'id', $id);
        $pagina['categorias'] = $this->getCategoriaByFk($pagina['id'], 'fkPagina');
        return $pagina;
    }

    public function getCategoriaByFk($fk, $campoFk){
       $this->db->where($campoFk, $fk);
       return $this->db->get(self::TB_PAGINA_CATEGORIA)->result_array();
    }
}