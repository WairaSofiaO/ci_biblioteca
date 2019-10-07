<?php
    class masignatura extends CI_Model
    {
        function __construct()
        {
            $this->load->database();
        }
        function listaacademia()
        {
            //Devolver la informacion de todos los clientes
            //$query = $this->db->get("cliente");
            $query = $this->db->query("Select * From Asignatura");
            return $query->result_array();
        }
        function listaclientexcodasig($codasig)
        {
            $query = $this->db->query("Select * From Asignatura Where Codasig = ?", $Codasig);
            return $query->result_array();
        }
    }
?>