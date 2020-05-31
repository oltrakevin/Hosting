<html lang="es" class="translated-ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="imgs/favicon/logopng.png">
    <link href="css/css.css" rel="stylesheet">
    <title>Login</title>
    <!--<link href="../../dist/css/bootstrap.min.css" rel="stylesheet">-->

    <!-- BootstrapCDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" charset="UTF-8" href="https://translate.googleapis.com/translate_static/css/translateelement.css">
</head>


<body class="text-center">

    <form class="text-left" action="<?= $_SERVER['PHP_SELF']?>" method="post" style="width: 400px; margin: auto">
        <h1 class="h3 mb-4 font-weight-normal text-center">Iniciar sesión</h1>
        <div class="form-group">
            <label for="email">Correo electrónico</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="example@mail.com">
        </div>
        <div class="form-group">
            <label for="password1">Contraseña</label>
            <input type="password" class="form-control" id="password1" name="password1" placeholder="********">
        </div>
        <!--<div class="color">
            <span class="color">Enter color</span>
            <input class="color" type="color" name="color" value="#bec3ed">
        </div>-->
        <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Acceder</button>
        <div class="mt-4 text-center">
            <a href="registro.php">¿No dispone de una cuenta? Regístrese</a>
        </div>
    </form>
<!--    --><?php
    var_dump($_SESSION['usuario']);
    echo "<br>";
    var_dump($_SESSION['usuarios']);
//    var_dump($_SESSION['usuarios']);
//    echo "<br>";
//
//    echo "_______";
//    echo "<br>";
//    echo "____sesioniniciada___";
//    var_dump($_SESSION['sesioniniciada']);
//    ?>


<!--
<form class="form-signin">
    <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Por favor, registrese</font></font></h1>
    <div>
    <label for="inputEmail" class="sr-only"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dirección de correo electrónico</font>aaa</font></label>
    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
    </div>
    <div>
    <label for="inputPassword" class="sr-only"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contraseña</font></font></label>
    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
    </div>
    <div class="checkbox mb-3">
        <label>
            <input type="checkbox" value="remember-me"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Recuérdame
                </font></font></label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Registrarse</font></font></button>
    <p class="mt-5 mb-3 text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">© 2017-2018</font></font></p>
</form><div id="goog-gt-tt" class="skiptranslate" dir="ltr"><div style="padding: 8px;"><div><div class="logo"><img src="https://www.gstatic.com/images/branding/product/1x/translate_24dp.png" width="20" height="20" alt="Google Traductor de Google"></div></div></div><div class="top" style="padding: 8px; float: left; width: 100%;"><h1 class="title gray">Texto original</h1></div><div class="middle" style="padding: 8px;"><div class="original-text"></div></div><div class="bottom" style="padding: 8px;"><div class="activity-links"><span class="activity-link">Sugiere una traducción mejor</span><span class="activity-link"></span></div><div class="started-activity-container"><hr style="color: #CCC; background-color: #CCC; height: 1px; border: none;"><div class="activity-root"></div></div></div><div class="status-message" style="display: none;"></div></div>

<div class="goog-te-spinner-pos"><div class="goog-te-spinner-animation"><svg xmlns="http://www.w3.org/2000/svg" class="goog-te-spinner" width="96px" height="96px" viewBox="0 0 66 66"><circle class="goog-te-spinner-path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle></svg></div></div></body>
-->
</html>