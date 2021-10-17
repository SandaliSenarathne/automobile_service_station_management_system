<?php 
    session_start();
    require_once("db.php");
    require_once("backend/mainFunctions.php");
    $id = $_SESSION['user']['user_id'];
    $sql = "SELECT * FROM `booking` WHERE customer_id = '$id';";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>My Requests</title>
    <?php include("importStyles.php"); ?>
</head>
<body>
    <?php include("header.php"); ?>
    <div class="container-fluid  py-5 px-5" id="items">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <h2 class="fadeInDown text-center">My Service Requests</h1>
            <table class="table" id="itemsInCategory">
                <tr>
                    <th</th>
                    <th>Service Type</th>
                    <th>Vehicle Number</th>
                    <th>Brand</th>
                    <th>Model</th>
                    <th>Message</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Requested On</th>
                    <th>Status</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {

                            ?>
                            <tr>
                                <td><img src="images/bg.jpg" width="75px"></td>
                                <td><?php echo $row['service_type']?></td>
                                <td><?php echo $row['vehicle_number']?></td>
                                <td><?php echo($row['vehicle_brand'])?></td>
                                <td><?php echo($row['vehicle_model'])?></td>
                                <td><?php echo($row['message'])?></td>
                                <td><?php echo($row['date'])?></td>
                                <td><?php echo($row['time'])?></td>
                                <td><?php echo($row['requested_on'])?></td>
                                <td><?php echo(getStatusCustomer($row['status'])); ?></td>
                                <td><button type="button" class="btn btn-sm btn-outline-primary" onClick="#">Edit</button></td>
                                <td><button type="button" class="btn btn-sm btn-outline-danger" onClick="#">Delete</button></td>
                            </tr>

                            <?php
                        }
                    }

                ?>
            </table>
        </div>
    </div>
    </div>

    <?php include("importScripts.php"); ?>

</body>
</html>