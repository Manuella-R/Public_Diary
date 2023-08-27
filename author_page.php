<!DOCTYPE html>
<html lang="en" style="overflow:scroll;">
    <head>
        <meta charset="UTF-8">
        <meta name=" viewport" content=" width=device-width, initial-scale=1.0">
        <title>PUBLIC DIARY</title>
        <!--Where i am getting my fonts :D -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

        <!--CSS FILE LINK-->
        <link rel="stylesheet" href="css/vet.css">
    </head>
    <body>
        <!--header sect-->
        <header>

            <div id="menu-bar" class="fas fa-bars">  </div>

            <a href="#" class="logo"><span>Public</span>Diary</a>
           
            <nav class="navbar">
            <a href="update_profile.php">Update Profile</a>
            <a href="addarticles1.php">Write an Entry</a>
            <a href="viewarticles.php">View Articles</a>
            <a href="deletearticles.php">All Articles</a>
            <a href="login_form.php">Logout</a>

            
            </nav>
        <div class="icons">
            <i class="fas fa-search" id="search-btn"></i>
            <a href="update_profile.php">
            <i class="fas fa-user" id="login-btn"></i>
            </a>
        </div>

        <form action="" class="search-bar-container">
            <input type="search" id="search-bar" placeholder="search here <3 ">
            <label for="search-bar" class="fas fa-search"></label>
        </form>
        </header>
        <!--home sect starts-->
        <section class="home" id="home">
            <div class="content">
                <h3>A Public Diary and Newspaper</h3>
                <a href="viewarticles.php" class="btn">Read articles</a>
            </div>

            <div class="controls">
                
                <span class="img-btn active" data-src="images/brown.jpeg"></span>
                <span class="img-btn" data-src="images/ty.jpg"></span>
                <span class="img-btn" data-src="images/cl1.jpg"></span>
            </div>
            <div class="img-container">
                <img src="pictures/pet-5.jpeg" id="image-slider"></img>
            </div>
        </section>
        <section class="footer">
            <div class="box-container">
            <div class="box">
                <h3>about us</h3>
                <p>So that you feel less alone in this life.</p>
            </div>
            <div class="box">
                <h3>Contact out main offices</h3>
                <p>Email: DFGHJ@gmail.com<br>
                   NUMBER: +254678900987</p>
            </div>
            <div class="box">
                <h3>quick links</h3>
                <a href="#">Register</a>
                <a href="#">Login</a>
                <a href="#">update profile</a>

            </div>

            <div class="box">
                <h3>followus</h3><br>
                <a href="#">instagram</a>
                <a href="#">Facebook</a>
                <a href="#">tiktok</a>
                <a href="#">youtube</a>
                <a href="#">Myspace</a>
                 <a href="#">Snapchat</a>
            </div>
        </div>
            <h1 class="credit"> created by <span> Rehema Manuella</span> |All rights reserved|</h1>
        </section>

         <!--home sect starts-->

         <!--JS FILE :3 -->
        <script src="vet.js">

        </script>
    </body>
</html>