<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dhashish Auto Spa</title>
    <?php include("importStyles.php"); ?>
</head>
<body>
    <!-- Navigation -->
    <header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark smooth-scroll" style="width:100%">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link" href="#home">Home</a>
                <a class="nav-item nav-link" href="#about">About Us</a>
                <a class="nav-item nav-link" href="#services">Services</a>
                <a class="nav-item nav-link" href="login.php">Login</a>
                <a class="nav-item nav-link" href="signup.php">SignUp</a>
                <!-- if(hasLoggedIn()){
                    <a class="nav-item nav-link" href="#">ProfilePic</a>
                }else{
                    <a class="nav-item nav-link" href="#">Login</a>
                } -->
                </div>
            </div>
        </nav>
    </header>

    <!-- welcome -->
    <div class="container-fluid" id="home">
        <div class="row align-items-center justify-content-center text-center">
            <div class="col-lg-8 align-self-end">
                <h1 class="text-black font-weight-bold">Welcome to Dhashish Auto Spa!</h1>
                <hr class="divider" />
            </div>
            <div class="col-lg-8 align-self-baseline">
                <p class="text-black-75 mb-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis consequuntur, minima accusamus illum inventore eaque consectetur officiis amet dicta sunt aspernatur sed dolore animi, a pariatur, ducimus est adipisci illo?</p>
                <a class="btn btn-primary btn-xl" href="#about">Get Started</a>
            </div>
        </div>
    </div>

    <!-- About Us -->
    <section id="about" class="pt-5 pb-5 bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <div class="animated fadeInLeft">
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
    <section id="services" class="pt-5 pb-5 bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <div class="animated fadeInLeft">
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


    <?php include("importScripts.php"); ?>

</body>
</html>
