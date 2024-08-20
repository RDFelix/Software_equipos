<?php
    function mostrar_tabla($tabla, $campos) {
        include 'conexion.php';

        $columnas = implode(", ", $campos);
        $sql = "SELECT " . $columnas . " FROM " . $tabla . ";";
       
        $resultado = $conexion->query($sql);

        if ($resultado) {
            if ($resultado->num_rows > 0) {
                while ($fila = $resultado->fetch_assoc()) {
                    echo "<tr>";
                    foreach ($campos as $campo) {
                        if($campo == "adjunto"){
                            $imagen = base64_encode($fila["adjunto"]);
                            echo "<td><img class='' src='data:image/png;base64," . $imagen . "' style='width: auto; height: auto;'/></td>";
                        }else if($campo == "localizacion"){
                            echo "<td><button><a href='" . $fila[$campo] . "' target='BLANK'>Mostrar localizacion</a></button></td>";
                        }else{
                            echo "<td>" . $fila[$campo] . "</td>"; 
                        }
                        
                    }
                    echo "</tr>";
                }
            } else {
                echo "<tr><td>No se encontraron registros</td></tr>";
            }
        } else {
            echo "<tr><td>Error en la consulta: " . $conexion->error . "</td></tr>";
        }
    }
?>