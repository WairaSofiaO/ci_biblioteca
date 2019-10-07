<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--<title><?php echo $titulo?></title>-->
    <script>
        function mostrar()
        {
            //alert(document.getElementById('cmbciudad').value);
            document.getElementById('txtciudad').value=document.getElementById('cmbciudad').value;
            document.getElementById('spciudad').innerHTML=document.getElementById('cmbciudad').value;
        }
    </script>
   <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/css/estilos.css">
</head>
<body>
    <!--<h1><?php echo $mensaje?></h1>
    Nombre del epleado
    <input type="text" id="txtnombre" name="txtnombre" value="<?php echo $nombre?>">
    <br>
    <span style="color:red">
        <?php echo $nombre?>
    </span>-->
    <br>
    Ciudad:
    <select id="cmbciudad" name="cmbciudad" onchange="mostrar();">
        <?php
            foreach($ciudades as $item):
                echo "<option value='$item'>$item</option>";
            endforeach;
        ?>
    </select>
    Ciudad Seleccionada:
    <input type="text" id='txtciudad' name="txtciudad">
    <br>
    <br>
    <span id="spciudad" style=color:red>

    </span>

    <table border ="1">
	
	<?php
        $i=1;
		foreach($deptos as $depto)
		{
            echo"<tr><td> $i" . ".$depto </td></tr>";
            $i ++;
		}
	?>
	
</table>
<img scr="<?php echo base_url();?>imagenes/free2.jpg" title="El mejor juego del mundo">
</body>
</html>