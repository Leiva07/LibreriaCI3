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

        function buscarTitulo($titulo){
            $this->db->select();
        $this->db->from($this->table);
        $this->db->like('titulo', $titulo);

        $query = $this->db->get();
        return $query->result();
        }

        function buscarAutor($autor){
            $this->db->select();
        $this->db->from($this->table);
        $this->db->like('autor', $autor);

        $query = $this->db->get();
        return $query->result();
        }

        function buscarAnio($anio){
            $this->db->select();
        $this->db->from($this->table);
        $this->db->like('anio', $anio);

        $query = $this->db->get();
        return $query->result();
        }

        function buscarEstante($estante){
            $this->db->select();
        $this->db->from($this->table);
        $this->db->like('id_estante', $estante);

        $query = $this->db->get();
        return $query->result();
        }

         function buscarCategoria($categoria){
        $query ='SELECT * FROM tbl_libros';
        
        $resultado = $this->db->query($query);
        return $resultado;
        } 
}

?>