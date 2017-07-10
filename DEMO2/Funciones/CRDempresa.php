<?php
      $consulta= "SELECT * FROM empresa LIMIT 5";
      if ($resultado = $mysqli->query($consulta)) 
      {
        while ($fila = $resultado->fetch_row()) 
        {         
          echo "<tr>";
          echo "<td>$fila[0]</td><td>$fila[1]</td><td>$fila[7], $fila[6], $fila[5], $fila[4]</td><td>$fila[9]</td><td>$fila[3]</td>";  
          echo"<td>";           
            echo "<a data-toggle='modal' data-target='#editUsu' data-id='" .$fila[0] ."' data-nombre='" .$fila[1] ."' data-edad='" .$fila[2] ."' data-direccion='" .$fila[3] ."'</a>";



            echo "<a class='btn btn-primary' href='../Modificar/ModificarEmpresa.php?idempresa=".$fila[0]."'>

            <span class='glyphicon glyphicon-pencil'></span> Editar</a> "; 


          echo "<a class='btn btn-danger' href='../Eliminar/EliminarE.php?idempresa=" .$fila[0] ."'>

          <span class='glyphicon glyphicon-remove'></span> Desactivar</a>"; 

          echo "</td>";
          echo "</tr>";
        }
        $resultado->close();
      }
      $mysqli->close();     
 ?>     
  