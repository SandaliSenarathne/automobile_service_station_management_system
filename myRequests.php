<!DOCTYPE html>
<html lang="en">
<head>
    <title>My Requests</title>
    <?php include("importStyles.php"); ?>
</head>
<body>
    <div class="container-fluid  py-5 px-5" id="items">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <h2 class="fadeInDown text-center">My Service Requests</h1>
            <table class="table" id="itemsInCategory">
                <tr>
                    <th>Thumbnail</th>
                    <th>Service Type</th>
                    <th>Vehicle Number</th>
                    <th>Brand</th>
                    <th>Model</th>
                    <th>Message</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Requested On</th>
                    <th>Status</th>
                    <th></th>
                    <th></th>
                </tr>
                <tr>
                    <td><img src="images/bg.jpg" width="75px"></td>
                    <td>Normal Service</td>
                    <td>NC 8024</td>
                    <td>Toyota</td>
                    <td>Toyota Vitz</td>
                    <td>Lorem ipsum dolor sit quos pariatur excepturi dignissimos veritatis </td>
                    <td>05.10.2021</td>
                    <td>14:30</td>
                    <td>2038-01-19 03:14:07</td>
                    <td><span class="badge badge-primary" onClick="#">Pending</span></td>
                    <td><button type="button" class="btn btn-sm btn-outline-primary" onClick="#">Edit</button></td>
                    <td><button type="button" class="btn btn-sm btn-outline-danger" onClick="#">Delete</button></td>
                </tr>
                <tr>
                    <td><img src="images/bg.jpg" width="75px"></td>
                    <td>Normal Service</td>
                    <td>NC 8024</td>
                    <td>Toyota</td>
                    <td>Toyota Vitz</td>
                    <td>Lorem ipsum dolor sit quos pariatur excepturi dignissimos veritatis </td>
                    <td>05.10.2021</td>
                    <td>14:30</td>
                    <td>2038-01-19 03:14:07</td>
                    <td><span class="badge badge-success" onClick="#">Accepted</span></td>
                    <td></td>
                    <td><button type="button" class="btn btn-sm btn-outline-danger" onClick="#">Delete</button></td>
                </tr>
                <tr>
                    <td><img src="images/bg.jpg" width="75px"></td>
                    <td>Normal Service</td>
                    <td>NC 8024</td>
                    <td>Toyota</td>
                    <td>Toyota Vitz</td>
                    <td>Lorem ipsum dolor sit quos pariatur excepturi dignissimos veritatis </td>
                    <td>05.10.2021</td>
                    <td>14:30</td>
                    <td>2038-01-19 03:14:07</td>
                    <td><span class="badge badge-danger" onClick="#">Rejected</span></td>
                    <td></td>
                    <td><button type="button" class="btn btn-sm btn-outline-danger" onClick="#">Delete</button></td>
                </tr>
                <tr>
                    <td><img src="images/bg.jpg" width="75px"></td>
                    <td>Normal Service</td>
                    <td>NC 8024</td>
                    <td>Toyota</td>
                    <td>Toyota Vitz</td>
                    <td>Lorem ipsum dolor sit quos pariatur excepturi dignissimos veritatis </td>
                    <td>05.10.2021</td>
                    <td>14:30</td>
                    <td>2038-01-19 03:14:07</td>
                    <td><span class="badge badge-primary" onClick="#">Pending</span></td>
                    <td><button type="button" class="btn btn-sm btn-outline-primary" onClick="#">Edit</button></td>
                    <td><button type="button" class="btn btn-sm btn-outline-danger" onClick="#">Delete</button></td>
                </tr>
                <tr>
                    <td><img src="images/bg.jpg" width="75px"></td>
                    <td>Normal Service</td>
                    <td>NC 8024</td>
                    <td>Toyota</td>
                    <td>Toyota Vitz</td>
                    <td>Lorem ipsum dolor sit quos pariatur excepturi dignissimos veritatis </td>
                    <td>05.10.2021</td>
                    <td>14:30</td>
                    <td>2038-01-19 03:14:07</td>
                    <td><span class="badge badge-success" onClick="#">Accepted</span></td>
                    <td></td>
                    <td><button type="button" class="btn btn-sm btn-outline-danger" onClick="#">Delete</button></td>
                </tr>
            </table>
        </div>
    </div>
    </div>

    <?php include("importScripts.php"); ?>

</body>
</html>