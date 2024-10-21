<?php require "head.php"; ?>
<body>
    <?php require_once "menu.php"; ?>
    <?php require_once "social-media.php"; ?>
    <div class="image-container contact-pic">
            <h1 class="overlay-text"><b>Teleslogan here</b></h1>
    </div>
    <div class="main">
        <h2>Kontaktujte nás</h2>
        <table class="table">
            <tr>
                <td><b>Telefon</b></td>
                <td><b>Email</b></td>
                <td><b>Lokace</b></td>
            </tr>
            <tr> 
                <td><i class="bi bi-telephone-fill"></i> +420 123 456 789</td>
                <td><i class="bi bi-envelope-at-fill"></i> email@example.com</td>
                <td><img src="" alt="Social Icon" class="social-icon"> Opavská 1119/12</td>
            </tr>
        </table>
    </div>
    <div class="terciary">
        <h2>Nebo nám můžete přímo napsat</h2>
        <form action="" method="POST">
            <input type="email" name="email" class="form-control" placeholder="Váš email" required> <br>
            <textarea name="message" class="form-control" maxlenght="500" rows="5" placeholder="Vaše zpráva" required></textarea> <br>
            <button type="submit" class="btn btn-primary">Odeslat <i class="bi bi-send-fill"></i></button>
        </form>
    </div>
    <?php require_once "footer.php"; ?> 
</body>