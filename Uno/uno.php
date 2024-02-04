<?php
include_once('baraja_class.php');
include_once('carta_class.php');
include_once('partida_class.php');
include_once('jugador_class.php');

session_start();
if (!isset($_SESSION['partida'])) {
    $_SESSION['partida'] = new Partida(4);
    $_SESSION['partida']->RepartirCartas(7);
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Protest+Riot&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="img/LOGO.png">
    <title>UNO</title>
    <style>
        body {
            background-color: white;
            font-family: "Protest Riot", sans-serif;
            font-weight: 400;
            font-style: normal;
            margin: auto;
            text-align: center;
            background-color: #e6b150;
        }
    </style>
</head>

<body>
    <?php
    $_SESSION['partida']->Jugar();

    ?>