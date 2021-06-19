<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="w3.css">
    <title>Transportes La Matanza</title>
</head>
<body>

<!-- NAVBAR -->
<div class="w3-top">
    <div class="w3-bar w3-white w3-wide w3-padding w3-card">
        <a href="index.php" class="w3-bar-item w3-hover-none w3-button"><b>Transportes</b> La Matanza</a>

        <div class="w3-right w3-hide-small">
            <a href="#" class="w3-bar-item w3-button w3-hover-none w3-border-white w3-bottombar w3-hover-border-teal"
               onclick="document.getElementById('id01').style.display='block'" >Iniciar sesión</a>
            <a href="registrate.php" class="w3-bar-item w3-button w3-hover-none w3-border-white w3-bottombar w3-hover-border-teal">
                Registrate</a>
        </div>
    </div>
</div>

<div class="w3-content w3-wide" style="max-width: 100%; height: 105%; width: 100%;background-color: black; position: absolute;" id="home">
    <img src="public/img/fondo.jpg" width="100%" height="100%" class="w3-opacity-max">
    <div class="w3-display-middle w3-margin-top w3-center" style="height: 79%">

    <!---------------- FORMULARIO DE REGISTRO --------------------------------->
        <form class="w3-container w3-card-4 w3-light-grey" action="registrar-usuario.php" method="post">
            <h2>Registro</h2>

            <div class="w3-row-padding">
                <div class="w3-col s6">
                    <p>
                        <label for="nombre" class="w3-left">Nombre</label>
                        <input type="text" name="nombre" class="w3-input" required>
                    </p>
                </div>

                <div class="w3-col s6">
                    <p>
                        <label for="apellido" class="w3-left">Apellido</label>
                        <input type="text" name="apellido" class="w3-input" required>
                    </p>
                </div>

                <div class="w3-col s6">
                    <p>
                        <label for="dni" class="w3-left">D.N.I</label>
                        <input type="number" name="dni" class="w3-input" required>
                    </p>
                </div>

                <div class="w3-col s6">
                    <p>
                        <label for="fecha_nac" class="w3-left">Fecha de nacimiento</label>
                        <input type="date" name="fecha_nac" class="w3-input" required>
                    </p>
                </div>

                <div class="w3-col s6">
                    <p>
                        <label for="usuario" class="w3-left">Usuario</label>
                        <input type="text" name="usuario" class="w3-input" required>
                    </p>
                </div>

                <div class="w3-col s6">
                    <p>
                        <label for="password" class="w3-left">Contraseña</label>
                        <input type="password" name="password" class="w3-input" required>
                    </p>
                </div>

                <div class="w3-col s6" >
                    <p>
                        <label for="repassword" class="w3-left">Repetir contraseña</label>
                        <input type="password" name="repassword" class="w3-input" required>
                    </p>
                </div>

                <div class="w3-col s6">
                    <p>
                        <label for="email" class="w3-left">Email</label>
                        <input type="email" name="email" class="w3-input" required>
                    </p>
                </div>

                <div class="w3-col s5">
                    <p>
                        <label for="rol" class="w3-left">Rol</label>
                        <select class="w3-select" name="rol" required>
                            <option value="" disabled selected>Elige una opción</option>
                            <option value="chofer">Chofer</option>
                            <option value="supervisor">Supervisor</option>
                            <option value="encargadodeltaller">Encargado del taller</option>
                        </select>
                    </p>
                </div>

                <div class="w3-col m7 w3-margin-top">
                    <p>
                        <input class="w3-check" type="checkbox" name="terminos">
                        <label>Términos y condiciones.</label>
                    </p>
                </div>

                <div class="w3-row-padding">
                    <div class="w3-col s6 ">
                        <p>
                            <a class="w3-btn w3-red w3-block" href="index.php">Cancelar</a>
                        </p>
                    </div>

                    <div class="w3-col s6">
                        <p>
                            <button type="submit" class="w3-block w3-button w3-teal w3-wide" name="registrarme">Registrarme</button>
                        </p>
                    </div>
                </div>

            </div>
        </form>
    </div>
</div>


<!------- MODAL DE INICIO DE SESION ------->

<div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="width: 36%;">

        <div class="w3-card-4 w3-border w3-border-teal w3-round-large w3-center w3-display-middle w3-teal" style="width: 100%; margin-top: 45%">
            <span onclick="document.getElementById('id01').style.display='none'"
                  class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Cerrar">&times;</span>
            <div class="w3-container w3-center">
                <h3 class="w3-wide">INICIAR SESION</h3>
            </div>

            <div class="w3-container w3-border w3-border-white w3-round-large w3-margin w3-white w3-wide">
                <form action="iniciarsesion.php" method="post">
                    <p>
                        <label for="usuario" class="w3-left">Usuario</label>
                        <input type="text" name="usuario" class="w3-input">
                    </p>

                    <p>
                        <label for="password" class="w3-left">Contraseña</label>
                        <input type="password" name="password" class="w3-input">
                    </p>

                    <section>
                        <div class="w3-padding">
                            <span class="w3-center w3-text-blue w3-padding w3-hide-small"> <a href="#">Olvidé mi contraseña</a></span>
                        </div>
                        <a href="pag-logueado.php" class="w3-btn w3-block w3-teal w3-section w3-padding">INGRESAR</a>
                        <hr>
                        <div class="w3-padding-16">
                            <span class="w3-center w3-padding w3-hide-small">¿No tenés cuenta?
                            <a href="registrate.php" style="text-decoration: none">
                                <b>Registrate</b>
                            </a>
                        </span>
                        </div>
                    </section>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>
