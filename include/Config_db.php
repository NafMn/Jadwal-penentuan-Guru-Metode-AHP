<?php

class config_db{
    private $host = "localhost";
    private $db_name = "spk_ahp";
    private $username = "root";
    private $password = "";
    private $connect;

    public function getConnect(){
        
        $this->connect = null;

        try {
            $this->connect = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
        } catch (PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->connect;
    }
}


?>