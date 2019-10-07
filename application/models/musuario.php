<?php
    class musuario extends CI_Model
    {
        function __construct()
        {
            $this->load->database();
        }

        function listausuarios()
        {
            $query = $this->db->query("Select * From Usuario");
            return $query->result_array();
        }

        function listausuarioxident($ident)
        {
            $query = $this->db->query("Select * From Usuario Where Ident = ?", $ident);
           $dato="";
            if($query->num_rows()>0){
                $dato = $query->result_array();
            }
            else{
                $dato = "La identificación no existe";
            }
            //return $query->result_array();
            return $dato;
                
            
        }
        public function agregarusuario($ident,$nombres,$email,$contrasena)
        {
            //Se genera un arreglo(array) asociativo con las posiciones (nombres de campos) de la tabla respectiva
            $datos = array(
                            'ident' => $ident,
                            'nombres' => $nombres,
                            'email' => $email,
                            'contrasena' => $contrasena
                        );
            // tambien se puede de esta forma
            $datos1 = [
                        'ident' => $ident,
                        'nombres' => $nombres,
                        'email' => $email,
                        'contrasena' => $contrasena
            ];

            $query = $this->db->query("Select * From Usuario Where Ident = ?", $ident);
            $mensaje="";
            if($query->num_rows()==0){
                $this->db->insert('usuario',$datos);
                $mensaje="El usuarioi se ha guardado correctamente";
            }
            else 
            {
                $mensaje="El usuario ya existe intente con otro";
            }

            return $mensaje;
        }
        function actualizarusuario($ident,$nombres,$email,$contrasena)
        {
            
            $data = [
                'ident' => $ident,
                'nombres' => $nombres,
                'email' => $email,
                'contrasena' => $contrasena
            ];
            $query = $this->db->query("Select * From Usuario Where Ident = ?", $ident);
            $mensaje="";
            if ($query->num_rows()>0)
            {
            //Actulizar los datos con la informacion recibida en los argumentos ($ident)
            $this->db->where('ident',$ident);
            $this->db->update('usuario',$data);
            $mensaje = "Los datos del usuario se han actualizado correctamente";
            }
            else
            {
                $mensaje = "La identificación no existe";
            }
           
            return $mensaje;
        }

        function eliminarusuario($ident)
        {
            $query = $this->db->query("Select * From Usuario Where Ident = ?", $ident);
            $mensaje="";
            if ($query->num_rows()>0)
            {
            $this->db->where('ident',$ident);
            $this->db->delete('usuario');
            $mensaje = "Los datos del usuario se han eliminado correctamente";
            }
            else
            {
                $mensaje = "La identificación no existe";
            }
            return $mensaje;
        }
    }


?>