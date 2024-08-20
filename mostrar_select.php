<?php
    function mostrar_select($tabla, $campo) {
        include 'conexion.php';

        $sql = "SELECT " . $campo . " FROM " . $tabla . ";";
       
        $resultado = $conexion->query($sql);

        if ($resultado) {
            if ($resultado->num_rows > 0) {
                while ($fila = $resultado->fetch_assoc()) {
                    echo "<option value='" . $fila[$campo] . "'>" . $fila[$campo] . "</option>";
                }
            } else {
                echo "<tr><td>No se encontraron registros</td></tr>";
            }
        } else {
            echo "<tr><td>Error en la consulta: " . $conexion->error . "</td></tr>";
        }
    }
?>