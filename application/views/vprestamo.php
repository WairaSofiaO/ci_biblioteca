<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prestamo Del Libro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="http://localhost:81/ci_biblioteca/css/estilos.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<script>
      $(document).ready(function(){
         setTimeout(function()
         {
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
    <?php
         echo form_open('cprestamo')
    ?>
    <form>
      <div class=form-group>
      Numero de Prestamo
        <input type="text" id="txtnroprest" name="txtnroprest" class="form-control" value="<?php echo set_value ('txtnroprest') ?>" >
      </div>
      <div class="form-group">
      Identificación
        <input type="text" id="txtid" name="txtident" class="form-control" placeholder="Ingrece una identificación" value="<?php echo set_value ('txtident') ?>">
      </div>
      <div class="form-group">
      Fecha
        <input type="date" id="txtfecha" name="txtfecha" class="form-control" placeholder="Ingrese una fecha" value="<?php echo set_value ('txtfecha') ?>">
      </div>
      <div class="form-group">
      <input type="submit" id="btnguardar" name="btnguardar" class="btn btn-primary" value=Guardar>
      </div>
    
    </form>
    <?php echo form_close()?>
    <span style="color:red" class="mensaje">
      <?php 
         if (isset($mensaje))
         {
            echo $mensaje;
         }
      ?>
    </span>
    <table calss="table table-dark">
        <thead>
        <tr>
      <th scope="col">Numero Prestamo</th>
      <th scope="col">Identificacion</th>
      <th scope="col">Fecha</th>
    </tr>
    <?php 
        foreach($prestamos as $prestamo){
            echo "<tr>";
            echo "<td>".$prestamo['txtnroprest']."</td>";
            echo "<td>".$prestamo['txtident']."</td>";
            echo "<td>".$prestamo['txtfecha']."</td>";
            echo "</tr>";
        }
        
    ?>
    </table>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
</body>
</html>