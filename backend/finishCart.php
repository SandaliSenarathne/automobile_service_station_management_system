<?php 
    //finalize cart items
    session_start();
    require_once("../db.php");
    $id = $_GET['id'];
    $sql = "UPDATE `cart` SET `status` = '1' WHERE `cart`.`id` = $id;";
    if ($conn->query($sql) === TRUE) {
        //create new empty cart row in DB
       
        echo "New record created successfully";
        header("Location:../myRequests.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

?>