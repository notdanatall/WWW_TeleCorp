<?php
class Page{

    public static function GetPageTitle($file_name){
        switch($file_name){
            case "index.php":
                return "Domů";
            case "login.php":
                return "Přihlášení";
            case "contact.php":
                return "Kontakt";
            case "services.php":
                return "Naše služby";
            default:
                return "Unknown";
            #All webpages
    }
}
}

// ANTI DEBIL SYSTEM
// Return idiots from parts from the page they're not supposed to be in

// Debugging: Print the basename to check its value
error_log('Current script: ' . basename($_SERVER['PHP_SELF']));

if (basename($_SERVER['PHP_SELF']) == "functions.php" || 
    basename($_SERVER['PHP_SELF']) == "head.php" || 
    basename($_SERVER['PHP_SELF']) == "footer.php" || 
    basename($_SERVER['PHP_SELF']) == "menu.php" || 
    basename($_SERVER['PHP_SELF']) == "user.php" || 
    basename($_SERVER['PHP_SELF']) == "script.php" || 
    basename($_SERVER['PHP_SELF']) == "style.css") {
    
    header('Location: index.php');
    exit();
}
?>