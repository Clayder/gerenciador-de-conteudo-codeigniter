<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria_model extends MY_Model
{

    const TB_CATEGORIA = 'categoria-pagina';
    const TB_CATEGORIA_POST = 'categoria-post';

    public function __construct()
    {
        parent::__construct();
    }

    public function getCategoria($id)
    {
        $teste = NULL;
        return $this->db->select('categoriaAux.id AS idPai, categoriaAux.nome AS nomePai, categoria-pagina.id, categoria-pagina.nome, categoria-pagina.slug, categoria-pagina.pai, categoria-pagina.descricao')
                        ->from(self::TB_CATEGORIA, ' as categoria-pagina')
                        ->join(self::TB_CATEGORIA . ' as categoriaAux', "categoria-pagina.pai = categoriaAux.id OR categoria-pagina.pai = 0")
                        ->where('categoria-pagina.id', $id)
                        ->get()
                        ->row_array();
    }

    /*
     * Verifica se quando for excluír alguma  categoria, se ela possui filhas
     * Se existir o metodo apaga a categoria pai da categoria filha 
     */

    public function excluirPaiDasFilhas($id)
    {
        $filhas = $this->getFilhasByPai($id);

        foreach ($filhas as $filha)
        {
            $dados = array(
                'pai' => 0
            );
            $this->editar(self::TB_CATEGORIA, 'id', $filha->id, $dados);
        }
    }

    /*
     * Retorna as categorias filhas de um determinado pai
     */

    public function getFilhasByPai($idPai)
    {
        $this->db->where('pai', $idPai);
        return $this->db->get(self::TB_CATEGORIA)->result();
    }

    public function excluirCategoria($id)
    {
        $this->excluirPaiDasFilhas($id);
        return $this->excluir(self::TB_CATEGORIA, 'id', $id);
    }

    /*
     * Retorna os possíveis pais de uma determinada categoria 
     * Uma categoria não pode ser pai dela mesma
     */
    public function getFuturosPaisByCateg($idCategoria)
    {
        $this->db->where('id !=', $idCategoria);
        $this->db->order_by('nome', 'ASC');
        return $this->db->get(self::TB_CATEGORIA)->result_array();
    }

    public function getCategoriasByIds($arrayIds){
        $tam = count($arrayIds);
        $this->db->order_by('nome', 'ASC');
        for($i = 0; $i < $tam; $i++){
            $this->db->or_where('id', $arrayIds[$i]);
        }
        return $this->db->get(self::TB_CATEGORIA)->result_array();
    }

}
