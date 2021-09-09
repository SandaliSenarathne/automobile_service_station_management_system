<div>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="width:100%">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="#">Features</a>
            <a class="nav-item nav-link" href="#">Pricing</a>
            <?php 
            if(hasLoggedIn()){
            ?>
                <a class="nav-item nav-link" href="#">ProfilePic</a>
            <?php
            }else{
            ?>
                <a class="nav-item nav-link" href="#">Login</a>
            <?php
            }
            ?>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    
    <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-8 align-self-end">
                    <h1 class="text-white font-weight-bold">Your Favorite Place for Free Bootstrap Themes</h1>
                    <hr class="divider" />
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white-75 mb-5">Start Bootstrap can help you build better websites using the Bootstrap framework! Just download a theme and start customizing, no strings attached!</p>
                    <a class="btn btn-primary btn-xl" href="#about">Find Out More</a>
                 </div>
            </div>
    </div>
</div>