<?php require "head.php"; ?>
<body>
    <?php require_once "menu.php"; ?>
    <?php require_once "social-media.php"; ?>
    <div class="image-container contact-pic">
            <h1 class="overlay-text"><b>Teleslogan here</b></h1>
    </div>
    <div class="secondary-container">
        <div class="secondary">
            <h2><b>Sídlo firmy</b></h2>
            <p>Telecorp s.r.o. <br> Opavská 1119/12 <br> 700 30 Ostrava - Poruba</p>
        </div>
        <div class="secondary map">
            <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2566.224050299772!2d18.182600415895257!3d49.83259637939492!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4713e3fb8125cbb1%3A0x3a02d4af4220966!2zU3TDrXJlZG7DrSBza8SrbGEgVGVsZWluZm9ybWF0aWt5!5e0!3m2!1sen!2scz!4v1697974786144!5m2!1sen!2scz" 
                width="920" 
                height="450" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
    <div class="main">
        <h2><b>Kontaktujte nás</b></h2>
        <table class="table">
            <tr>
                <td><b>Telefon</b></td>
                <td><b>Email</b></td>
            </tr>
            <tr> 
                <td><i class="bi bi-telephone-fill"></i> +420 123 456 789</td>
                <td><i class="bi bi-envelope-at-fill"></i> email@example.com</td>
            </tr>
        </table>
    </div>
    <div class="terciary">
        <h2>Nebo nám můžete přímo napsat</h2>
        <form action="send-email.php" method="POST">
            <input type="email" name="email" class="form-control" placeholder="Váš email" required> <br>
            <textarea name="message" class="form-control" maxlenght="500" rows="5" placeholder="Vaše zpráva" required></textarea> <br>
            <div class="g-recaptcha" data-sitekey="6Lel62gqAAAAANpZxZz-owO7a0RXTL8TBbcS0fHC"></div>
            <button type="submit" class="btn btn-primary">Odeslat <i class="bi bi-send-fill"></i></button>
        </form>
    </div>
    <?php require_once "footer.php"; ?> 
</body>