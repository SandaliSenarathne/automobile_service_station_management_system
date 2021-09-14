<!-- Navigation -->
<header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark smooth-scroll" style="width:100%">
        <span class="navbar-brand" style="font-family: 'Kelly Slab';">Dhashish Auto Spa</span>    
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link" href="index.php#home">Home</a>
                <a class="nav-item nav-link" href="index.php#about">About Us</a>
                <a class="nav-item nav-link" href="index.php#services">Services</a>
                <a class="nav-item nav-link mr-5" href="index.php#contact">Contact Us</a>
                <?php
                    //hide login and signup if logged in
                    if(!isset($_SESSION['user']['email'])){
                        ?>
                         <a class="nav-item nav-link" href="login.php">Login</a>
                        <a class="nav-item nav-link" href="signup.php">SignUp</a>
                        <?php
                    }else{
                        ?>
                        <a class="nav-item nav-link" href="myRequests.php">My Requests</a>
                        <a class="nav-item nav-link" href="logout.php">Logout</a>
                        <?php
                    }
                ?>
               
                <!-- if(hasLoggedIn()){
                    <a class="nav-item nav-link" href="#">ProfilePic</a>
                }else{
                    <a class="nav-item nav-link" href="#">Login</a>
                } -->
                </div>
            </div>
        </nav>
    </header>