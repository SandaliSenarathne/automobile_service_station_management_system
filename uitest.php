<?php
    require_once("db.php");
    $sql = "SELECT * FROM category";
    $result = $conn->query($sql);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>uitest</title>
    <?php include("importStyles.php"); ?>
</head>
<body>
    
<h2 class="fadeInDown text-center" style="margin-bottom:25px;margin-top:25px">PRODUCT CATEGORIES</h1>
<div class="row" style="margin:20px">
    
  <div class="col-sm-4">
        <div class="card" style="width: 25rem;">
            <img class="card-img-top" src="http://localhost/automobile_service_station_management_system/backend/uploads/1631434099BBB_Desktop.PNG" alt="Card image cap">
            <div class="card-body">
                <h5 class='card-title text-center'>".$row['name']."</h5>
                <a href="#" class="btn btn-outline-primary" style="width:100%">View Items</a>
            </div>
        </div>
  </div>
  <div class="col-sm-4">
        <div class="card" style="width: 25rem;">
            <img class="card-img-top" src="http://localhost/automobile_service_station_management_system/backend/uploads/1631434099BBB_Desktop.PNG" alt="Card image cap">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
  </div>

  <div class="col-sm-4">
        <div class="card" style="width: 25rem;">
            <img class="card-img-top" src="http://localhost/automobile_service_station_management_system/backend/uploads/1631434099BBB_Desktop.PNG" alt="Card image cap">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
  </div>
</div>

</body>
</html>