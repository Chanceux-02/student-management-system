<?php


class Editcontroller extends Edit{

    private $id;
    private $bday;
    private $lname;
    private $fname;
    


    public function __construct($fname, $lname, $bday, $id){ // ang variable nga ni halin ni sa delete.inc.php

        $this->id = $id;      // dire naga assign sang value sang property nga private
        $this->fname = $fname;
        $this->lname = $lname;
        $this->bday = $bday;
                
    }


    public function getData(){
        if($this->emptyInput() == false){
            header("location: ../add.php?error=emptyinput");
            exit();
        }
        $this->edit($this->fname, $this->lname, $this->bday, $this->id ); // amuni ang ga assign sa delete() nga function sa class nga Show
                                    // ang object nga ni halin ni sa property nga private
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