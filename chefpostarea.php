<?php
//connect to database class
include_once (dirname(__FILE__)).'\post_controller.php';

// $posts = getPosts();
if(isset($_POST['createBtn'])){
  session_start();
  $_SESSION['title'] = $_POST['title'];
  $_SESSION['recepe'] = $_POST['recepe'];
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://www.markuptag.com/bootstrap/5/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<link href="style.css" rel="stylesheet">
<link href="css/responsive/responsive.css" rel="stylesheet">


<style>

body{margin-top:20px;}
.footer_area {
    position: relative;
    z-index: 1;
    overflow: hidden;
  webkit-box-shadow: 0 8px 48px 8px rgba(47, 91, 234, 0.175);
    box-shadow: 0 8px 48px 8px rgba(47, 91, 234, 0.175);
    padding:60px;
}
.footer_area .row {
    margin-left: -25px;
    margin-right: -25px;
}
.footer_area .row .col,
.footer_area .row .col-1,
.footer_area .row .col-10,
.footer_area .row .col-11,
.footer_area .row .col-12,
.footer_area .row .col-2,
.footer_area .row .col-3,
.footer_area .row .col-4,
.footer_area .row .col-5,
.footer_area .row .col-6,
.footer_area .row .col-7,
.footer_area .row .col-8,
.footer_area .row .col-9,
.footer_area .row .col-auto,
.footer_area .row .col-lg,
.footer_area .row .col-lg-1,
.footer_area .row .col-lg-10,
.footer_area .row .col-lg-11,
.footer_area .row .col-lg-12,
.footer_area .row .col-lg-2,
.footer_area .row .col-lg-3,
.footer_area .row .col-lg-4,
.footer_area .row .col-lg-5,
.footer_area .row .col-lg-6,
.footer_area .row .col-lg-7,
.footer_area .row .col-lg-8,
.footer_area .row .col-lg-9,
.footer_area .row .col-lg-auto,
.footer_area .row .col-md,
.footer_area .row .col-md-1,
.footer_area .row .col-md-10,
.footer_area .row .col-md-11,
.footer_area .row .col-md-12,
.footer_area .row .col-md-2,
.footer_area .row .col-md-3,
.footer_area .row .col-md-4,
.footer_area .row .col-md-5,
.footer_area .row .col-md-6,
.footer_area .row .col-md-7,
.footer_area .row .col-md-8,
.footer_area .row .col-md-9,
.footer_area .row .col-md-auto,
.footer_area .row .col-sm,
.footer_area .row .col-sm-1,
.footer_area .row .col-sm-10,
.footer_area .row .col-sm-11,
.footer_area .row .col-sm-12,
.footer_area .row .col-sm-2,
.footer_area .row .col-sm-3,
.footer_area .row .col-sm-4,
.footer_area .row .col-sm-5,
.footer_area .row .col-sm-6,
.footer_area .row .col-sm-7,
.footer_area .row .col-sm-8,
.footer_area .row .col-sm-9,
.footer_area .row .col-sm-auto,
.footer_area .row .col-xl,
.footer_area .row .col-xl-1,
.footer_area .row .col-xl-10,
.footer_area .row .col-xl-11,
.footer_area .row .col-xl-12,
.footer_area .row .col-xl-2,
.footer_area .row .col-xl-3,
.footer_area .row .col-xl-4,
.footer_area .row .col-xl-5,
.footer_area .row .col-xl-6,
.footer_area .row .col-xl-7,
.footer_area .row .col-xl-8,
.footer_area .row .col-xl-9,
.footer_area .row .col-xl-auto {
    padding-right: 25px;
    padding-left: 25px;
}

.single-footer-widget {
    position: relative;
    z-index: 1;
}
.single-footer-widget .copywrite-text a {
    color: #747794;
    font-size: 1rem;
}
.single-footer-widget .copywrite-text a:hover,
.single-footer-widget .copywrite-text a:focus {
    color: #3f43fd;
}
.single-footer-widget .widget-title {
    margin-bottom: 1.5rem;
}
.single-footer-widget .footer_menu li a {
    color: #747794;
    margin-bottom: 1rem;
    display: block;
    font-size: 1rem;
}
.single-footer-widget .footer_menu li a:hover,
.single-footer-widget .footer_menu li a:focus {
    color: #3f43fd;
}
.single-footer-widget .footer_menu li:last-child a {
    margin-bottom: 0;
}

.footer_social_area {
    position: relative;
    z-index: 1;
}
.footer_social_area a {
    border-radius: 50%;
    height: 40px;
    text-align: center;
    width: 40px;
    display: inline-block;
    background-color: #f5f5ff;
    line-height: 40px;
    -webkit-box-shadow: none;
    box-shadow: none;
    margin-right: 10px;
}
.footer_social_area a i {
    line-height: 36px;
}
.footer_social_area a:hover,
.footer_social_area a:focus {
    color: #ffffff;
}

@-webkit-keyframes bi-cycle {
    0% {
        left: 0;
    }
    100% {
        left: 100%;
    }
}

@keyframes bi-cycle {
    0% {
        left: 0;
    }
    100% {
        left: 100%;
    }
}
ol li, ul li {
    list-style: none;
}

ol, ul {
    margin: 0;
    padding: 0;
}


.btn-primary {
  color: #fff;
  background-color: #ff8c00;
  border-color: #ff8c00;
}







a{
    font-weight:500;
}


.formtextarea{
    display:block;
    text-align:center;
}





</style>



</head>
<br>
<br>
<body>
<center><h1 style = "font-size:62px;">CHEFS BANK </h1></center>

<nav class="navbar navbar-expand-lg">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#yummyfood-footer-nav" aria-controls="yummyfood-footer-nav" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars" aria-hidden="true"></i> Menu</button>
                            <!-- Menu Area Start -->
                            <div class="collapse navbar-collapse justify-content-center" id="yummyfood-footer-nav">
                                <ul class="navbar-nav">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="chefsbankindex.html">Home <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="CHEFSBANK_RECIPES_PAGE.html">Recipes</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="chefsbanksignup.html">Sign Up</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="chefsbanklogin.html">Log in</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Contact</a>
                                    </li>
                                   
                                </ul>
                            </div>
                        </nav>
<br>
<br>
<div class="formtextarea">

<form method="POST" action="post_create.php?>">

        <!-- titlebar -->
       <label for="name" class="form-label">Post Title</label>
      <input type="text" name="NameOfFood" class="form-control" id="name" required ><br>
      <br> 
    <label for="recep">Type your recipes here</label><br>
     <textarea name="steps"  rows="6" cols="40"> Write something here...</textarea>
    <br>
    <input type="submit" name="submit" class="btn btn-primary" value="Create" />
  </form>

</div>
<br>
<br>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

<div>
  <h3 class="mt-5">Your Posts</h3>
  <ul class="list-group">
      <?php
      $posts = getPosts();
        foreach($posts as $key => $value){
          ?>
              <li class="list-group-item"> <?= $value['NameOfFood'] ?>  
                  <a href="post_delete.php?id=<?= $value['TypeID'] ?>" class="btn btn-danger btn-custom"> Delete</a> 
                  <a href="post_update.php?id=<?= $value['TypeID'] ?>" class="btn btn-secondary btn-custom"> Update</a> 
                  <a href="post.php?id=<?= $value['TypeID'] ?>" class="btn btn-primary btn-custom">View</a>
              </li>
            <?php
            }
          ?>    
  </ul>
  
</div>









<br>
<br>
<footer class="footer_area section_padding_130_0">
      <div class="container">
        <div class="row">
          <!-- Single Widget-->
          <div class="col-12 col-sm-6 col-lg-4">
            <div class="single-footer-widget section_padding_0_130">
              <!-- Footer Logo-->
              <div class="footer-logo mb-3"></div>
              <p>CHEFS BANK</p>
              
              <!-- Footer Social Area-->
              <div class="footer_social_area"><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Pinterest"><i class="fa fa-pinterest"></i></a><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Skype"><i class="fa fa-skype"></i></a><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></div>
            </div>
          </div>
          <!-- Single Widget-->
          <div class="col-12 col-sm-6 col-lg">
            <div class="single-footer-widget section_padding_0_130">
              <!-- Widget Title-->
              <h5 class="widget-title">About</h5>
              <!-- Footer Menu-->
              <div class="footer_menu">
                <ul>
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Corporate Sale</a></li>
                  <li><a href="#">Terms &amp; Policy</a></li>
                  <li><a href="#">Community</a></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Single Widget-->
          <div class="col-12 col-sm-6 col-lg">
            <div class="single-footer-widget section_padding_0_130">
              <!-- Widget Title-->
              <h5 class="widget-title">Support</h5>
              <!-- Footer Menu-->
              <div class="footer_menu">
                <ul>
                  <li><a href="#">Help</a></li>
                  <li><a href="#">Support</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="#">Term &amp; Conditions</a></li>
                  <li><a href="#">Help &amp; Support</a></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Single Widget-->
          <div class="col-12 col-sm-6 col-lg">
            <div class="single-footer-widget section_padding_0_130">
              <!-- Widget Title-->
              <h5 class="widget-title">Contact</h5>
              <!-- Footer Menu-->
              <div class="footer_menu">
                <ul>
                  <li><a href="#">Call Centre</a></li>
                  <li><a href="chefsbanksignup.html">Join Us</a></li>
                  <li><a href="#">Term &amp; Conditions</a></li>
                  <li><a href="#">Help Center</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>








</body>




