<?php

class Show extends Dbh{

        public function data() { 
            try {
                $con = $this->connect();
                $stmt = "SELECT * FROM student_list ORDER BY id DESC";
                
                $stmt2 = $con->prepare($stmt);
                $stmt2->execute();

                return $stmt2->fetchAll(PDO::FETCH_ASSOC);
    
    
            }catch(PDOException $e) {
    
                echo $e->getMessage();
    
            }
        }   


}









