<?php
session_start();
require 'database/Connection.php';
require 'database/QueryBuilder.php';
require 'entity/Usuario.php';

if ($_SERVER['REQUEST_METHOD']=== 'POST') {
    //var_dump($_POST);
    $email = trim(htmlspecialchars($_POST['email']));
    $password = trim(htmlspecialchars($_POST['password1']));

    try {
        //conexion con la bda
        $config = require_once 'app/config.php';
        $connection = Connection::make($config['database']);
        $queryBuilder = new QueryBuilder($connection, 'usuarios', 'Usuario');
        $usuarios = $queryBuilder->getUser($email);

//        ,password_hash($password, PASSWORD_DEFAULT)
        //var_dump($usuarios);

        foreach ($usuarios as $usuario) {

            if (password_verify($password, $usuario->getPassword())) {
                $_SESSION['usuario'] = serialize($usuario);// cambia objeto a string

                header('Location:index.php');
                die();
            }
        }

    } catch (QueryBuilderException $queryBuilderException) {
        $errores[] = $queryBuilderException->getMessage();
    }
}

//var_dump($_SESSION['usuarios']);

    require "views/login.view.php";