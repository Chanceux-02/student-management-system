<?php

class Edit extends Dbh{

    public function edit($fname, $lname, $bday, $id) {  // ang variable ngani halin ni sa constructor
        try {

            $con = $this->connect();
            $stmt = "UPDATE student_list SET first_name = ?, last_name = ?, birthday = ? WHERE id = ? ";
            
            $stmt2 = $con->prepare($stmt);
            $stmt2->execute([$fname, $lname, $bday, $id]); // ang variable nga ni halin ni sa sa delete nga function delete($id  )
            

        }catch(PDOException $e) {

            echo $e->getMessage();

        }
    }  

    public function placeHolder($id) {  // ang variable ngani halin ni sa constructor
        try {

            $con = $this->connect();
            $stmt = "SELECT * FROM student_list WHERE id = ? ";
            
            $stmt2 = $con->prepare($stmt);
            $stmt2->execute([$id]); // ang variable nga ni halin ni sa sa delete nga function delete($id  )
            
            return $stmt2->fetch(PDO::FETCH_ASSOC);
            

        }catch(PDOException $e) {

            echo $e->getMessage();

        }
    }  
}