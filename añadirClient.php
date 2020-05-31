<?php
session_start();
require 'database/Connection.php';
require 'database/QueryBuilder.php';
require 'entity/client.php';

    try {
        //conexion con la bda
        $config= require_once 'app/config.php';
        $connection = Connection::make($config['database']);
        $queryBuilder = new QueryBuilder($connection,'clients', 'Client');

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

//    $id = trim(htmlspecialchars($_POST['id'])) ?: '';
            $dni = trim(htmlspecialchars($_POST['dni']));
            $nom = trim(htmlspecialchars($_POST['nom']));
            $cognoms = trim(htmlspecialchars($_POST['cognoms']));
            $email = trim(htmlspecialchars($_POST['email']));
            $telefon = trim(htmlspecialchars($_POST['telefon']));
            $adreca= trim(htmlspecialchars($_POST['adreca']));
            $localitat = trim(htmlspecialchars($_POST['localitat']));
            $cp = trim(htmlspecialchars($_POST['cp']));
            $pais = trim(htmlspecialchars($_POST['pais']));
            $domini = trim(htmlspecialchars($_POST['domini']));
            $ipAddress= trim(htmlspecialchars($_POST['ipAddress']));
            $dataAlta = trim(htmlspecialchars($_POST['dataAlta']));

        $client1 = new Client($dni,$nom,$cognoms,$email,$telefon,$adreca,$localitat,$cp,$pais,$domini,$ipAddress,$dataAlta);
        $queryBuilder->save($client1);

        header('Location:clients.php');
        }
        $clients = $queryBuilder->findAll();


    }catch(QueryBuilderException $queryBuilderException) {
        $errores[]=$queryBuilderException->getMessage();
    }


include "views/añadirClient.view.php";