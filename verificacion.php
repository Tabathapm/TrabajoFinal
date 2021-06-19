<?php

if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash'])){
    $email = mysqli_escape_string($_GET['email']);
    $hash = mysqli_escape_string($_GET['hash']);

    $consulta = "SELECT email, hash, activo 
                 FROM Empleado 
                 WHERE email='".$email."' AND hash='".$hash."' AND activo='0'";

    $rta = mysqli_num_rows($consulta);

    if ($rta > 0){
        mysqli::_query("UPDATE Empleado 
                        SET active='1' 
                        WHERE email='".$email."' AND hash='".$hash."' AND active='0'");

        $msj = "Su cuenta ya fue verifíquela, ahora ya puede iniciar sesión.";

        include ('index.php');
        echo "<div class='w3-panel w3-green w3-display-container w3-card-4' style='margin-top: 4%'>                      
                            <span onclick='this.parentElement.style.display = "."none"."'
                            class='w3-button w3-large w3-display-topright' title='Cerrar'>×</span>
                            <p> $msj </p>
                      </div>";
    }else{
        $msj = "La URL no es válida o ya ha activado su cuenta.";

        include ('index.php');
        echo "<div class='w3-panel w3-green w3-display-container w3-card-4' style='margin-top: 4%'>                      
                            <span onclick='this.parentElement.style.display = "."none"."'
                            class='w3-button w3-large w3-display-topright' title='Cerrar'>×</span>
                            <p> $msj </p>
                      </div>";
    }

}else{
    $msj = "Enfoque no válido, utilice el enlace que se ha enviado a su correo electrónico.";

    include ('index.php');
    echo "<div class='w3-panel w3-green w3-display-container w3-card-4' style='margin-top: 4%'>                      
                            <span onclick='this.parentElement.style.display = "."none"."'
                            class='w3-button w3-large w3-display-topright' title='Cerrar'>×</span>
                            <p> $msj </p>
                      </div>";
}
