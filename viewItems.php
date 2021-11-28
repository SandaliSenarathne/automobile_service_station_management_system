<?php
    session_start();
    require_once("db.php");
    $category = $_GET['category'];
    $sql = "SELECT * FROM item WHERE category_id=$category AND stock>0;";
    $result = $conn->query($sql);
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
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <h2 class="fadeInDown text-center">Items</h1>
            <table class="table">
                <?php
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                ?>
                <tr>
                    <td><img src="<?php echo($row['thumbnail']) ?>" width="75px"></td>
                    <td><?php echo($row['name']) ?></td>
                    <td><?php echo($row['description']) ?></td>
                    <td><?php echo($row['price']) ?></td>
                    <td><button type="button" class="btn btn-outline-success" onClick="#">Add to cart</button></td>
                </tr>
                <?php
                    }
                }else{
                ?>
                    <tr>
                        <td><h2 class="text-center">No Items found in this category.</h2></td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <h2 class="fadeInDown text-center">My Cart</h1>
            <table class="table">
                <tr><td><h2 class="text-center">Under Construction</h2></td></tr>
                <!-- <tr>
                    <td><img src="images/bg.jpg" width="75px"></td>
                    <td>Wheel set</td>
                    <td>Lorem ipsum dolor sit quos pariatur excepturi dignissimos veritatis </td>
                    <td>7500 LKR</td>
                    <td><button type="button" class="btn btn-outline-danger" onClick="#">Remove from cart</button></td>
                </tr>
                <tr>
                    <td><img src="images/bg.jpg" width="75px"></td>
                    <td>Wheel set</td>
                    <td>Lorem ipsum dolor sit quos pariatur excepturi dignissimos veritatis </td>
                    <td>7500 LKR</td>
                    <td><button type="button" class="btn btn-outline-danger" onClick="#">Remove from cart</button></td>
                </tr>
                <tr>
                    <td><img src="images/bg.jpg" width="75px"></td>
                    <td>Wheel set</td>
                    <td>Lorem ipsum dolor sit quos pariatur excepturi dignissimos veritatis </td>
                    <td>7500 LKR</td>
                    <td><button type="button" class="btn btn-outline-danger" onClick="#">Remove from cart</button></td>
                </tr> -->
            </table>
        </div>
    </div>
    </div>

    <?php include("importScripts.php"); ?>

</body>
</html>