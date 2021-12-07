<?php 
    session_start();
    require_once("db.php");
    require_once("backend/mainFunctions.php");
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
        <h1>Search my services</h1>
            <div class="card">
                <div class="card-body">
                    <form class="login-form" action="" method="get">
                        <div class="form-group">
                            <input type="text" class="form-control" id="vehicleNumber" name="vehicle_id" placeholder="vehicle number" required>
                        </div>
                        
                        <p id="err" style="color:red"></p>
                        <p id="success" style="color:green"></p>
                        <button type="submit" class="btn btn-primary btn-lg" >Search</button>
                    </form>
                    
                </div>
                <?php
                   if(isset($_GET['vehicle_id'])){
                        $vehicle_id = $_GET['vehicle_id'];
                        $sql = "SELECT * FROM booking WHERE vehicle_number LIKE '$vehicle_id';";

                        $result = $conn->query($sql);
                        if($result->num_rows > 0){
                            ?>
                                <h1>Results for <?php echo $vehicle_id ?></h1>
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Service Type</th>
                                            <th>Service Date</th>
                                            <th>Service Time</th>
                                            <th>Service Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            while($row = $result->fetch_assoc()){
                                                ?>
                                                    <tr>
                                                        <td>
                                                            <?php 
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
                                                        <td><?php echo $row['date'] ?></td>
                                                        <td><?php echo $row['time'] ?></td>
                                                        <td><?php  echo(getStatusCustomer($row['status']));  ?></td>
                                                    </tr>
                                                <?php
                                            }
                                        ?>
                                    </tbody>
                            <?php
                            while($row = $result->fetch_assoc()){
                                ?>
                                <!-- Resilt table here -->
                                
                                <?php
                            }
                        }else{
                            echo "<h1>No results found</h1>";
                        }   

                   }

                ?>
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