<?php
    require_once("../db.php");
    $status = $_GET['status'];
    $id = $_GET['id'];
    //Write query to update database
    $sql = "UPDATE booking SET status = '$status' WHERE booking.id = $id;";
    if ($conn->query($sql) === TRUE) {
        echo "Data updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }      //Close database connection
    $conn->close();
?>