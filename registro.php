<?php
session_start();
require 'database/Connection.php';
require 'database/QueryBuilder.php';
require 'entity/Usuario.php';


try {
    //conexion con la bda
    $config= require_once 'app/config.php';
    $connection = Connection::make($config['database']);
    $queryBuilder = new QueryBuilder($connection,'usuarios', 'Usuario');

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $nombre = trim(htmlspecialchars($_POST['name']));
        $email = trim(htmlspecialchars($_POST['email']));
        $password = trim(htmlspecialchars($_POST['password1']));
        $password2 = trim(htmlspecialchars($_POST['password2']));

    $pass_cifrado = password_hash($password2, PASSWORD_DEFAULT);



        $usuario = new Usuario($nombre,$email,$pass_cifrado);
        $queryBuilder->save($usuario);

        header('Location:login.php');
    }
    $usuario = $queryBuilder->findAll();


}catch(QueryBuilderException $queryBuilderException) {
    $errores[]=$queryBuilderException->getMessage();
}



include 'views/registro.view.php';