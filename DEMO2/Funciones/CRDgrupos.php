<?php
$consulta= "SELECT * FROM grupo WHERE activo='1' ";
      if ($resultado = $mysqli->query($consulta)) 
      {
        while ($fila = $resultado->fetch_row()) 
        {         
          echo "<tr>";
          echo "<td>$fila[0]</td><td>$fila[1]</td><td>$fila[2]</td>";  
          echo"<td>";           

            echo "<a data-toggle='modal' data-target='#editUsu' data-id='" .$fila[0] ."' data-nombre='" .$fila[1] ."' data-descripcion='" .$fila[2] ."'</a> "; 

            echo"<a class='btn btn-primary' style='width:100px;' href='../Modificar/ModificarGrupo.php?idgrupo=".$fila[0]."'>

            <span class='glyphicon glyphicon-pencil'></span> Editar</a> ";     

          echo "<a class='btn btn-danger' style='width:100px;' href='../Eliminar/EliminarG.php?idgrupo=" .$fila[0] ."'><span class='glyphicon glyphicon-remove'></span> Desactivar</a>";   

          echo "</td>";
          echo "</tr>";
        }
        $resultado->close();
      }
      $mysqli->close();     

?>