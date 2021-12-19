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
                <br>
                <br>
           

                <div class="card-body">

                    <h1>Modification Service History</h1>
                    <?php
                        $sqlBooking = "SELECT * FROM booking WHERE id = $booking_id ";
                        $resultBooking = $conn->query($sqlBooking);
                        $rowBooking = $resultBooking->fetch_assoc();
                    ?>
                     <table class="table">
  
  <tbody>
    <tr>
      <th scope="row">Vehicle Number</th>
      <td><?php echo($rowBooking['vehicle_number']) ?></td>
    </tr>
    <tr>
      <th scope="row">Vehicle Brand</th>
      <td><?php echo($rowBooking['vehicle_brand']) ?></td>
    </tr>
    <tr>
      <th scope="row">Vehicle Model</th>
      <td><?php echo($rowBooking['vehicle_model']) ?></td>
    </tr>
    <tr>
      <th scope="row">Message</th>
      <td><?php echo($rowBooking['message']) ?></td>
    </tr>
    <tr>
      <th scope="row">Date</th>
      <td><?php echo($rowBooking['date']) ?></td>
    </tr>
    <tr>
      <th scope="row">Time</th>
      <td><?php echo($rowBooking['time']) ?></td>
    </tr>
    <tr>
      <th scope="row">Requested On</th>
      <td><?php echo($rowBooking['requested_on']) ?></td>
    </tr>
    <tr>
      <th scope="row">Status</th>
      <td><?php echo($rowBooking['status']) ?></td>
    </tr>
  </tbody>
</table>
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