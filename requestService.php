<!DOCTYPE html>
<html lang="en">
<head>
    <title>Service Request</title>
    <?php include("importStyles.php"); ?>
</head>
<body>
    <div class="container-fluid" id="requestService">
        <div class="row">
        <div class="col-sm-12  text-center">
        <h1>Request for a xyz service</h1>
            <div class="card">
            <div class="card-body">
                <form class="login-form">
                    <div class="form-group">
                        <input type="text" class="form-control" id="vehicleNumber" placeholder="Vehicle Number" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="vehicleBrand" placeholder="Vehicle Brand" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="vehicleModel" placeholder="Vehicle Model" required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" id="message" placeholder="Message (optional)" max="1000" rows="2"></textarea>
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