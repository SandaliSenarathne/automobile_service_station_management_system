<?php
    session_start();
    require_once("../db.php");
    $id = $_GET['id'];
    //mysql delete from category where id
    $sql = "DELETE FROM category WHERE id = '$id';";
    echo($sql);
    try{
        $result = $conn->query($sql);
        header("Location: ../admin/viewCategoriesAndItems.php");
        //place code here that could potentially throw an exception
     }
     catch(Exception $e)
     {

       //We will catch ANY exception that the try block will throw
       header("Location: ../admin/viewCategoriesAndItems.php");
       $_SESSION['err'] = "Delete failed.".$e;
     }
    $conn->close();
   
?>