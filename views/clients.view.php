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

    <!-- Page Content -->
    <div id="page-content-wrapper">

        <?php include "partials/nav.partial.php";   ?>

        <div class="container-fluid">
            <h1 class="mt-4">Clients</h1>
            <div>
                <a class="btn btn-primary " href="añadirClient.php" >Añadir Cliente</a>
<!--                <a class="btn btn-primary " href="pdf.php" >Generar PDF</a>-->
            </div>
            <br>
            <table class='table table-striped' style=' width: auto'>
                <thead>
                <tr>
                    <th scope="col">B</th>
                    <th scope="col">E</th>
                    <th scope="col">idclient</th>
                    <th scope="col">Dni</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Cognoms</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telefon</th>
                    <th scope="col">Adreça</th>
                    <th scope="col">Localitat</th>
                    <th scope="col">CP</th>
                    <th scope="col">Pais</th>
                    <th scope="col">Domini</th>
                    <th scope="col">IP Address</th>
                    <th scope="col">Data Alta</th>
                    <th scope="col">PlaHsting</th>
                </tr>
                </thead>
                <?php foreach ($clients as $client) {?>
                    <tr>
                        <td><a href=" <?="borrarClient.php?id=" . $client->getIdclient()?> ">B<i class="fas fa-trash-alt"></i></a></td>
                        <td><a href=" <?="editarClient.php?id=" . $client->getIdclient()?> ">E<i class="fas fa-edit"></i></a></td>
                        <td><?= $client->getIdclient() ?></td>
                        <td><?= $client->getDni() ?></td>
                        <td><?= $client->getNom() ?></td>
                        <td><?= $client->getCognoms() ?></td>
                        <td><?= $client->getEmail() ?></td>
                        <td><?= $client->getTelefon() ?></td>
                        <td><?= $client->getAdreca() ?></td>
                        <td><?= $client->getLocalitat() ?></td>
                        <td><?= $client->getCp() ?></td>
                        <td><?= $client->getPais() ?></td>
                        <td><?= $client->getDomini() ?></td>
                        <td><?= $client->getIpAddress() ?></td>
                        <td><?= $client->getDataAlta() ?></td>
                        <td><?= $client->getPlaHosting() ?></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
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
