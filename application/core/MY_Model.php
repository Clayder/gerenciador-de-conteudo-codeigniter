<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function add($tabela, $dados)
    {
        $this->db->insert($tabela, $dados);
        return $this->db->insert_id();
    }

    public function excluir($tabela, $campo, $id)
    {
        $this->db->where($campo, $id);
        $this->db->delete($tabela);
        if ($this->db->affected_rows() == 1)
        {
            return TRUE;
        } else
        {
            return FALSE;
        }
    }

    /*
     * @param string, nome da tabela
     * @param array, array[0] é o campo que será utilizado para ordenar a consulta 
     *               array[1], pode ser ASC ou DESC 
     */

    public function getAll($tabela, $orderBy = NULL)
    {
        if ($orderBy != NULL)
        {
            $this->db->order_by($orderBy[0], $orderBy[1]);
        }
        return $this->db->get($tabela)->result();
    }

    public function getAll_array($tabela, $orderBy = NULL)
    {
        if ($orderBy != NULL)
        {
            $this->db->order_by($orderBy[0], $orderBy[1]);
        }
        return $this->db->get($tabela)->result_array();
    }

    /*
     * @param string, nome da tabela
     * @param string, campo que será feito a busca
     * @param  item buscado, ID por exemplo  
     */

    public function get($tabela, $campo, $item)
    {
        $this->db->where($campo, $item);
        return $this->db->get($tabela)->row_array();
    }

    public function editar($tabela, $campo, $id, $dados)
    {
        $this->db->where($campo, $id);
        $this->db->update($tabela, $dados);
        if ($this->db->affected_rows() == 1)
        {
            return TRUE;
        } else
        {
            return FALSE;
        }
    }

      // get total rows
    public function count_all($tabela)
    {
        return $this->db->count_all($tabela);
    }

}
