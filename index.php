<?php 
    session_start();

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dhashish Auto Spa</title>
    <?php include("importStyles.php"); ?>
</head>
<body>
    <?php
        require_once("header.php");
    ?>

    <!-- welcome -->
    <div class="container-fluid" id="home">
        <div class="row align-items-center justify-content-center text-center">
            <div class="col-lg-8 align-self-end">
                <h1 class="text-white font-weight-bold">Welcome to Dhashish Auto Spa!</h1>
                <hr class="divider bg-white" />
            </div>
            <div class="col-lg-8 align-self-baseline">
                <h6 class="text-white mb-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis consequuntur, minima accusamus illum inventore eaque consectetur officiis amet dicta sunt aspernatur sed dolore animi, a pariatur, ducimus est adipisci illo?</h6>
                <a class="btn btn-outline-light btn-lg" href="#about">Get Started</a>
            </div>
        </div>
    </div>

    <!-- About Us -->
    <section id="about" class="pt-5 pb-5 bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <div class="animated fadeInLeft text-white">
                            <h2>
                            ABOUT US
                            </h2>
                            <p>
                                <blockquote>
                                    Our mission is to make Colombo the right type of city!
                                </blockquote>
                            </p>
                            <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
                            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
                            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in 
                            culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="animated fadeInRight">
                            <img src="images/logo.png" width="100%" alt="">
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- Services -->
    <section id="services" class="pt-5 pb-5">
        <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="fadeInDown text-center">SERVICES</h1>
                            <div class="row fadeInDown mt-5" style="color:#333333">
                                
                                    <div class="col-lg-3 col-md-3 col-sm-12 my-1">
                                        <div class="card card-margin">
                                            <div class="bg-image hover-overlay ripple" data-ripple-color="light">
                                                <img
                                                    src="images/normal_service.jpg"
                                                    class="img-fluid center-cropped"
                                                    style="height:20vh; object-fit: cover; object-position: center; width:100%;"
                                                />
                                            </div>
                                            <div class="card-body" style="height:250px;">
                                                <h5 class="card-title">Normal Service</h5>
                                                <p class="card-text">
                                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum impedit sequi voluptates.
                                                </p>
                                                <a href="requestService.php?id=1" class="btn btn-primary" style="position:absolute; bottom:15px; left:15px; right:15px;">Request</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12 my-1">
                                        <div class="card card-margin">
                                            <div class="bg-image hover-overlay ripple" data-ripple-color="light">
                                                <img
                                                    src="images/repair_service.jpg"
                                                    class="img-fluid center-cropped"
                                                    style="height:20vh; object-fit: cover; object-position: center; width:100%;"
                                                />
                                            </div>
                                            <div class="card-body" style="height:250px;">
                                                <h5 class="card-title">Repair Service</h5>
                                                <p class="card-text">
                                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum impedit sequi voluptates.
                                                </p>
                                                <a href="requestService.php?id=2" class="btn btn-primary" style="position:absolute; bottom:15px; left:15px; right:15px;">Request</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12 my-1">
                                        <div class="card card-margin">
                                            <div class="bg-image hover-overlay ripple" data-ripple-color="light">
                                                <img
                                                    src="images/breakdown_service.jpg"
                                                    class="img-fluid center-cropped"
                                                    style="height:20vh; object-fit: cover; object-position: center; width:100%;"
                                                />
                                            </div>
                                            <div class="card-body" style="height:250px;">
                                                <h5 class="card-title">Breakdown Service</h5>
                                                <p class="card-text">
                                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum impedit sequi voluptates.
                                                </p>
                                                <a href="requestService.php?id=3" class="btn btn-primary" style="position:absolute; bottom:15px; left:15px; right:15px;">Request</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12 my-1">
                                        <div class="card card-margin">
                                            <div class="bg-image hover-overlay ripple" data-ripple-color="light">
                                                <img
                                                    src="images/modification_service.jpg"
                                                    class="img-fluid center-cropped"
                                                    style="height:20vh; object-fit: cover; object-position: center; width:100%;"
                                                />
                                            </div>
                                            <div class="card-body" style="height:250px;">
                                                <h5 class="card-title">Modification Service</h5>
                                                <p class="card-text">
                                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum impedit sequi voluptates.
                                                </p>
                                                <a href="requestService.php?id=4" class="btn btn-primary" style="position:absolute; bottom:15px; left:15px; right:15px;">Request</a>
                                            </div>
                                        </div>
                                    </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
         </div>
    </section>

     <!-- Contact Us -->
     <section id="contact" class="pt-5 pb-5 bg-dark text-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3"></div>
                    <div class="col-lg-6 col-md-6">
                        <div class="animated fadeInLeft text-center">
                            <h2>
                            CONTACT US
                            </h2>
                            <p>
                                <blockquote>
                                    Leave us a message.
                                </blockquote>
                            </p>
                            <form class="login-form">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="clientName" placeholder="Your Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" placeholder="E-mail">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" rows="3" id="message" placeholder="Message"></textarea>
                                </div>
                            </form>
                            <button type="button" class="btn btn-outline-light" onClick="#">Send</button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3"></div>
                    <!-- <div class="col-md-4 col-sm-4">
                        <div class="animated fadeInRight">
                            <img src="images/logo.png" width="100%" alt="">
                        </div>
                    </div> -->
                </div>
            </div>
    </section>



    <?php include("importScripts.php"); ?>

</body>
</html>
