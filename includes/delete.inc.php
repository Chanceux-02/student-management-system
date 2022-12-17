<?php
        
// if(isset($_POST['delete'])){            // gin butangan sang conditional para ma sure nga halin sya sa delete input nga ara sa details                                          //gin initialize ya ang id ng do variable nga sa index.php ( ID=<?= $row['id']; ) kag gin gamitan $_GET para ma kwa ang id 

    $id = $_GET['id'];

    require_once '../classes/dbh.class.php';
    require_once '../classes/delete.class.m.php';
    require_once '../classes/delete.class.c.php';
    
    

    $constr = new Deletecontroller($id);
    
        $constr->getId();

        // $constr->setId($id);
        // $del->delete($id);
        
        header("Location: ../successfulMsg.php?deletedSuccessful");  
    
    
    
    
    // $del->del();
    
    
    // $sql = "DELETE FROM student_list WHERE id = '$id'";     //amuni mag delete sa database
    // $conn->query($sql) or die ($conn->error);               //amuni mag query
                            //para mag balik liwat sa index.php
// }