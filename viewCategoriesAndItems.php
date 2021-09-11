<!DOCTYPE html>
<html lang="en">
<head>
    <title>Categories and Items</title>
    <?php include("importStyles.php"); ?>
</head>
<body>
    <div class="container-fluid  py-5 px-5" id="items">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12">
            <h2 class="fadeInDown text-center">Categories</h1>
            <table class="table table-secondary">
                <tr>
                    <td><img src="images/bg.jpg" width="75px"></td>
                    <td>Wheels</td>
                    <td><button type="button" class="btn btn-sm btn-outline-primary" onClick="#">Edit</button></td>
                    <td><button type="button" class="btn btn-sm btn-outline-danger" onClick="#">Delete</button></td>
                </tr>
                <tr>
                    <td><img src="images/bg.jpg" width="75px"></td>
                    <td>Tayers</td>
                    <td><button type="button" class="btn btn-sm btn-outline-primary" onClick="#">Edit</button></td>
                    <td><button type="button" class="btn btn-sm btn-outline-danger" onClick="#">Delete</button></td>
                </tr>
                <tr>
                    <td><img src="images/bg.jpg" width="75px"></td>
                    <td>Seats</td>
                    <td><button type="button" class="btn btn-sm btn-outline-primary" onClick="#">Edit</button></td>
                    <td><button type="button" class="btn btn-sm btn-outline-danger" onClick="#">Delete</button></td>
                </tr>
            </table>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12">
            <h2 class="fadeInDown text-center">Items</h1>
            <table class="table" id="itemsInCategory">
                <tr>
                    <th>Thumbnail</th>
                    <th>Item Name</th>
                    <th>Description</th>
                    <th>Unit Price</th>
                    <th>Available Stock</th>
                    <th></th>
                    <th></th>
                </tr>
                <tr>
                    <td><img src="images/bg.jpg" width="75px"></td>
                    <td>Wheel set</td>
                    <td>Lorem ipsum dolor sit quos pariatur excepturi dignissimos veritatis </td>
                    <td>7500 LKR</td>
                    <td>3</td>
                    <td><button type="button" class="btn btn-sm btn-outline-primary" onClick="#">Edit</button></td>
                    <td><button type="button" class="btn btn-sm btn-outline-danger" onClick="#">Delete</button></td>
                </tr>
                <tr>
                    <td><img src="images/bg.jpg" width="75px"></td>
                    <td>Wheel set</td>
                    <td>Lorem ipsum dolor sit quos pariatur excepturi dignissimos veritatis </td>
                    <td>7500 LKR</td>
                    <td>5</td>
                    <td><button type="button" class="btn btn-sm btn-outline-primary" onClick="#">Edit</button></td>
                    <td><button type="button" class="btn btn-sm btn-outline-danger" onClick="#">Delete</button></td>
                </tr>
                <tr>
                    <td><img src="images/bg.jpg" width="75px"></td>
                    <td>Wheel set</td>
                    <td>Lorem ipsum dolor sit quos pariatur excepturi dignissimos veritatis </td>
                    <td>7500 LKR</td>
                    <td>10</td>
                    <td><button type="button" class="btn btn-sm btn-outline-primary" onClick="#">Edit</button></td>
                    <td><button type="button" class="btn btn-sm btn-outline-danger" onClick="#">Delete</button></td>
                </tr>
                <tr>
                    <td><img src="images/bg.jpg" width="75px"></td>
                    <td>Wheel set</td>
                    <td>Lorem ipsum dolor sit quos pariatur excepturi dignissimos veritatis </td>
                    <td>7500 LKR</td>
                    <td>3</td>
                    <td><button type="button" class="btn btn-sm btn-outline-primary" onClick="#">Edit</button></td>
                    <td><button type="button" class="btn btn-sm btn-outline-danger" onClick="#">Delete</button></td>
                </tr>
                <tr>
                    <td><img src="images/bg.jpg" width="75px"></td>
                    <td>Wheel set</td>
                    <td>Lorem ipsum dolor sit quos pariatur excepturi dignissimos veritatis </td>
                    <td>7500 LKR</td>
                    <td>3</td>
                    <td><button type="button" class="btn btn-sm btn-outline-primary" onClick="#">Edit</button></td>
                    <td><button type="button" class="btn btn-sm btn-outline-danger" onClick="#">Delete</button></td>
                </tr>
            </table>
        </div>
    </div>
    </div>

    <?php include("importScripts.php"); ?>

</body>
</html>