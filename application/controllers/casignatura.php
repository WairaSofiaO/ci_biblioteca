<?php
    class casignatura extends CI_controller
    {
        function __construct()
        {
            parent::__construct();
            //invocar  librerias necesarias para los formularios y sus validaciones
            $this->load->helper(array('form','url'));
            $this->load->library('form_validation');
            //invocar el modelo (musuario)
            $this->load->model('masignatura');
        }
        function index()
        {   
            //recibir el dato txtident por metodo post de la vista vusuario
            //$identificacion = $this->input->post('txtcodasig');
            //codigo lista usuarios
            //$listado = $this->masignatura->listaacademia($identificacion);
            $listado = $this->masignatura->listaacademia();
            $datos['academia']=$listado;
            //fin de codigo para listado de usuarios
            $this->form_validation->set_rules('txtcodasig','Codigo Asignatura','required|min_length[1]|max_length[12]');
            $this->form_validation->set_rules('txtnombres','Nombres','trim|required|min_length[10]|max_length[30]');
            $this->form_validation->set_rules('txtintensidad','Intensidad','trim|required|min_length[1]|max_length[6]');
            $this->form_validation->set_rules('txtvalor','Valor','trim|required|greater_than[10000]');

            $this->form_validation->set_message('min_length','El campo %s debe tener como minimo %d caracteres');
            $this->form_validation->set_message('max_length','El campo %s debe tener como maximo %d catacteres');
            $this->form_validation->set_message('min_length','El campo %s debe tener minimo %d caracteres');
            $this->form_validation->set_message('max_length','El campo %s debe tener maximo %d catacteres');
            $this->form_validation->set_message('min_length','El campo %s debe tener minimo %d caracteres');
            $this->form_validation->set_message('max_length','El campo %s debe tener maximo %d catacteres');
            $this->form_validation->set_message('greater_than','El campo %s debe ser superior a %d');

            if ($this->form_validation->run()==FALSE) //Esto es para saber datos incorrectos en la vista vasignatura
            {
            $this->load->view('vasignatura', $datos);
            }
            else{
                $this->load->view('welcome_message');
            }
            
        }

        function listaacademia()
        {
            $listado = $this->masignatura->listaacademia();
            $datos['cliente']=$listado;
            $this->load->view('vasignatura', $datos);
        }
       
    
    }
        
    

?>