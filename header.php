<header>
    <nav class="nav-bar">
        <div class="logo">
            <a href="index.php">
                <img src="assets/img/logo2.png" alt="logo2" class="logo">
            </a>
        </div>
        <div class="nav-list">
            <ul class="navvv">
                <li class="nav-item"><a href="index.php"
                        class="<?php echo $currentPage === 'Inicio' ? 'current-page' : 'nav-link1' ?>">Inicio</a></li>
                <li class="nav-item"><a href="sobrenos.php"
                        class="<?php echo $currentPage === 'Sobre Nós' ? 'current-page' : 'nav-link1' ?>">Sobre Nós</a>
                </li>
                <li class="nav-item"><a href="projetos.php"
                        class="<?php echo $currentPage === 'Projetos' ? 'current-page' : 'nav-link1' ?>">Projetos</a>
                </li>
                <li class="nav-item"><a href="contato.php"
                        class="<?php echo $currentPage === 'Contato' ? 'current-page' : 'nav-link1' ?>">Contato</a></li>
            </ul>
        </div>

        <div class="login-button">
            <button><a href="login.php">Entrar</a></button>
        </div>

        <div class="mobile-menu-icon">
            <button onclick="menuShow()"><img class="icon" src="assets/img/menu_white_36dp.svg" alt="img-icon"></button>
        </div>
    </nav>

    <div class="mobile-menu">
        <ul class="navvv">
            <li class="nav-item"><a href="index.php"
                    class="<?php echo $currentPage === 'Inicio' ? 'current-page' : 'nav-link1' ?>">Inicio</a></li>
            <li class="nav-item"><a href="sobrenos.php"
                    class="<?php echo $currentPage === 'Sobre Nós' ? 'current-page' : 'nav-link1' ?>">Sobre Nós</a>
            </li>
            <li class="nav-item"><a href="projetos.php"
                    class="<?php echo $currentPage === 'Projetos' ? 'current-page' : 'nav-link1' ?>">Projetos</a>
            </li>
            <li class="nav-item"><a href="contato.php"
                    class="<?php echo $currentPage === 'Contato' ? 'current-page' : 'nav-link1' ?>">Contato</a></li>
        </ul>

        <div class="login-button">
            <button><a href="login.php">Entrar</a></button>
        </div>
    </div>
</header>