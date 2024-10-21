<?php include "head.php"; ?>
<html>
<body class="login">
    <div class="container transparent rounded-5 my-5 pd-5">
        <h1>Přihlášení <i class="bi bi-person-add"></i></h1>
        <form action="script.php" method="POST">
            <input type="text" name="name" class="form-control" placeholder="Jméno" required> <br>
            <input type="text" name="surname" class="form-control" placeholder="Příjmení" required> <br>
            <input type="email" name="email" class="form-control" placeholder="E-mail" required> <br>
            <button type="submit" class="btn btn-primary">Odeslat <i class="bi bi-send-check-fill"></i></button>
        </form>

    </div>
</body>
</html>