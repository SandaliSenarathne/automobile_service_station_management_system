<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Dashboard</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrapper">
        <!-- Require side bar -->
        <?php require_once 'sideBar.php'; ?>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Toggle Sidebar</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="container-fluid  py-5 px-5" id="items">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12">
            <h2 class="fadeInDown text-center">Categories</h1>
            <table class="table table-secondary">
                <tr>
                    <td><img src="../images/bg.jpg" width="75px"></td>
                    <td>Wheels</td>
                    <td><button type="button" class="btn btn-sm btn-outline-primary" onClick="#">Edit</button></td>
                    <td><button type="button" class="btn btn-sm btn-outline-danger" onClick="#">Delete</button></td>
                    <td><button type="button" class="btn btn-sm btn-outline-success" onClick="#">View</button></td>
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
                    <td><img src="../images/bg.jpg" width="75px"></td>
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
            
            <div class="line"></div>

            </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>
