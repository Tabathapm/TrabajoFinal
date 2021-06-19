<?php
    $usuario="root";
    $password="";
    $servidor="localhost";
    $nombrebasedatos="transportesunlam";
    $con= new mysqli($servidor,$usuario,$password,$nombrebasedatos)or die("error de conexion".mysql_error());