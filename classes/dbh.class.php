<?php

class Dbh{

    private $server = "mysql:host=localhost;dbname=oop-crud";
    private $username = "root";
    private $password = "12345";
    private $dbh;

    public function connect(){
        try{
            $this->dbh = new PDO ($this->server, $this->username, $this->password);
            echo "connected po! <br>";
            return $this->dbh;

        }catch(PDOException $e){
            echo "Error!: " . $e->getMessage(). "<br>";
            die();
        }
    }

}