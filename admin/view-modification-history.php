<?php 
session_start();
require_once("../db.php");
 $booking_id = $_GET['id'];
 $sql = "SELECT * FROM cart WHERE booking_id = $booking_id";
 $result = $conn->query($sql);
 $row = $result->fetch_assoc();
 $cart_id = $row['id'];

 //check get id is not defined
 //check is logged in with session
 if(!isset($_SESSION['user']['email'])){
     $_SESSION['err'] = "Please login to request a Service";
     header('location: ../login.php');
     
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
            <div class="card">
                <div class="card-body">
                    <h1>Modification Service History</h1>
                    <?php
                        $sqlBooking = "SELECT * FROM booking WHERE id = $booking_id ";
                        $resultBooking = $conn->query($sqlBooking);
                        $rowBooking = $resultBooking->fetch_assoc();
                    ?>
                    <h3>Vehicle Number - <?php echo($rowBooking['vehicle_number']) ?></h3>
                    <h3>Vehicle Brand - <?php echo($rowBooking['vehicle_brand']) ?></h3>
                    <h3>Vehicle Model - <?php echo($rowBooking['vehicle_model']) ?></h3>
                    <h3>Message - <?php echo($rowBooking['message']) ?></h3>
                    <h3>Date - <?php echo($rowBooking['date']) ?></h3>
                    <h3>Time - <?php echo($rowBooking['time']) ?></h3>
                    <h3>Requested On - <?php echo($rowBooking['requested_on']) ?></h3>
                    <h3>Status - <?php echo($rowBooking['status']) ?></h3>

                    <!-- Items -->
                    <h1>Items</h1>
                    <table class="table">
                <!-- select all items from cart items -->
                <?php
                    $sqlCartItems = "SELECT * FROM `cart_item` WHERE `cart_id` = $cart_id";
                    $resultCartItems = $conn->query($sqlCartItems);
                    if($resultCartItems->num_rows > 0){
                        while($rowCartItems = $resultCartItems->fetch_assoc()){

                            //get item data from item table
                            $sqlItem = "SELECT * FROM `item` WHERE `id` = $rowCartItems[item_id]";
                            $resultItem = $conn->query($sqlItem);
                            $rowItem = $resultItem->fetch_assoc();
                            echo($rowItem['thumbnail']);
                        ?>
                             <tr>
                                <td><img src="../<?php echo($rowItem['thumbnail']) ?>" width="75px"></td>
                                <td><?php echo($rowItem['name']); ?></td>
                                <td><?php echo($rowItem['description']); ?></td>
                                <td><?php echo($rowItem['price']); ?></td>
                            </tr>
                        <?php
                        }
                    }

                ?>
            </table>
                </div>
            </div>
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