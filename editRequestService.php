<?php 
    session_start();
    //check get id is not defined
    //check is logged in with session
    if(!isset($_SESSION['user']['email'])){
        $_SESSION['err'] = "Please login to request a Service";
        header('location: login.php');
        
    }else{
            $id = $_GET['id'];
            $sql = "SELECT * FROM booking WHERE id = $id";
            // get type
            require_once("db.php");
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            if($row['service_type'] == 1){
                $type = "Normal Service";
            }else if($row['service_type'] == 2){
                $type = "Repair Service";
            }else if($row['service_type'] == 3){
                $type = "Breakdown Service";
            }else{
                $type = "Modification Service";
            }
        ?>

        
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Service Request</title>
    <?php include("importStyles.php"); ?>
</head>
<body>
    <?php
        require_once("header.php");
    ?>
    <div class="container-fluid" id="requestService">
        <div class="row">
        <div class="col-sm-12  text-center">
        <h1>Request for a <?php echo($type); ?> service</h1>
            <div class="card">
            <div class="card-body">
                <form class="login-form">
                    <div class="form-group">
                        <input type="text" class="form-control" id="vehicleNumber" placeholder="Vehicle Number" value="<?php echo $row['vehicle_number']?>" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="vehicleBrand" placeholder="Vehicle Brand" value="<?php echo $row['vehicle_brand']?>" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="vehicleModel" placeholder="Vehicle Model" value="<?php echo $row['vehicle_model']?>" required>
                    </div>
                    <div class="form-group">
                        <p style="text-align:left">Select Date</p>
                        <input type="date" class="form-control" id="rdate" placeholder="Vehicle Model"  value="<?php echo $row['date']?>"  required>
                    </div>
                    <div class="form-group">
                        
                        <p style="text-align:left">Select Time</p>
                        <input type="time" class="form-control" id="rtime" placeholder="Vehicle Model"  value="<?php echo $row['time']?>"  required>
                    </div>
                    <div class="form-group">
                        
                        <textarea class="form-control" id="message" placeholder="Message (optional)"   max="1000" rows="2"> <?php echo $row['message']?></textarea>
                    </div>
                    <p id="err" style="color:red"></p>
                    <p id="success" style="color:green"></p>
                </form>
                <button type="button" class="btn btn-primary btn-lg" onClick="requestService(<?php echo($id) ?>)">Submit Request</button>
            </div>
            </div>
        </div>
        </div>
    </div>

    <?php include("importScripts.php"); ?>

</body>
</html>
<?php
    }
?>