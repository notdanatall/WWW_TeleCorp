<nav class="navbar navbar-expand-lg bg-dark border-bottom fixed border-body" data-bs-theme="dark">
    <div class="container-fluid">
        <!-- Dropdown for the list icon -->
        <div class="nav-item dropdown">  
            <a class="nav-link fs-2" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-list"
                style="color: balck;"
                   onmouseover="this.style.color='darkgrey'" 
                   onmouseout="this.style.color='black'"></i>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="index.php">Hlavní menu</a></li>
                <li><a class="dropdown-item" href="services.php">Služby</a></li>
                <li><a class="dropdown-item" href="contact.php">Kontaktujte nás</a></li>
                <li><a class="dropdown-item" href="team.php">Náš tým</a></li>
                <li class="dropdown-divider"></li>
                <?php
                        if(!empty($_SESSION["logged_user"])){

                                $user = unserialize($_SESSION["logged_user"]);

                                echo('<li class="text-center">' . '<i class="bi bi-person"></i>' . ' ' . $user->first_name . ' ' . $user->last_name . '</li>');
                                echo('<li> <a class="dropdown-item" href="orders.php">Objednávky</a></li>');
                                echo('<li><a class="dropdown-item red" href="logout.php">Odhlásit se</a></li>');
                        } else{
                                echo('<li class="text-center">' . "Neznámý uživatel" . '</li>');
                                echo('<li><a class="dropdown-item" href="login.php">Přihlásit se</a></li>');
                                echo('<li><a class="dropdown-item" href="register.php">Registrovat se</a></li>');
                        }
                
                ?>
            </ul>
        </div>
        <!-- Logo-->
        <div>
                <a class="navbar-brand" href="index.php">
                        <img src="img/logofirmy.webp" alt="Telecorp" width="53" height="30" class="d-inline-block align-text-top">
                        <img src="img/logotext.webp" alt="Telecorp" width="139" height="30" class="d-inline-block align-text-top">
                </a>
        </div>
    </div>
</nav>
