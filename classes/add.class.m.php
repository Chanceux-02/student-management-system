<?php

class Add extends Dbh{

        public function add($fname,$lname,$bday) { 
            try {
    
                $con = $this->connect();
                $stmt = "INSERT INTO student_list (`first_name`, `last_name`, `birthday`) VALUES (?,?,?)";
                
                $stmt2 = $con->prepare($stmt);
                $stmt2->execute([$fname,$lname,$bday]);
    
            }catch(PDOException $e) {
    
                echo $e->getMessage();
    
            }
        }   



}









