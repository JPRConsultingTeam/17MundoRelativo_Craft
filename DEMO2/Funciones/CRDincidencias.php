<?php

 $consulta= "SELECT * FROM incidencias";
      
      if ($resultado = $mysqli->query($consulta)) 
      {
        while ($fila = $resultado->fetch_row()) 
        {         
          echo "<tr>";
          echo "<td>$fila[0]</td><td>$fila[1]</td><td>$fila[2]</td><td>$fila[3]</td><td>$fila[4]</td><td>$fila[5]</td>";  
          echo"<td>"; 

             $destino = $fila[5];

      
 
          echo"<a class='btn btn-default' href='../documentos/$destino' download>Descargar</a>"; 
          

 
          echo "<a data-toggle='modal' data-target='#editUsu' data-id='" .$fila[0] ."' data-nombre='" .$fila[1] ."' data-descripcion='" .$fila[2] ."' data-activo='" .$fila[3] ."'</a> ";  

            echo"<a class='btn btn-primary' href='../Modificar/ModificarIncidencia.php?idincidencia=".$fila[0]."'>

            <span class='glyphicon glyphicon-pencil'></span> Editar</a> ";

          echo "<a class='btn btn-danger' href='../Eliminar/EliminarI.php?idincidencia=" .$fila[0] ."'><span class='glyphicon glyphicon-remove'></span> Desactivar</a>"; 



          echo "</td>";
          echo "</tr>";
        }
        $resultado->close();
      }
      $mysqli->close();     
?>