<?php

class LoginModel Extends CI_Model{


    private $table ="tbl_usuarios";

     function __construct(){
        parent::__construct();

    }

    function buscar($usuario){
        $this->db->select("usuario, clave");
        $this->db->from($this->table);
        $this->db->where('usuario', $usuario);

        $query = $this->db->get();
        return $query->row();
    }

}

?>