<?php
 

 $consulta= "SELECT * FROM chequeo";
 
      if ($resultado = $mysqli->query($consulta)) 
      {
        while ($fila = $resultado->fetch_row()) 
        {    
      

    
          echo "<tr>";
          echo "<td>$fila[0]</td><td>$fila[1]</td><td>$fila[2]</td><td>$fila[3]</td><td>$fila[4]</td><td>$fila[5]</td><td style='text-align: center;'>$fila[6]</td><td>$fila[7]</td><td>$fila[8]</td><td>$fila[9]</td>";  
          echo"<td>";           
    

          echo "</td>";
          echo "</tr>";
        }
        $resultado->close();
      }
      $mysqli->close();      

?>
