<?php
    session_start();
    require_once("db.php");
    $category = $_GET['category'];
    if(!isset($_SESSION['user']['email'])){
        $_SESSION['err'] = "Please login to request a Service";
        header('location: login.php');
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Items</title>
    <?php include("importStyles.php"); ?>
</head>
<body>
    <?php include("header.php"); ?>
    <br>
    <div class="container-fluid py-5 px-5" id="items">
    <!-- check for active cart -->
    <?php
        $sqlActiveCart = "SELECT * FROM `cart` WHERE `customer_id` = 1 and `status` = 0";
        $resultActiveCart = $conn->query($sqlActiveCart);
        if($resultActiveCart->num_rows !=  1){
            echo('<h2>Please create a new service request</h2>');
            echo('<a href="requestService.php?id=4" class="btn btn-primary">Create New Request</a>');
        }else{
            $rowActiveCart = $resultActiveCart->fetch_assoc()
        

    ?>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <a href="viewcategories.php"><Button class="btn btn-primary">Select a Category</Button></a>
            <?php
                if(isset($_GET['category'])){
                   
               
                $sql = "SELECT * FROM item WHERE category_id=$category AND stock>0;";
                $result = $conn->query($sql);
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                ?>
            <h2 class="fadeInDown text-center">Items</h1>
            <table class="table">
               
                <tr>
                    <td><img src="<?php echo($row['thumbnail']) ?>" width="75px"></td>
                    <td><?php echo($row['name']) ?></td>
                    <td><?php echo($row['description']) ?></td>
                    <td><?php echo($row['price']) ?></td>
                    <td><a href="backend/addToCart.php?item_id=<?php echo($row['id']) ?>&cart_id=<?php echo($rowActiveCart['id']); ?>"><button type="button" class="btn btn-outline-success" onClick="#">Add to cart</button></a></td>
                </tr>
                <?php
                    }
                
                }else{
                ?>
                    <tr>
                        <td><h2 class="text-center">No Items found in this category.</h2></td>
                    </tr>
                <?php
                }}
                ?>
            </table>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <h2 class="fadeInDown text-center">My Cart</h1>
            <table class="table">
                <!-- select all items from cart items -->
                <?php
                    $sqlCartItems = "SELECT * FROM `cart_item` WHERE `cart_id` = $rowActiveCart[id]";
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
                                <td><a href="backend/removeAItemFromCart.php?id=<?php echo($rowCartItems['id']) ?>"><button type="button" class="btn btn-outline-danger" onClick="#">Remove from cart</button></a></td>
                            </tr>
                        <?php
                        }
                    }

                ?>
            </table>
            <!-- check cart is is empty  -->
            <a href="backend/finishCart.php?id=<?php echo($rowActiveCart['id'])?>"><Button class="btn btn-primary btn-block">Finish</Button></a>
        </div>
    </div>
    <?php
        }
    ?>
    </div>

    <?php include("importScripts.php"); ?>

</body>
</html>