<?php
    require_once("db.php");
    $sql = "SELECT * FROM category";
    $result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Categories</title>
    <?php include("importStyles.php"); ?>
</head>
<body>
      
    <h2 class="fadeInDown text-center" style="margin-bottom:25px;margin-top:25px">PRODUCT CATEGORIES</h1>
    <div class="row" style="margin:20px">
        <?php
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    ?>
                        <div class="col-lg-3">
                                <div class="card my-1">
                                    <img  class="card-img-top" src="<?php echo($row['thumbnail']) ?>" style="height:30vh; object-fit: cover; object-position: center; width:100%;">
                                    <div class="card-body">
                                        <h5 class='card-title text-center'><?php echo($row['name']) ?></h5>
                                        <a href="viewItems.php?category=<?php echo($row['id']) ?>" class="btn btn-outline-primary" style="width:100%">View Items</a>
                                    </div>
                                </div>
                        </div>
                    <?php
                }
            }
        ?>
    </div>
    <?php include("importScripts.php"); ?>
</body>
</html>