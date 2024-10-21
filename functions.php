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
?>