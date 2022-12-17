<?php


class Deletecontroller extends Delete{

    private $id;



    public function __construct($id){

        $this->id = $id;
        
    }


    public function setId($id){

        $this->id = $id;

    }

    public function getId(){
        $this->delete($this->id);

    }

    
   
}