<?php
    class cproducto extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
            //Invocar las librerias necesarias para los formularios y sus validaciones
            $this->load->helper(array('form','url'));
            $this->load->library('form_validation');
        }
        function index()
        {
            $this->form_validation->set_rules('txtreferencia','Referencia','required|min_length[3]|max_length[5]');
            $this->form_validation->set_rules('txtdescripcion','Descripción','trim|required|min_length[10]|max_length[30]');
            $this->form_validation->set_rules('txtpunitario','Precio Unitario','trim|required|greater_than[20000]');
            $this->form_validation->set_rules('txtexistencia','Existencia','trim|required|greater_than[10]');

            $this->form_validation->set_message('min_length','El campo %s debe tener como minimo %d caracteres');
            $this->form_validation->set_message('max_length','El campo %s debe tener como maximo %d catacteres');
            $this->form_validation->set_message('min_length','El campo %s debe tener minimo %d caracteres');
            $this->form_validation->set_message('max_length','El campo %s debe tener maximo %d catacteres');
            $this->form_validation->set_message('greater_than','El campo %s debe ser mayor a %d');
            $this->form_validation->set_message('greater_than','El campo %s debe ser superior a %d');
            if ($this->form_validation->run()==FALSE) { //Esto es para saber datos incorrectos en la vista vusuario
                $this->load->view('vproducto');
            } 
            else {
                $this->load->view('welcome_message');
            }
        
        }
    }
?>