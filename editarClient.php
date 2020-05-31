<?php
session_start();
require 'database/Connection.php';
require 'database/QueryBuilder.php';
require 'entity/client.php';
$client=NULL;

        //conexion con la bda
        $config= require_once 'app/config.php';
        $connection = Connection::make($config['database']);
        $queryBuilder = new QueryBuilder($connection,'clients', 'Client');
        $client = $queryBuilder->findById($_GET['id']);
        var_dump($client);

//        $id = $_GET['id'];
//        echo $id;
//        $client = $queryBuilder->findById($id);
//        echo $client->toArray();
        if (isset($_POST['addClient']) && $_SERVER['REQUEST_METHOD'] === 'POST') {

            $dni = trim(htmlspecialchars($_POST['dni'])) ?: '';
            $nom = trim(htmlspecialchars($_POST['nom'])) ?: '';
            $cognoms = trim(htmlspecialchars($_POST['cognoms']));
            $email = trim(htmlspecialchars($_POST['email']));
            $telefon = trim(htmlspecialchars($_POST['telefon']));
            $adreca = trim(htmlspecialchars($_POST['adreca']));
            $localitat = trim(htmlspecialchars($_POST['localitat']));
            $cp = trim(htmlspecialchars($_POST['cp']));
            $pais = trim(htmlspecialchars($_POST['pais']));
            $domini = trim(htmlspecialchars($_POST['domini']));
            $ipAddress = trim(htmlspecialchars($_POST['ipAddress']));
            $dataAlta = trim(htmlspecialchars($_POST['dataAlta']));

            $client->setDni($dni);
            $client->setNom($nom);
            $client->setCognoms($cognoms);
            $client->setEmail($email);
            $client->setTelefon($telefon);
            $client->setAdreca($adreca);
            $client->setLocalitat($localitat);
            $client->setCp($cp);
            $client->setPais($pais);
            $client->setDomini($domini);
            $client->setIpAddress($ipAddress);
            $client->setDataAlta($dataAlta);

            $queryBuilder->update($client);

        }



include "views/editarClient.view.php";