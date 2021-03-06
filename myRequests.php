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
                    <th></th>
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
                                <td>
                                    <?php 
                                        if($row['service_type'] == 1){
                                            echo('<img src="images/normal_service.jpg" width="75px">');
                                        }else if($row['service_type'] == 2){
                                            echo('<img src="images/repair_service.jpg" width="75px">');
                                        }else if($row['service_type'] == 3){
                                            echo('<img src="images/breakdown_service.jpg" width="75px">');
                                        }else{
                                            
                                            ?>
                                            <img src="images/modification_service.jpg" width="75px">
                                            
                                            <?php
                                        }
                                        ?>
                                    
                                <td><?php 
                                        if($row['service_type'] == 1){
                                            echo("Normal Service");
                                        }else if($row['service_type'] == 2){
                                            echo("Repair Service");
                                        }else if($row['service_type'] == 3){
                                            echo("Breakdown Service");
                                        }else{
                                            echo("Modification Service");
                                            ?>
                                                <a href="view-modification-history.php?id=<?php echo($row['id']) ?>"><span class="badge badge-info">10</span></a>
                                            <?php
                                        }
                                        ?>
                                </td>
                                <td><?php echo $row['vehicle_number']?></td>
                                <td><?php echo($row['vehicle_brand'])?></td>
                                <td><?php echo($row['vehicle_model'])?></td>
                                <td><?php echo($row['message'])?></td>
                                <td><?php echo($row['date'])?></td>
                                <td><?php echo($row['time'])?></td>
                                <td><?php echo($row['requested_on'])?></td>
                                <td><?php echo(getStatusCustomer($row['status'])); ?></td>
                                <td><a href="editRequestService.php?id=<?php echo($row['id']);?>"><button type="button" class="btn btn-sm btn-outline-primary" >Edit</button></a></td>
                                <td><a href="backend/DeleteMyReqest.php?id=<?php echo($row['id']);?>"><button type="button" class="btn btn-sm btn-outline-danger" onClick="#">Delete</button></a></td>
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