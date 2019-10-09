<?php
    class cusuario extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
            //invocar  librerias necesarias para los formularios y sus validaciones
            $this->load->helper(array('form','url'));
            $this->load->library('form_validation');
            //invocar el modelo (musuario)
            $this->load->model('musuario');
        }
        function index()
        {   
            //recibir el dato txtident por metodo post de la vista vusuario
            //$identificacion = $this->input->post('txtid');
            //codigo lista usuarios
            //$listado = $this->musuario->listausuarioxident($identificacion);
            //$listado = $this->musuario->listausuarios();
            //$datos['usuarios']=$listado;
            $datos['usuarios']="";
            //fin de codigo para listado de usuarios
            $this->form_validation->set_rules('txtid','Indentificación','required|min_length[6]|max_length[12]');
            $this->form_validation->set_rules('txtnombres','Nombres','trim|required|min_length[3]');
            $this->form_validation->set_rules('txtemail','Email','trim|required|valid_email');
            $this->form_validation->set_rules('txtcontrasena','Contraseña','trim|required|min_length[4]|max_length[12]');
            $this->form_validation->set_rules('txtcontrasenac','Confirmar contraseña','trim|required|matches[txtcontrasena]');

            $this->form_validation->set_message('required','el campo %s es obligatorio');
            $this->form_validation->set_message('min_length','El campo %s debe tener como mínimo %d carácteres');
            $this->form_validation->set_message('max_length','El campo %s debe tener como máximo %d carácteres');
            $this->form_validation->set_message('matches','Las contraseñas no coinciden');
            $this->form_validation->set_message('valid_email','El campo %s debe tener un email válido');

            if (!$this->form_validation->run())//datos incorrectos en la vista de usuario
            {
                $this->load->view('vusuario', $datos);
            }
            else{
                $this->load->view('welcome_message');
            }
            
        }
        function listausuarioxident()
        {
            $ident = $this->input->post('txtident');
            //$usuario = $this->musuario->listausuarioxident($ident);
            $recibido = $this->musuario->listausuarioxident($ident);
            if ($recibido!="La identificación no existe"){
                $datos['usuarios']=$recibido;
                $datos['mensaje']="";
            }
            else{
                $datos['usuarios']="";
                $datos['mensaje']=$recibido;
            }
            //$datos['usuarios']=$this->musuario->listausuarioxident($ident);
            //$datos['mensaje']="";
            $this->load->view('vusuario',$datos);
        }

        function listausuarios()
        {
            $listado = $this->musuario->listausuarios();
            return $listado;
        }

        function agregarusuario()
        {
            $this->form_validation->set_rules('txtid','Indentificación','required|min_length[6]|max_length[12]');

            $this->form_validation->set_rules('txtnombres','Nombres','trim|required|min_length[3]');

            $this->form_validation->set_rules('txtemail','Email','trim|required|valid_email');

            $this->form_validation->set_rules('txtcontrasena','Contraseña','trim|required|min_length[4]|max_length[12]');

            $this->form_validation->set_rules('txtcontrasenac','Confirmar contraseña','trim|required|matches[txtcontrasena]');

            $this->form_validation->set_message('required','el campo %s es obligatorio');
            $this->form_validation->set_message('min_length','El campo %s debe tener como mínimo %d carácteres');
            $this->form_validation->set_message('max_length','El campo %s debe tener como máximo %d carácteres');
            $this->form_validation->set_message('matches','Las contraseñas no coinciden');
            $this->form_validation->set_message('valid_email','El campo %s debe tener un email válido');

            if ($this->form_validation->run())//datos incorrectos en la vista de usuario
            {
                //tomar los datos ingresados por el usuario a través del objeto input, metodo post()
                $ident = $this->input->post('txtid');
                $nombres = $this->input->post('txtnombres');
                $email = $this->input->post('txtemail');
                $contrasena = $this->input->post('txtcontrasena');
                //invocar el metodo
                $mens=$this->musuario->agregarusuario($ident,$nombres,$email,$contrasena);
                //$this->load->view('vusuario');
                //Invocar a la vista con lista de usuario y el mensaje emitido pór el modelo
                $listadou = $this->listausuarios();
                $datos['usuarios']=$listadou;
                $datos['mensaje']=$mens;
                $this->load->view('vusuario',$datos); 
            }
            else{
                 //$listado = $this->musuario->listausuarios();
                 //$datos['usuarios']=$listado;
                $listadou = $this->listausuarios();
                $datos['usuarios']=$listadou;
                $this->load->view('vusuario',$datos);
            }
        }
        //Metodo actualizar usuario
        function actualizarusuario()
        {
            $this->form_validation->set_rules('txtidentact','Indentificación','required|min_length[6]|max_length[12]');

            $this->form_validation->set_rules('txtnombresact','Nombres','trim|required|min_length[3]');

            $this->form_validation->set_rules('txtemailact','Email','trim|required|valid_email');

            $this->form_validation->set_rules('txtcontrasenaact','Contraseña','trim|required|min_length[4]|max_length[12]');

            $this->form_validation->set_rules('txtcontrasenacact','Confirmar contraseña','trim|required|matches[txtcontrasena]');

            $this->form_validation->set_message('required','el campo %s es obligatorio');
            $this->form_validation->set_message('min_length','El campo %s debe tener como mínimo %d carácteres');
            $this->form_validation->set_message('max_length','El campo %s debe tener como máximo %d carácteres');
            $this->form_validation->set_message('matches','Las contraseñas no coinciden');
            $this->form_validation->set_message('valid_email','El campo %s debe tener un email válido');

            if ($this->form_validation->run())//datos incorrectos en la vista de usuario
            {
                //tomar los datos ingresados por el usuario a través del objeto input, metodo post()
                $ident = $this->input->post('txtid');
                $nombres = $this->input->post('txtnombres');
                $email = $this->input->post('txtemail');
                $contrasena = $this->input->post('txtcontrasena');
                //invocar el metodo
                $mens=$this->musuario->actualizarusuario($ident,$nombres,$email,$contrasena);
                //$this->load->view('vusuario');
                //Invocar a la vista con lista de usuario y el mensaje emitido por el modelo
                $listadou = $this->listausuarios();
                $datos['usuarios']=$listadou;
                $datos['mensaje']=$mens;
                $this->load->view('vusuario',$datos); 
            }
            else{
                 //$listado = $this->musuario->listausuarios();
                 //$datos['usuarios']=$listado;
                $listadou = $this->listausuarios();
                $datos['usuarios']=$listadou;
                $this->load->view('vusuario',$datos);
            }
        }
        function eliminarusuario()
        {
            $ident = $this->input->post(txtident);
            $mens = $this->musuario->eliminarusuario($ident);
            $listadou = $this->listausuarios();
            $datos['usuarios']=$listadou;
            $datos['mensaje']=$mens;
            $this->load->view('vusuario',$datos); 
        }

    
    }
?>