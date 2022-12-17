<?php


class Addcontroller extends Add{

    private $fname;
    private $lname;
    private $bday;



    public function __construct($fname, $lname, $bday){

        $this->fname = $fname;
        $this->lname = $lname;
        $this->bday = $bday;
        
    }


    public function signupUser(){

        if($this->emptyInput() == false){
            header("location: ../add.php?error=emptyinput");
            exit();
        }

        $this->add($this->fname, $this->lname, $this->bday);

    }

    private function emptyInput(){

        $result = false;
        if(empty($this->fname) || empty($this->lname) || empty($this->bday)){
            $result = false;
        }else{
            $result = true;
        }

        return $result;

    }
   
}