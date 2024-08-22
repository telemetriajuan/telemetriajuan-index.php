<?php
  header('Access-Control-Allow-Origin: *');
    require_once 'accesoBD.php';

  $objectResponse = new stdClass();
  date_default_timezone_set("UTC");

    $objectResponse = accesoBD::leerDatos();
    echo(json_encode($objectResponse));
?>
