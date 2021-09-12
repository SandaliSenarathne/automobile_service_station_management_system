<?php
    session_start();
    require_once("db.php");
    $sql = "SELECT * FROM category";
    $result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Item</title>
    <?php 
        include("importStyles.php");
    ?>
</head>
<body>
    <div class="container-fluid" id="addItem">
        <div class="row">
        <div class="col-sm-12 text-center">
        <h1>Add Item</h1>
            <div class="card">
            <div class="card-body">
                <form class="login-form" action="backend/addItemHandler.php" method="post" enctype="multipart/form-data">
                    <div class="form-group text-left">
                        <label for="category">Please select the category</label>
                        <select class="custom-select" name="category">
                        <?php
                        if($result->num_rows > 0){
                            while($row = $result->fetch_assoc()){
                        ?>
                            <option value="<?php echo($row['id']) ?>"><?php echo($row['name']) ?></option>
                        <?php
                            }
                        }
                        ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="itemName" placeholder="Item Name" required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="description" placeholder="Description" rows="2"></textarea>
                    </div>
                    <div class="form-group text-left">
                        <label for="thumbnail">Please upload thumbnail for this item</label>
                        <input  type="file" class="form-control" name="thumbnail" required>
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" name="price" placeholder="Unit Price" required>
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" name="qty" placeholder="Available Quantity" required>
                    </div>
                    <p style="color:red;"><?php 
                        if(isset($_SESSION['err'])){
                            echo $_SESSION['err'];
                            unset($_SESSION['err']);
                        }
                    ?></p>
                    <p style="color:green;"><?php 
                        if(isset($_SESSION['success'])){
                            echo $_SESSION['success'];
                            unset($_SESSION['success']);
                        }
                    ?></p>
                    <input type="submit" class="btn btn-primary btn-lg" value="Add Item" name="submit">
                </form>
            </div>
            </div>
        </div>
        </div>
    </div>

    <?php include("importScripts.php"); ?>

</body>
</html>