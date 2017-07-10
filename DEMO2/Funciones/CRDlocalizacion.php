<?php

$consulta= "SELECT * FROM lugares";
      if ($resultado = $mysqli->query($consulta)) 
      {
        while ($fila = $resultado->fetch_row()) 
        {         
          echo "<tr>";
          echo "<td>$fila[0]</td><td>$fila[1]</td><td>$fila[2]</td><td>$fila[3]</td><td>$fila[4]</td>";  
          echo"<td>";

           echo "<a data-toggle='modal' data-target='#editUsu' data-id='" .$fila[0] ."' data-nombre='" .$fila[1] ."' data-direccion='" .$fila[2] ."' class='btn btn-primary'><span class='glyphicon glyphicon-pencil'></span>Editar</a> ";      
          echo "<a class=
          'btn btn-danger' href='../Eliminar/EliminarL.php?idlugar=" .$fila[0] ."'><span class='glyphicon glyphicon-remove'></span> Desactivar</a>";   
          echo "</td>";
          echo "</tr>";
        }
        $resultado->close();
      }
      $mysqli->close();     
      
  ?>
