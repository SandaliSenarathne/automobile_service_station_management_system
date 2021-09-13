<?php
    session_start();
    require_once("../db.php");
    $user_id = $_SESSION['user']['user_id'];
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
      '1', 
      '0', 
      'SE2017', 
      'brand here', 
      'model here', 
      'message here', 
      '2021-09-15', 
      '45:31:29', 
      current_timestamp(), '0');";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

?>