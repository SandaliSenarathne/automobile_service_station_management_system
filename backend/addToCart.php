<?php
    session_start();
    require_once("../db.php");
    $cart_id = $_GET['cart_id'];
    $item_id = $_GET['item_id'];

    //Add items to cart_item table
    $sql = "INSERT INTO `cart_item` (`id`, `date`, `time`, `cart_id`, `item_id`) VALUES (NULL, curdate(),curtime(), '$cart_id', '$item_id');";

    if ($conn->query($sql) === TRUE) {
        //create new empty cart row in DB
       
        echo "New record created successfully";
        header("Location:../viewItems.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>