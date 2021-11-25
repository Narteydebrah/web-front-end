<?php

  require_once('db_cred.php');

  require('db_cred.php');

    $conn = new mysqli(SERVER, USERNAME, PASSWD, DATABASE);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
 
    if (isset($_POST['submitBtn'])) {
        
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $password = $_POST['psw'];
         

        $errors = [];

        if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
            $errors[1] = "Please Enter Valid Email ID";
        }
        if(strlen($password) < 9) {
            $errors[2] = "Password must be minimum of 8 characters";
        }       
        

        
        if (count($errors) <= 0) {
            if(mysqli_query($conn, "INSERT INTO loginform(user,Pass) VALUES('" . $email . "', '" . $password . "')")) {
                header("location: chefsbanklogin.php");
                exit();
            } else {
                echo "Error: " . $sql . "" . mysqli_error($conn);
            }
        }
        mysqli_close($conn);
    }
    

    ?>
<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN-UP CHEF'S BANK</title>
    <link rel="stylesheet" href="https://www.markuptag.com/bootstrap/5/css/bootstrap.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <!-- Core Stylesheet -->
    <link href="signupStyles.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <!--link href="css/responsive/responsive.css" rel="stylesheet"> -->

    <script type="text/javascript" src="script.js"></script>
</head>

<body>

    

<div class="footer-logo-area text-center">
                            <a href="index.html" class="yummy-logo">CHEFS BANK</a>

                        </div>




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
                                        <a class="nav-link" href="chefsbanksignup.php">Sign Up</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="chefsbanklogin.php">Log in</a>
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



<form method="post" name = "form1" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div class="main center">
        <div class="box center">
            <h1 class="heading">Create Account</h1>
            <input type="email" name="email" id="" class="input" placeholder="Enter Email">
            <div class="gender center">
                <input type="radio" name="gender" id="">
                <input type="radio" name="gender" id="">
            </div>
            <input type="password" name="psw" class="input" id="psw" placeholder="Create Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
            
            <//input type="password" name="text1" class="input" placeholder="Re-Enter Password">
            <div id="message" class="error-message container">
                <p id="letter" class="letter">Please enter a letter</p>
                <p id="number" class="number">Please enter a number</p>
                <p id="length" class="length">Please ensure are at least 8 characters long</p>
                <p id="capital" class="capital">Please ensure there is a capital letter</p>
            </div>
            
     <!-- <button class="btn" onclick="CheckPassword(document.form1.text1)">Sign Up </button> -->
            <input type="submit" name="submitBtn" class="btn create_account btn-lg btn-primary" value="Create An Account">
        </div>
    </div>
</form>


<footer class="footer_area section_padding_130_0">
      <div class="container">
        <div class="row">
          <!-- Single Widget-->
          <div class="col-12 col-sm-6 col-lg-4">
            <div class="single-footer-widget section_padding_0_130">
              <!-- Footer Logo-->
              <div class="footer-logo mb-3"></div>
              <p>CHEFSBANK</p>
              <!-- Copywrite Text-->
              <div class="copywrite-text mb-5">
                <p class="mb-0">Made with <i class="lni-heart mr-1"></i>by<a class="ml-1" href="https://wrapbootstrap.com/user/DesigningWorld">Designing World</a></p>
              </div>
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
</html>