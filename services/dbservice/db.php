<?php
class DB {
    //NOT SAFE AT ALL
    private static $connectionString = "mysql:host=localhost;dbname=teledb";
    private static $username = "dbconnectuser";
    private static $password = "m1lujuTelec0rp";

    public static function queryAll($query) {
        try {
            $db = new PDO(self::$connectionString, self::$username, self::$password);
            $stmt = $db->prepare($query);
            return $stmt->fetchAll();
        } catch (Exception $e) {
            echo "Connection failed: " . $e->getMessage();
            // Shove it into a log file later
        }
    }

    public static function query($query, $params) {
        try {
            $db = new PDO(self::$connectionString, self::$username, self::$password);
            $stmt = $db->prepare($query);
            $stmt->execute($params);
        } catch (Exception $e) {
            echo "Connection failed: " . $e->getMessage();
            // Shove it into a log file later
            }
        }
}
?>