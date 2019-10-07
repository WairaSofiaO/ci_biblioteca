<?php
class Asignatura extends CI_Controller
{   
    //Atributo
    private $nombre;
    //Metodo contructor
    public function __construct()
    {
        parent::__construct();
        $this->nombre="Laura Ramirez";
        
    }
    function index()
    {
        //echo "El  nombre del usuario es: $this->nombre";
        //Arreglo

        /*$datos['titulo']="Almacén Don Pacho MIJOOO";
        $datos['nombre']=$this->nombre;
        $datos['mensaje']="Bienvenidos al sistema";*/

        //Otra forma de arreglo
        /*$datos=array('titulo'=>'Feria de Flores',
                    'mensaje'=>'Tactica de plata',
                    'nombre'=>$this->nombre);*/

        //Otra forma de arreglo 3
        /*$datos=[
                    'titulo'=>'Feria de Flores',
                    'mensaje'=>'Team Medellín',
                    'nombre'=>$this->nombre
                ];     */
        $datos['ciudades']=array('Medellin','Bogotá','Cali','Cartagena','Sincelejo','Barranquilla');
        $datos['deptos']=array('Antioquia','Valle','Bolivar','Cundinamarca','Bucaramanga','Meta'); 
        $this->load->view('encabezado');
        $this->load->view('navegacion');      
        $this->load->view('ppal',$datos);
        $this->load->view('pie');
    }
    function calculo($operador,$valor1,$valor2)
    {
        //variable
        $resultado=0;
        switch($operador)
        {
            case "suma":
                $resultado=$valor1+$valor2;
                break;
            case "resta":
                $resultado=$valor1-$valor2;
                break;
            case "multiplicar":
                $resultado=$valor1*$valor2;
                break;
            case "dividir":
                $resultado=$valor1/$valor2;
                break;
        }
        echo "El resultado es: $resultado";
    }
}
?>