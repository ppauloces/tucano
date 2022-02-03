<?php
include __DIR__ . '/../funcoes/sessao.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    <title>Dashboard Sidebar Menu</title> 
</head>
<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="../img/tucano-icone.png" alt="">
                </span>

                <div class="text logo-text">
                    <span class="name"><?php echo $row_usuario['nome_usuario']; ?></span>
                    <span class="profession">Web developer</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">
                
            <ul class="menu-links">
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text" style="font-size: 15px;">Página Inicial</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-bell icon'></i>
                            <span class="text nav-text" style="font-size: 15px;">Notificações</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-user icon' ></i>
                            <span class="text nav-text" style="font-size: 15px;">Perfil</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-cog icon' ></i>
                            <span class="text nav-text" style="font-size: 15px;">Configurações</span>
                        </a>
                    </li>

                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="<?php echo $_SERVER['PHP_SELF']."?doLogout=true";?>">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Sair</span>
                    </a>
                </li>

                
            </div>
        </div>

    </nav>

    <section class="home">
        <div class="text">Página Inicial</div>
    </section>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/script.js"></script>

</body>
</html>