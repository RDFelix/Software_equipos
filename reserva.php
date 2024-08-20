<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Software Equipos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav class="mx-3">
            <ul class="nav nav-underline">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="inicio.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="reserva.php">Reservar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="solicitar.php">Solicitar</a>
                </li>
            </ul>
        </nav>
    </header>
    <main class="mx-5">
        <form action="inicio.php" method="post">
            <h2>Hacer una reserva</h2>
            <div class="input-group mb-3">
                <select class="input-group-text" id="" name="" >
                    <?php
                        include 'conexion.php';

                        $sql = "SELECT * FROM equipos;";
                       
                        $resultado = $conexion->query($sql);
                
                        if ($resultado) {
                            if ($resultado->num_rows > 0) {
                                while ($fila = $resultado->fetch_assoc()) {
                                    echo "<option value='" . $fila["codigo"] . "'>" . $fila["tipo"] . " - " . $fila["detalles"] . "</option>";
                                }
                            } else {
                                echo "<option>No se encontraron registros</option>";
                            }
                        }
                    ?>
                </select>
                <span class="input-group-text" id="basic-addon1"></span>
                <input type="text" class="form-control" placeholder="Detalles" required>
            </div>
            
            <div class="input-group mb-3">
            <span class="input-group-text" id="">Fecha</span>
                <input type="date" class="form-control" placeholder="" required>
                <span class="input-group-text" id="">Hora</span>
                <input type="time" class="form-control" placeholder="" required>
            </div>
            
            <div class="mb-3">
                <label for="basic-url" class="form-label">Detalles de la reserva</label>
                <div class="input-group">
                    <span class="input-group-text" id="">Tiempo de la reserva</span>
                    <input type="number" class="form-control" id="">
                </div>
                <div class="form-text" id="basic-addon4">Cantidad de tiempo que utilizará el equipo</div>

                <div class="input-group mt-3">
                    <span class="input-group-text" id="basic-addon3">Ambiente de formacion</span>
                    <input type="number" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
                </div>
                <div class="form-text" id="basic-addon4">Lugar en el que se econtrará el equipo</div>
            </div>

            <button type="submit" class="btn btn-primary">Enviar reserva</button>

            <?php
                include 'conexion.php';

                if (isset($_POST['registro_reserva'])) {
                    $codigo_user = $_POST['codigo_user'];
                    $nombre_user = $_POST['nombres_user'];
                    $apellidos_user = $_POST['apellidos_user'];
                    $contraseña_user = $_POST['contraseña_user'];
                    $id_congregacion = $_POST['id_congregacion'];
        
                    $sql = "INSERT INTO usuarios (codigo, nombre, contraseña, id_congregacion) VALUES ('$codigo_user', '$nombre_user', '$contraseña_user', '$id_congregacion')";
        
                    if ($conexion->query($sql) === TRUE) {
                        echo "<script>alert('Nuevo registro creado correctamente');</script>";
                    } else {
                        echo "<script>alert('Error: " . $conexion->error . "');</script>";
                    }
                }
            ?>
        </form>
    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="scripts.js"></script>
</html>