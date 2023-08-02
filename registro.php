<!DOCTYPE html>
<html>
<head>
    <title>Registro</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Oswald:200,400%7CLato:300,400,300italic,700%7CMontserrat:900">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/fonts.css">
</head>
<body>
    <div class="rd-navbar-brand"><a class="brand-name" href="index.php"><img class="logo-default" src="images/Logo_nav1.jpg" alt="" width="208" height=""/></a></div>
    <h2>Registro</h2>
    <form action="#" method="post">
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="apellido_paterno">Apellido Paterno:</label>
            <input type="text" id="apellido_paterno" name="apellido_paterno" required>
        </div>
        <div class="form-group">
            <label for="apellido_materno">Apellido Materno:</label>
            <input type="text" id="apellido_materno" name="apellido_materno" required>
        </div>
        <div class="form-group">
            <label for="correo">Correo Electrónico:</label>
            <input type="email" id="correo" name="correo" required>
        </div>
        <div class="form-group">
            <label for="matricula">Matrícula:</label>
            <input type="text" id="matricula" name="matricula" required>
        </div>
        <div class="form-group">
            <label for="contrasena">Contraseña:</label>
            <input type="password" id="contrasena" name="contrasena" required>
        </div>
        <div class="form-group">
            <label for="confirmar_contrasena">Confirmar Contraseña:</label>
            <input type="password" id="confirmar_contrasena" name="confirmar_contrasena" required>
        </div>
        <input type="submit" value="Registrarse">
    </form>
    <script>
        // Validar que las contraseñas coincidan
        const contrasenaInput = document.getElementById('contrasena');
        const confirmarContrasenaInput = document.getElementById('confirmar_contrasena');
        const mensajeError = document.getElementById('mensaje_error');

        confirmarContrasenaInput.addEventListener('keyup', function () {
            if (contrasenaInput.value !== confirmarContrasenaInput.value) {
                mensajeError.textContent = 'Las contraseñas no coinciden.';
            } else {
                mensajeError.textContent = '';
            }
        });
    </script>
</body>
</html>
