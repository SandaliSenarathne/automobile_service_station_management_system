<?php
    require_once("../db.php");
    require_once('../backend/mainFunctions.php');
    $sql = "SELECT * FROM booking;";
    if(isset($_GET['search'])){
        $search = $_GET['search'];
        if($search == "today"){
            $sql = "SELECT * FROM booking WHERE date = CURDATE();";
        }
        if($search == "week"){
            $sql = "SELECT * FROM booking WHERE date >= CURDATE() - INTERVAL 7 DAY;";
        }
        if($search == "month"){
            $sql = "SELECT * FROM booking WHERE date >= CURDATE() - INTERVAL 30 DAY;";
        }
        if($search == "year"){
            $sql = "SELECT * FROM booking WHERE date >= CURDATE() - INTERVAL 365 DAY;";
        }
    }
    
    
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Dashboard</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrapper">
        <!-- Require side bar -->
        <?php require_once 'sideBar.php'; ?>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Toggle Sidebar</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            
            <div class="line"></div>
                <!-- Show reports -->
                <!-- Reports filter buttons -->
                <a href="reports.php?search=today"><button type="button" class="btn btn-primary">Today</button>
                <a href="reports.php?search=week"><button type="button" class="btn btn-primary">Week</button>
                <a href="reports.php?search=month"><button type="button" class="btn btn-primary">Month</button>
                <a href="reports.php?search=year"><button type="button" class="btn btn-primary">Year</button>
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
                </tr>
                <?php
                    $result = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_assoc($result)){
                        ?>
                            <tr>
                                <td>
                                    <?php 
                                        if($row['service_type'] == 1){
                                            echo('<img src="../images/normal_service.jpg" width="75px">');
                                        }else if($row['service_type'] == 2){
                                            echo('<img src="../images/repair_service.jpg" width="75px">');
                                        }else if($row['service_type'] == 3){
                                            echo('<img src="../images/breakdown_service.jpg" width="75px">');
                                        }else{
                                            
                                            ?>
                                            <img src="../images/modification_service.jpg" width="75px">
                                            
                                            <?php
                                        }
                                        ?>
                                </td>
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
                                <td><?php echo $row['vehicle_number']?></td>
                                <td><?php echo $row['vehicle_brand']?></td>
                                <td><?php echo $row['vehicle_model']?></td>
                                <td><?php echo $row['message']?></td>
                                <td><?php echo $row['date']?></td>
                                <td><?php echo $row['time']?></td>
                                <td><?php echo $row['requested_on']?></td>
                                <td>
                                    <select class="custom-select" name="status" onChange="changeStatus(this.value,<?php echo($row['id']) ?>)">
                                        <?php
                                           echo( getStatus($row['status']));
                                        ?>
                                    </select>
                                </td>
                            </tr>
                        <?php
                    }
                    $conn->close();
                ?>
                
            </table>
            </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>

</html>