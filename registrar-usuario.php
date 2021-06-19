<?php
include('conexion.php');

if (isset($_POST['registrarme'])){
    $nombre = isset( $_POST["nombre"])?$_POST["nombre"] : "";
    $apellido = isset( $_POST["apellido"])?$_POST["apellido"] : "";
    $dni = isset( $_POST["dni"])?$_POST["dni"] : "";
    $fecha_nac = isset( $_POST["fecha_nac"])?$_POST["fecha_nac"] : "";
    $usuario = isset( $_POST["usuario"])?$_POST["usuario"] : "";
    $password = isset( $_POST["password"])?$_POST["password"] : "";
    $repass = isset( $_POST["repassword"])?$_POST["repassword"] : "";
    $email = isset( $_POST["email"])?$_POST["email"] : "";

    $rol = strtolower($_POST['rol']);

    if (isset($_POST["terminos"])){
        if ($repass == $password){
            if (buscarUsuario($usuario) == false){
                if (isset($rol)){
                    $hash = md5(rand(1,100));
                    $usuarioCompleto = "INSERT INTO Empleado (dni ,nombre ,apellido ,fecha_nac ,usuario ,password ,email ,rol, hash)
                            VALUES ('$dni', '$nombre', '$apellido', '$fecha_nac', '$usuario', '$password', '$email', '$rol', '$hash')";

                    $resultado = $con->query($usuarioCompleto);

                    $msj = "Su cuenta ha sido creada, verifíquela haciendo clic en el enlace de activación que se le 
                            ha enviado a su correo electrónico.";

                    $para = $email;
                    $asunto = "Registrarse | Verificación";
                    $mensaje = "
                    
                    Gracias por registrarte!
                    Tu cuenta ha sido creada, puede iniciar sesión con las siguientes credenciales después de haber 
                    activado su cuenta presionando la URL a continuación.
                    
                    ------------------------
                    Usuario: '.$usuario.'
                    Contraseña: '.$password.'
                    ------------------------
                    
                    Haga clic en este enlace para activar su cuenta:
                    http://localhost/TrabajoFinal/verificacion.php?email='.$email.'&hash='.$hash.'                    
                    ";

                    $encabezado = 'From:transporteslamatanza@gmail.com' . "\r\n";
                    mail($para, $asunto, $mensaje, $encabezado);

                    include ('index.php');
                    echo "<div class='w3-panel w3-green w3-display-container w3-card-4' style='margin-top: 4%'>                      
                            <span onclick='this.parentElement.style.display = "."none"."'
                            class='w3-button w3-large w3-display-topright' title='Cerrar'>×</span>
                            <p> $msj </p>
                      </div>";




                }else{
                    include ('registrate.php');
                    echo "<div class='w3-panel w3-red w3-display-container w3-card-4' style='margin-top: 4%'>
                            <span onclick='this.parentElement.style.display = "."none"."'
                            class='w3-button w3-large w3-display-topright' title='Cerrar'>×</span>
                            <p>Debe seleccionar un Rol.</p>
                      </div>";
                }
            }else{
                include ('registrate.php');
                echo "<div class='w3-panel w3-red w3-display-container w3-card-4' style='margin-top: 4%'>
                            <span onclick='this.parentElement.style.display = "."none"."'
                            class='w3-button w3-large w3-display-topright' title='Cerrar'>×</span>
                            <p>Usuario ya registrado.</p>
                      </div>";
            }
        }else{
            include ('registrate.php');
            echo "<div class='w3-panel w3-red w3-display-container w3-card-4' style='margin-top: 4%'>
                            <span onclick='this.parentElement.style.display = "."none"."'
                            class='w3-button w3-large w3-display-topright' title='Cerrar'>×</span>
                            <p>Las contraseñas no son iguales.</p>
                      </div>";
        }
    }else{
        include ('registrate.php');
        echo "<div class='w3-panel w3-red w3-display-container w3-card-4' style='margin-top: 4%'>
                            <span onclick='this.parentElement.style.display = "."none"."'
                            class='w3-button w3-large w3-display-topright' title='Cerrar'>×</span>
                            <p>Debe aceptar los Términos y Condiciones.</p>
                      </div>";
    }
}


/****************************************************************************************/

function buscarUsuario($u){

    include('conexion.php');

    $query="SELECT * 
    		FROM Empleado
    		WHERE usuario='$u'";

    $resultado2= $con->query($query);

    if (mysqli_num_rows($resultado2) > 0) {
        while($fila = mysqli_fetch_assoc($resultado2)) {
            $usuarioDB= $fila['usuario'];
        }
        if($usuarioDB == $u){
            return true;
        }
    }
    return false;
}