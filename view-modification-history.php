<?php 
    session_start();
    require_once("db.php");
    $booking_id = $_GET['id'];
    $sql = "SELECT * FROM cart WHERE booking_id = $booking_id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $cart_id = $row['id'];

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

                        ?>
                             <tr>
                                <td><img src="<?php echo($rowItem['thumbnail']) ?>" width="75px"></td>
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
    </div>

    <?php include("importScripts.php"); ?>

</body>
</html>
<?php
    }
?>