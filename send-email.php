<?php
$email = $_POST['email'];
$msg = $_POST['message'];

$msg = wordwrap($msg,70);

// send email
mail("daniel.pravdik@gmail.com","Zpráva z webovek",$msg);
?> 