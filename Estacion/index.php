<?php

include_once 'estacion.class.php';
require 'smarty-4.2.1\libs\Smarty.class.php';
session_start();

?>
<!DOCTYPE html>
<html lang="es">

<head>
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Protest+Guerrilla&display=swap" rel="stylesheet">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" type="image/x-icon" href="imagenes/locomotora.png">
   <title>Locomotora</title>
   <style>
      body {
         padding-top: 2%;
         background-color: white;
         font-family: "Protest Guerrilla", sans-serif;
         font-weight: 400;
         font-style: normal;
         margin: auto;
         text-align: center;
         background-color: #b8b7b6;
      }

      #viajeros {
         font-size: 1.5em;
         width: 100%;
         margin-top: 3%;
      }
   </style>
</head>

<body>
   <h1>Estación de tren</h1>
   <?php

   // si no esta seteada la sesion estacion la seteas y me creas sesion viajeros i estacoin que es un objeto Estacion.
   if (!isset($_SESSION['estacion']) && !isset($_SESSION['viajeros'])) {
      $_SESSION['viajeros'] = 0;

      $_SESSION['estacion'] = new Estacion();
   }

   if (isset($_REQUEST['tren']) && isset($_REQUEST['vagon'])) {
      $tren = $_GET['tren'];
      $vagon = $_GET['vagon'];

      if ($_SESSION['estacion']->trenes[$tren]->vagones[$vagon]->personas > 10) {
         $_SESSION['estacion']->trenes[$tren]->vagones[$vagon]->personas -= 10;

         $_SESSION['viajeros'] = $_SESSION['viajeros'] + 10;
      }
   }
   // nuevo tren (reset trenes dnadole a la locomotra)
   if (isset($_REQUEST['locomoto'])) {
      $_SESSION['estacion']->trenes[$_REQUEST['locomoto']] =  $_SESSION['estacion']->nuevoTren();
   }
   $_SESSION['estacion']->pintaTrenes();
   echo '<div id="viajeros"> Viajeros: ' . '<br>' . $_SESSION['viajeros'] . '</div>';
