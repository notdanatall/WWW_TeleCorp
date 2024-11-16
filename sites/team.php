<?php
    include_once  __DIR__ . "/../components/head.php";
    require_once  __DIR__ . "/../models/user.php";
?>
<html>
    <body>
        <?php
            include_once  __DIR__ . "/../components/menu.php";
            include_once  __DIR__ . "/../components/social-media.php";
        ?>
        <br>
        <div class="secondary">
            <h2>Seznamte se s naším týmem</h2>
            <table class="table table-highlight">
                <thead>
                    <tr>
                        <th>Jméno a Příjmení</th>
                        <th>Pozice</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach(User::getAll() as $user){
                        if($user->getRole() != "user"){
                            echo('<tr>
                            <td>' . $user->getName() . '</td>
                            <td>' . $user->getRole() . '</td>
                            <td>' . $user->getEmail() . '</td>  
                            </tr>');
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </body>
</html>
<?php
    include_once  __DIR__ . "/../components/footer.php";
?>