<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Item</title>
    <?php include("importStyles.php"); ?>
</head>
<body>
    <div class="container-fluid" id="addItem">
        <div class="row">
        <div class="col-sm-12 text-center">
        <h1>Add Item</h1>
            <div class="card">
            <div class="card-body">
                <form class="login-form">
                    <div class="form-group text-left">
                        <label for="category">Please select the category</label>
                        <select class="custom-select" id="category">
                            <option value="1">Wheels</option>
                            <option value="2">Tayers</option>
                            <option value="3">Seats</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="itemName" placeholder="Item Name" required>
                    </div>
                    <div class="form-group text-left">
                        <label for="thumbnail">Please upload thumbnail for this category</label>
                        <input  type="file" class="form-control" name="thumbnail" required>
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" id="price" placeholder="Unit Price" required>
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" id="qty" placeholder="Available Quantity" required>
                    </div>
                </form>
                <button type="button" class="btn btn-primary btn-lg">Submit Request</button>
            </div>
            </div>
        </div>
        </div>
    </div>

    <?php include("importScripts.php"); ?>

</body>
</html>