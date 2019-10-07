<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Productos</title>
</head>
<body>
<span style="color:orange">
        <?php 
            echo validation_errors(); //Validación de errores (se muestran en este spam)
        ?>
    </span>
    <?php echo form_open('cproducto')?>
    <form>
    <table>
    <tr>
        <td>Referencia</td>
        <td>
        <input type="text" id="txtreferencia" name="txtreferencia" value="<?php echo set_value('txtreferencia')?>">
        </td>
    </tr>
    <tr>
        <td>Descripción</td>
        <td>
        <input type="text" id="txtdescripcion" name="txtdescripcion" value="<?php echo set_value('txtdescripcion')?>">
        </td>
    </tr>
    <tr>
        <td>Precio Unitario</td>
        <td>
        <input type="text" id="txtexistencia" name="txtexistencia" value="<?php echo set_value('txtexistencia')?>">
        </td>
    </tr>
    <tr>
        <td>Existencia</td>
        <td>
        <input type="password" id="txtcontrasena" name="txtcontrasena">
        </td>
    </tr>
        <td>
        <input type="submit" id="btnenviar" name="btnenviar">
        </td>
    </tr>

    </table>
    </form>
</body>
</html>