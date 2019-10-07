<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Asignatura</title>
    <link rel="stylesheet" type="text/css" href="http://localhost:81/ci_facturacion/css/estilos.css">
</head>
<body>
<span style ="color:withe">
        <?php
        echo validation_errors(); //validacion de errores (se muestran los errores en este span)
        ?>
    </span>
    <?php
         echo form_open('casignatura');
    ?>
    <form>
     <table>
        <tr>
           <td> Codigo Asignatura </td>
           <td> <input type = "text" id = "txtcodasig" name = "txtcodasig" value="<?php echo set_value ('txtcodasig') ?>"> </td>
        </tr>
        <tr>
           <td> Nombres </td>
           <td> <input type = "text" id = "txtnombres" name = "txtnombres" value="<?php echo set_value ('txtnombres') ?>"> </td>
        </tr>
        <tr>
           <td> Intensidad </td>
           <td> <input type = "text" id = "txtintensidad" name = "txtintensidad" value="<?php echo set_value ('txtintensidad') ?>"> </td>
        </tr>
        <tr>
           <td> Valor </td>
           <td> <input type = "text" id = "txtvalor" name = "txtvalor" value="<?php echo set_value ('txtvalor') ?>"> </td>
        </tr>
        <tr>
           <td> <input type = "submit" id = "btnenviar" name = "btnenviar"> </td>
        </tr>
    </table>
</form>

    <table border="1">
   <th>Codigo Asignatura</th>
   <th>Nombres</th>
   <th>Intensidad</th>
   <th>Valor</th>
   <?php
      foreach($academia as $academia){
         echo "<tr>";
         echo "<td>".$academia['codasig']."</td>";
         echo "<td>".$academia['nombre']."</td>";
         echo "<td>".$academia['intensidad']."</td>";
         echo "<td>".$academia['valor']."</td>";
         echo "</tr>";
      }
      
   ?>
</table>
    
</body>
</html>