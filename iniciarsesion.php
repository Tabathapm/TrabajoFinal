<?php
session_start();

if(isset($_SESSION["usuario"]) ){
    header("location:pag-logueado.php");
    exit();
}

$usuario=isset($_POST['usuario'])?$_POST['usuario']:"";
$contraseña=isset($_POST['password'])?$_POST['password']:"";

if(validarUsuario($usuario,$contraseña)==true){

    $_SESSION["usuario"] = $usuario;
    header("location:pag-logueado.php");
    exit();

}else{
    header("location:index.php");
    exit();
}

function validarUsuario($usuario,$contraseña){

    include('conexion.php');

    $query="SELECT * 
    		FROM Empleado
    		WHERE usuario='".$usuario."' AND password='".$contraseña."' AND activo = '1'";

    $resultado= $con->query($query);

    if (mysqli_num_rows($resultado) > 0) {

        while($fila = mysqli_fetch_assoc($resultado)) {

            $usuarioDB= $fila['usuario'];
            $passwordDB =$fila['password'];

        }

        if($usuarioDB==$usuario && $passwordDB==$contraseña){

            return true;

        }
    }

    return false;

}