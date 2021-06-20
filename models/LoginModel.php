<?php

class LoginModel{

	private $database;

	public function __construct($database){

   	$this->database=$database;

	}

	public function validarUsuario($user,$pass){

     $query="SELECT * 
    		FROM Empleado
    		WHERE usuario='".$usuario."' AND password='".$contraseña."' AND activo = '1'";


	return $this->database->query($query);


}

}
