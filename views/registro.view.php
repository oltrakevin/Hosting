<html lang="es" class="translated-ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="imgs/favicon/logopng.png">
    <link href="css/css.css" rel="stylesheet">
    <title>Registro</title>
    <!--<link href="../../dist/css/bootstrap.min.css" rel="stylesheet">-->
    <!-- BootstrapCDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" charset="UTF-8" href="https://translate.googleapis.com/translate_static/css/translateelement.css">
</head>

<body class="text-center">
    <form class="text-left" method="post" style="width: 400px; margin: auto">
        <h1 class="h3 mb-4 font-weight-normal text-center">Registrarse</h1>
        <div class="form-group">
            <label for="name">Nombre completo</label>
            <input type="text" class="form-control" id="name" name="name" value="" placeholder="Joe Doe">
        </div>
        <div class="form-group">
            <label for="email">Correo electrónico</label>
            <input type="email" class="form-control" id="email" name="email" value="" placeholder="example@mail.com">
        </div>
        <div class="form-group">
            <label for="password1">Contraseña</label>
            <input type="password" class="form-control" id="password1" name="password1" value="" placeholder="********">
        </div>
        <div class="form-group">
            <label for="password2">Confirme la contraseña</label>
            <input type="password" class="form-control" id="password2" name="password2" value="" placeholder="********">
        </div>


        <button class="btn btn-lg btn-primary btn-block" type="submit">Registrarse</button>
        <div class="mt-4 text-center">
            <a href="login.php">¿Dispone de una cuenta? Inicie sesión</a>
        </div>
        <div class="mt-4 text-center">
            <a href="destruirSesion.php">Destruir Sesion</a>
        </div>
        <?php// var_dump($_SESSION['usuarios']); ?>
    </form>
    <?php
    echo "<br>";
    echo "USUARIOS_____   ";
    var_dump($_SESSION['usuarios']);
    echo "<br>";
    echo "SESION INICIADA_____   ";
    var_dump($_SESSION['sesioniniciada']);
    echo "<br>";

    echo "ERRORES==>  ";
    //var_dump($errores);
    if(isset($errores)){
        foreach ($errores as $error){
            echo "<li> $error </li>";
        }
    }
    ?>
</html>