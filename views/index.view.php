<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simple Sidebar - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
</head>
<body>
<div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <?php include "partials/menu.partial.php";   ?>

    <!-- /#sidebar-wrapper -->
    <div id="page-content-wrapper">

        <?php include "partials/nav.partial.php";   ?>

        <div class="container-fluid">
            <h1 class="mt-4">Plataforma de hosting de próxima generación</h1>
            <p>Hosting web de calidad superior
                Hostinger ofrece hosting web de vanguardia, características de rendimiento premium y un equipo de soporte profesional disponible 24/7. Se testigo de las potentes funciones que hacen de Hostinger un líder del alojamiento web rápido y económico.</p>
            <img src="https://www.redeszone.net/app/uploads-redeszone.net/2019/10/caracteristicas-hosting-web.jpg" alt="">
        </div>
    </div>
    <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>
<?php include "partials/footer.partial.php";   ?>
</body>

</html>
