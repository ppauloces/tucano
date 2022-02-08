<?php
?>

<div class="sidebar">
    <div class="logo_content">
        <div class="logo">
        <img src="../img/tucano-icone.png" alt="" width="50px">
            <div class="logo_name">Tucano</div>
        </div>
        
    </div>
    <ul class="nav_list">
        <li>
            <a href="#">
                <i class="bx bx-grid-alt"></i>
                <span class="links_name">Dashboard</span>
            </a>
            <!--<span class="tooltip">Dashboard</span>-->
        </li>
        <li>
            <a href="#">
                <i class="bx bx-user"></i>
                <span class="links_name">Perfil</span>
            </a>
            <!--<span class="tooltip">Dashboard</span>-->
        </li>
        <li>
            <a href="#">
                <i class="bx bx-chat"></i>
                <span class="links_name">Mensagens</span>
            </a>
            <!--<span class="tooltip">Dashboard</span>-->
        </li>
        <li>
            <a href="#">
                <i class='bx bxs-bell' ></i>
                <span class="links_name">Notificações</span>
            </a>
            <!--<span class="tooltip">Dashboard</span>-->
        </li>
        <li>
            <a href="#">
                <i class="bx bx-heart"></i>
                <span class="links_name">Salvos</span>
            </a>
            <!--<span class="tooltip">Dashboard</span>-->
        </li>
        <li>
            <a href="#">
                <i class="bx bx-cog"></i>
                <span class="links_name">Configurações</span>
            </a>
            <!--<span class="tooltip">Dashboard</span>-->
        </li>
    </ul>
    <div class="profile_content">
        <div class="profile">
            <div class="profile_details">
                <img src="../img/tucano-icone.png" alt="">
                <div class="name_job">
                    <div class="name">Paulo</div>
                    <div class="job">Web Developer</div>
                </div>
            </div>
            <a href="<?php echo $_SERVER['PHP_SELF']."?doLogout=true";?>" style="color: #fff;"><i class="bx bx-log-out" id="log_out"></i></a>
        </div>
    </div>
</div>

<script>
    let btn = document.querySelector("#btn");
    let sidebar = document.querySelector(".sidebar");

    btn.onclick = function(){
       sidebar.classList.toggle("active");
    }
</script>