<?php
session_start();
if( isset($_SESSION['usuario'])!="Pepe"){
    header("location:login.php");
} 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>


<body>
    <div class="container">
        <a href="admin.php"> Inicio</a> |
        <a href="carta.php"> carta</a> |
        <a href="cerrar.php"> Cerrar</a> |
        <br />