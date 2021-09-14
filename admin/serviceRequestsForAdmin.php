<!DOCTYPE html>
<html lang="en">
<head>
    <title>Service Requests</title>
    <?php include("../importStyles.php"); ?>
</head>
<body>
    <div class="container-fluid  py-5 px-5" id="items">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <h2 class="fadeInDown text-center">Service Requests</h1>
            <table class="table" id="itemsInCategory">
                <tr>
                    <th></th>
                    <th>Service Type</th>
                    <th>Vehicle Number</th>
                    <th>Brand</th>
                    <th>Model</th>
                    <th>Message</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Requested On</th>
                    <th>Status</th>
                </tr>
                <tr>
                    <td><img src="../images/bg.jpg" width="75px"></td>
                    <td>Normal Service</td>
                    <td>NC 8024</td>
                    <td>Toyota</td>
                    <td>Toyota Vitz</td>
                    <td>Lorem ipsum dolor sit quos pariatur excepturi dignissimos veritatis </td>
                    <td>05.10.2021</td>
                    <td>14:30</td>
                    <td>2038-01-19 03:14:07</td>
                    <td>
                        <select class="custom-select" name="status">
                            <option class="text-primary" value="0">Pending</option>
                            <option class="text-success" value="1">Accepted</option>
                            <option class="text-danger" value="2">Rejected</option>
                            <option class="text-warning" value="3">Completed</option>
                        </select>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    </div>

    <?php include("../importScripts.php"); ?>

</body>
</html>