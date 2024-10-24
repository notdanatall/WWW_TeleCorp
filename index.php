<?php require "head.php"; ?>
<html>
    <body>
        <?php 
            require_once "menu.php"; 
            require_once "social-media.php";
        ?>            
        <div class="image-container landpage-pic  ">
            <h1 class="overlay-text"><b>Teleslogan here</b></h1>
        </div>
        <div class="main">
            <h2>O nás</h2>
            <p>
                Jsme studentská firma z Střední školy teleinformatiky, a zabýváme se výukovými kurzy, zájmovými kroužky a kurzy s certifikací pro žáky základní školy v oblasti IT.
            </p>
        </div>
        <div class="terciary">
            <H2>Co děláme?</H2>
            <p> 

            </p>
            <table>
            <tr>
                <td>
                    <a href="services.php">
                    <i class="bi bi-1-circle icon-large link-underline-opacity-0" 
                        onmouseover="this.className='bi bi-1-circle-fill icon-large link-underline-opacity-0'" 
                        onmouseout="this.className='bi bi-1-circle icon-large link-underline-opacity-0'"></i>   
                    <h2>Osvěty a přednášky</h2>
                    </a>
                </td>
                <td>
                    <a href="services.php">
                    <i class="bi bi-2-circle icon-large link-underline-opacity-0" 
                        onmouseover="this.className='bi bi-2-circle-fill icon-large link-underline-opacity-0'" 
                        onmouseout="this.className='bi bi-2-circle icon-large link-underline-opacity-0'"></i>     
                    <h2>Zájmové kroužky</h2>
                    </a>
                </td>
                <td>
                    <a href="services.php">
                    <i class="bi bi-3-circle icon-large link-underline-opacity-0" 
                        onmouseover="this.className='bi bi-3-circle-fill icon-large link-underline-opacity-0'" 
                        onmouseout="this.className='bi bi-3-circle icon-large link-underline-opacity-0'"></i>     
                    <h2>Kurzy s certifikací</h2>
                    </a>
                </td>
            </tr>
        </table>
        </div>
        <?php require_once "footer.php"; ?>
    </body>
</html>