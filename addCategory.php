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
                <form class="login-form">
                    <div class="form-group">
                        <input type="text" class="form-control" id="categoryName" placeholder="Category Name" required>
                    </div>
                    <div class="form-group text-left">
                        <label for="thumbnail">Please upload thumbnail for this category</label>
                        <input  type="file" class="form-control" id="thumbnail" required>
                    </div>
                </form>
                <button type="button" class="btn btn-primary btn-lg" onClick="addCategory()">Submit Request</button>
            </div>
            </div>
        </div>
        </div>
    </div>

    <?php include("importScripts.php"); ?>

</body>
</html>