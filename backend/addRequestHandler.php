<?php
    session_start();
    require_once("../db.php");
    $user_id = $_SESSION['user']['user_id'];
    $service_type = $_GET['service_type'];
    $vehicle_number = $_GET['vehicleNumber'];
    $vehicle_brand = $_GET['vehicleBrand'];
    $vehicle_model = $_GET['vehicleModel'];
    $message = $_GET['message'];
    $rdate = $_GET['rdate'];
    $rtime = $_GET['rtime'];

    $sql = "INSERT INTO `booking` 
    (`id`,
     `customer_id`,
     `service_type`,
     `vehicle_number`,
     `vehicle_brand`,
     `vehicle_model`,
     `message`,
     `date`,
     `time`,
     `requested_on`,
     `status`)
      VALUES 
      (NULL, 
      '$user_id', 
      '$service_type', 
      '$vehicle_number', 
      '$vehicle_brand', 
      '$vehicle_model', 
      '$message', 
      '$rdate', 
      '$rtime', 
      current_timestamp(), '0');";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

?>