<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clientes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="http://localhost:81/ci_biblioteca/css/estilos.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
      function pasardatos(){
         document.getElementById('txtidentact').value=document.getElementById('txtident').value;
         document.getElementById('txtnombresact').value=document.getElementById('txtnombres').value;
         document.getElementById('txtemailact').value=document.getElementById('txtemail').value;
         document.getElementById('txtcontrasenaact').value=document.getElementById('txtcontrasena').value;
         document.getElementById('txtcontrasenacact').value=document.getElementById('txtcontrasenac').value;
      }
    </script>
</head>
   <script>
      $(document).ready(function(){
         setTimeout(function(){
           $('.mensaje').text(""); 
         }, 5000);
      });
   </script>
<body>
    <span style ="color:red">
        <?php
        echo validation_errors(); //validacion de errores (se muestran los errores en este span)
        ?>
    </span>
    <!--Buscar por identificación-->
      <?php 
      echo form_open('cusuario/listausuarioxident');
      ?>
      <form>
      Identificación
      <input type="text" id="txtident" name="txtident" calss="">
      <input type="submit" id="btnbuscar" name="btnbuscar" value="Buscar" class="btn btn-primary">
      </form>
      <br>
      <?php
      echo form_close();
      ?>
   <!--Fin Buscar por identificación-->

    <?php
         echo form_open('cusuario/agregarusuario')?>
         <div style="float:left">
    <form>
      <div class="form-group">
          Identificacion
           <input type = "text" id = "txtid" name = "txtid" class="form-control" placeholder="Ingrese identificación" value="<?php echo set_value ('txtident') ?>">
           <small id="emailHelp" class="form-text text-muted">Nunca compartiremos su identid¿ficación con nadie</small>
      </div>
      <div class="form-group">
          Nombres
           <input type = "text" id = "txtnombres" name = "txtnombres" class="form-control" placeholder="Ingrese un nombre" value="<?php echo set_value ('txtnombres') ?>">
      </div>
      <div class="form-group">
          Email
           <input type = "text" id = "txtemail" name = "txtemail" class="form-control" placeholder="Ingrese Correo" value="<?php echo set_value ('txtemail') ?>">
      </div>
      <div class="form-group">
          Contraseña
           <input type = "password" id = "txtcontrasena" name = "txtcontrasena" class="form-control" placeholder="Ingrese una Contraseña" value="<?php echo set_value ('txtcontrasena') ?>">
      </div>
      <div class="form-group">
        Confirmar contraseña </td>
         <input type = "password" id = "txtcontrasenac" name = "txtcontrasenac" class="form-control" placeholder="Confirme su contraseña" value="<?php echo set_value ('txtcontrasenac') ?>"> 
      </div>

      <div calss="form-group">
           <input type = "submit" id = "btnguardar" name = "btnguardar" class="btn btn-primary" value="Guardar">
      </div>
        
    </form>
    </div>
    <?php echo form_close()?>
    <!--Actualizar datos del usuario-->
      <br>
    <?php
      echo form_open('cusuario/actualizarusuario');

    ?>
      <div style="float:left;width:100px;heigth:100px;margin-top:388px">
      <form>
      <input type="hidden" id="txtidentact" name="txtidentact">
      <input type="hidden" id="txtnombresact" name="txtnombresact">
      <input type="hidden" id="txtemailact" name="txtemailact">
      <input type="hidden" id="txtcontrasenaact" name="txtcontrasenaact">
      <input type="hidden" id="txtcontrasenacact" name="txtcontrasenacact">
      <input type="submit" id="btnactualizar" name="btnactualizar" value="Actualizar" class="btn btn-primary" onclick="pasardatos();">
      </form>
      </div>
    <?php
      echo form_close();
    ?>
    <span style="color:red" class="mensaje">
      <?php 
         if (isset($mensaje))
         {
            echo $mensaje;
         }
      ?>
    </span>
   <?php
      if($usuarios!=""){
         echo "<table class='table table-hover'>";
         echo "<th>Identificacion</th>";
         echo "<th>Nombres</th>";
         echo "<th>Email</th>";
         //echo "<th>Contraseña</th>";
      foreach($usuarios as $usuario){
         echo "<tr>";
         echo "<td>".$usuario['ident']."</td>";
         echo "<td>".$usuario['nombres']."</td>";
         echo "<td>".$usuario['email']."</td>";
         //echo "<td>".$usuario['contrasena']."</td>";
         $nombresb = $usuario['nombres'];
         $emailb = $usuario ['email'];
         echo "<script>document.getElementById('txtnombres').value='$nombresb'</script>";
         echo "<script>document.getElementById('txtemail').value='$emailb'</script>";
         echo "</tr>";
      }
   }
   ?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>