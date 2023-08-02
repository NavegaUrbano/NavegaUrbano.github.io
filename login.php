<!DOCTYPE html>
<html class="wide wow-animation" lang="en"> 
  <head>
    <!-- Site Title-->
    <title>Iniciar Sesion</title>
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
    <h2>Iniciar Sesión</h2>
    <form action="#" method="post">
      <div class="form-group">
        <label for="matricula">Matrícula:</label>
        <input type="text" id="matricula" name="matricula" required>
      </div>
      <div class="form-group">
        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena" required>
      </div>
      <br>
      <input type="submit" value="Iniciar Sesión">
    </form>
    <br>
    <button onclick="location.href='registro.php'">Registrarse</button>
  </body>
</html>
