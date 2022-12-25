<?php

class Dbh{

    private $server = "mysql:host=localhost;dbname=mvc_oop_crud";
    private $username = "root";
    private $password = "";
    private $dbh;

    public function connect(){
        try{
            $this->dbh = new PDO ($this->server, $this->username, $this->password);
            // echo "connected po! <br>";
            return $this->dbh;

        }catch(PDOException $e){
            echo "Error!: " . $e->getMessage(). "<br>";
            die();
        }
    }

}