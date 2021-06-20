

<?php

session_start();

require_once("helper/Configuracion.php");

include_once("views/partial/header.php");
include_once("views/partial/modal.php");


Configuracion::crearDataBase();
Configuracion::crearLoginModel();
Configuracion::crearLoginController();

?>