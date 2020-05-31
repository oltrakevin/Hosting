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

    <form class="text-left" method="post" style="margin:auto; width: 800px; " enctype="multipart/form-data" ">
        <h1 class="h3 mb-4 font-weight-normal text-center">Añadir Client</h1>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="dni">DNI</label>
                    <input type="text" class="form-control " id="dni" name="dni" >
                </div>
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control " id="nom" name="nom" >
                </div>
                <div class="form-group">
                    <label for="cognoms">Cognoms</label>
                    <input type="text" class="form-control " id="cognoms" name="cognoms" >
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control " id="email" name="email" >
                </div>
                <div class="form-group">
                    <label for="telefon">Telefon</label>
                    <input type="text" class="form-control " id="telefon" name="telefon" >
                </div>
                <div class="form-group">
                    <label for="adreca">Adreça</label>
                    <input type="text" class="form-control " id="adreca" name="adreca" >
                </div>
                <div class="form-group">
                    <label for="localitat">Localitat</label>
                    <input type="text" class="form-control " id="localitat" name="localitat" >
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="cp">Codigo Postal</label>
                    <input type="text" class="form-control " id="cp" name="cp" >
                </div>
                <div class="form-group">
                    <label for="pais">Pais</label>
                    <input type="text" class="form-control " id="pais" name="pais" >
                </div>
                <div class="form-group">
                    <label for="domini">Domini</label>
                    <input type="text" class="form-control " id="domini" name="domini" >
                </div>
                <div class="form-group">
                    <label for="ipAddress">IP Address</label>
                    <input type="text" class="form-control " id="ipAddress" name="ipAddress" >
                </div>
                <div class="form-group">
                    <label for="dataAlta">Data Alta</label>
                    <input type="text" class="form-control " id="dataAlta" name="dataAlta" >
                </div>
                <div class="form-group">
                    <label for="plaHosting">Pla Hosting</label>
                    <input type="text" class="form-control " id="plaHosting" name="plaHosting"">
                </div>
            </div>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Añadir Client</button>
    </form>
    </div>
    </div>
</body>

</html>