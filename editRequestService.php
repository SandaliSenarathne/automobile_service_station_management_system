<?php 
    session_start();
    //check get id is not defined
    //check is logged in with session
    if(!isset($_SESSION['user']['email'])){
        $_SESSION['err'] = "Please login to request a Service";
        header('location: login.php');
        
    }else{
            $id = $_GET['id'];
            if($id == 1){
                $type = "Normal Service";
            }else if($id == 2){
                $type = "Repair Service";
            }else if($id == 3){
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
                        <input type="text" class="form-control" id="vehicleNumber" placeholder="Vehicle Number" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="vehicleBrand" placeholder="Vehicle Brand" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="vehicleModel" placeholder="Vehicle Model" required>
                    </div>
                    <div class="form-group">
                        <p style="text-align:left">Select Date</p>
                        <input type="date" class="form-control" id="rdate" placeholder="Vehicle Model" required>
                    </div>
                    <div class="form-group">
                        
                        <p style="text-align:left">Select Time</p>
                        <input type="time" class="form-control" id="rtime" placeholder="Vehicle Model" required>
                    </div>
                    <div class="form-group">
                        
                        <textarea class="form-control" id="message" placeholder="Message (optional)" max="1000" rows="2"></textarea>
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