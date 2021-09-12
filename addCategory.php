<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Category</title>
    <?php include("importStyles.php"); ?>
</head>
<body>
    <div class="container-fluid" id="addCategory">
        <div class="row">
        <div class="col-sm-12 text-center">
        <h1>Add Category</h1>
            <div class="card">
            <div class="card-body">
                <form class="login-form" action="backend/addCategoriHandler.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="text" class="form-control" name="categoryName" id="categoryName" placeholder="Category Name" required>
                    </div>
                    <div class="form-group text-left">
                        <label for="thumbnail">Please upload thumbnail for this category</label>
                        <input  type="file" class="form-control" name="thumbnail" id="thumbnail" required>
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
                    <input type="submit" class="btn btn-primary btn-lg" value="Add Category" name="submit">
                    <!-- <button type="submit"  name="submit" class="btn btn-primary btn-lg">Submit Request</button> -->
                </form>
                
            </div>
            </div>
        </div>
        </div>
    </div>

    <?php include("importScripts.php"); ?>

</body>
</html>