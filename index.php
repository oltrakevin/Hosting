<?php
session_start();
require 'database/Connection.php';
require 'database/QueryBuilder.php';
require 'entity/Usuario.php';


//if (!isset($_SESSION['sesioniniciada']))
//    header('Location:login.php');


include "views/index.view.php";