<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Software Equipos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <main class="m-auto d-flex justify-content-center align-items-center" style="height: 100vh; width: 100vw;">
        <form action="inicio.php" class="w-25" style="min-width: 400px;">
            <img class="mb-4" src="logo.png" alt="" width="80" height="80">
            <h1 class="h3 mb-3 fw-normal">Iniciar sesion</h1>

            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="floatingInput" placeholder="">
                <label for="floatingInput">Identificacion</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="">
                <label for="floatingPassword">Contraseña</label>
            </div>

            <div class="form-check text-start my-3">
                <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Recordarme
                </label>
            </div>
            
            <button class="btn btn-primary w-100 py-2" type="submit">Iniciar sesion</button>
            <a href="registro.php">No estas registrado?</a>
            <p class="mt-5 mb-3 text-body-secondary">&copy<i>RDFelix 2024</i></p>
        </form>
    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="scripts.js"></script>
</html>