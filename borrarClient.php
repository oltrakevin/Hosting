<?php
require 'database/Connection.php';
require 'database/QueryBuilder.php';
require 'entity/client.php';

$usuario=isset($_SESSION['usuario']) ? unserialize($_SESSION['usuario']):NULL;
echo 'test';

$id=$_GET['id'];
//if ($_SERVER['REQUEST_METHOD']=== 'POST') {
    echo 'test';
//    if ($usuario == NULL){
        //   header('Location:login.process.php');
        // die();
//        echo 'error';
//    }else{

        $errores=[];
        try {
            //conexion con la bda
            $config= require_once 'app/config.php';
            $connection = Connection::make($config['database']);
            $queryBuilder = new QueryBuilder($connection,'clients', 'Client');

            if (!isset($id)) echo 'error';
            else{

                $client = $queryBuilder->findById($id);
                var_dump($client);
                $queryBuilder->delete($client);
//                echo 'success';
                header('Location:clients.php');

            }

        }catch(QueryBuilderException $queryBuilderException) {
            $errores[]=$queryBuilderException->getMessage();
        }
//    }

