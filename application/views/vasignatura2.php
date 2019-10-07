<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Asignatura</title>
</head>
<body>
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
</table>
</body>
</html>