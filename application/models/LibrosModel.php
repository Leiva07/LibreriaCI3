<?php 

class LibrosModel extends CI_Model{

    private $table ="tbl_libro";

    function __construct(){

    }

    function buscarCodigo($codigo = null){

        if($codigo != null){
        $this->db->select();
        $this->db->from($this->table);
        $this->db->like('codigo', $codigo);

        $query = $this->db->get();
        return $query->result();
        }
        else
        {
        $this->db->select();
        $this->db->from($this->table);

        $query = $this->db->get();
        return $query->result();
        }

        
    }

}

?>