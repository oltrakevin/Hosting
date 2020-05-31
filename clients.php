<?php
session_start();
require 'database/Connection.php';
require 'database/QueryBuilder.php';
require 'entity/client.php';

//if (!isset($_SESSION['sesioniniciada']))
//    header('Location:login.php');

$contactos=[];
try {
    //conexion con la bda
    $config = require_once 'app/config.php';
    $connection = Connection::make($config['database']);
    $queryBuilder = new QueryBuilder($connection,'clients', 'Client');
    $clients = $queryBuilder->findAll();

}catch(QueryBuilderException $queryBuilderException) {
    $errores[]=$queryBuilderException->getMessage();
}

include "views/clients.view.php";