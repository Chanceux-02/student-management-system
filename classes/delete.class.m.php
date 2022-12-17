<?php

class Delete extends Dbh{

public function delete($id) {  // ang variable ngani halin ni sa constructor
            try {
    
                $con = $this->connect();
                $stmt = "DELETE FROM student_list WHERE id = ? ";
                
                $stmt2 = $con->prepare($stmt);
                $stmt2->execute([$id]); // ang variable nga ni halin ni sa sa delete nga function delete($id  )
                
    
            }catch(PDOException $e) {
    
                echo $e->getMessage();
    
            }
        }  
} 