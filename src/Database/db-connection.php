<?php
class dbConnection
{
    // Connects to the database and gives an error when the connection fails
    public function getdbconnection() {
        $servername = "localhost";
        $username = "root";
        $password = "Rd210503!";
        $dbname = "profileapp";

        try {
            $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        return $pdo;
    }
}
?>