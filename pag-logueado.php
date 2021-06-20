<?php

//echo "Si funciona :)";?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ===== BOX ICONS ===== -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="public/css/styles.css">
    
    <title>tpFinal</title>
</head>

<body id="body-pd">

     <header class="header" id="header">
        <div class="header__toggle">
            <i class='bx bx-menu' id="header-toggle"></i>
        </div>

        <div class="header__img">
            <img src="views/img/perfil.jpg" alt="">
        </div>
    </header>

    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <a href="#" class="nav__logo">
                    <i class='bx bx-layer nav__logo-icon'></i>
                    <span class="nav__logo-name">Logo</span>
                </a>

                <div class="nav__list">
                    <a href="main" class="nav__link">
                        <i class='bx  bx-home  nav__icon'></i>
                        <span class="nav__name">Messages</span>
                    </a>

                    <a href="ayuda.html" class="nav__link">
                        <i class='bx bx-message-square-detail nav__icon'></i>
                        <span class="nav__name">Users</span>
                    </a>

                    <a href="pagina2.html" class="nav__link">
                        <i class='bx bx-message-add nav__icon'></i>
                        <span class="nav__name">Dashboard</span>
                    </a>

                    <a href="pagina3.html" class="nav__link">
                        <i class='bx bx-medal nav__icon'></i>
                        <span class="nav__name">Data</span>
                    </a>

                    <a href="pagina4.html" class="nav__link">
                        <i class='bx bx-user nav__icon'></i>
                        <span class="nav__name">Favorites</span>
                    </a>
                </div>
            </div>
            

            <a href="index.php" class="nav__link">
                <i class='bx bx-log-out nav__icon'></i>
                <span class="nav__name">Log Out</span>
            </a>
        </nav>
    </div>



    <h1>index</h1>
    
    <!--===== MAIN JS =====-->
    
    <script src="public/js/main.js"></script>
</body>

</html>

