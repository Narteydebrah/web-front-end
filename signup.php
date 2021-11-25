<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create an Account</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@300;400&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/889698bae7.js" crossorigin="anonymous"></script>

    <!-- CSS Elements -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/signup.css">
</head>
<body>

    <?php
    require_once '../model/database_credentials.php';

    $conn = new mysqli(servername, username, password, dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
 
    if (isset($_POST['submitBtn'])) {
        $name = $_POST['inputName'];
        $email = $_POST['inputEmail'];
        $department = $_POST['inputDepartment'];
        $password = $_POST['inputPassword'];
        $cpassword = $_POST['inputPassword2']; 

        $errors = [];

        if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
            $errors[0] = "Full Name must contain only alphabets and space";
        }
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
            $errors[1] = "Please Enter Valid Email ID";
        }
        if(strlen($password) < 6) {
            $errors[2] = "Password must be minimum of 6 characters";
        }       
        if($password != $cpassword) {
            $errors[3] = "Passwords must match";
        }
        if(isset($_POST['agree'])){
            $success = "Welldone";
        } else{
            $errors[4] = "You have to agree with the Terms and Condition before proceeding.";
        }


        if (count($errors) <= 0) {
            if(mysqli_query($conn, "INSERT INTO employee(employee_name, employee_email, department_name ,employee_password) VALUES('" . $name . "', '" . $email . "', '" . $department . "', '" . $password . "')")) {
                header("location: ../index.php");
                exit();
            } else {
                echo "Error: " . $sql . "" . mysqli_error($conn);
            }
        }
        mysqli_close($conn);
    }
    ?>

    <a href="../index.php"><img class ="logo" src="../images/employco.PNG" alt="logo"></a>
    <div class="login_container" style="margin-top:-4rem">
        <h3 class="intro">Create A Profile With Us To View And Track Your Projects</h3>
        <div class="login_box">
            <form method="post" class="row g-3" id="form" style="padding-bottom:10rem;" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <div class="col-12">
                    <label for="inputName" class="form-label">Full Name</label>
                    <input type="text" class="form-control" name="inputName" value="" required="">
                    <small class="text-danger"><?php if (isset($errors[0])) echo $errors[0]; ?></small>                    
                </div>
                <div class="col-6">
                    <label for="inputEmail" class="form-label">Email</label>
                    <input type="email" class="form-control" name="inputEmail" value="" required="">
                    <small class="text-danger"><?php if (isset($errors[1])) echo $errors[1]; ?></small>
                </div>
                <div class="col-6">
                    <label for="inputDepartment" class="form-label">Department</label>
                    <input type="text" class="form-control" name="inputDepartment" value="" required="">
                </div>
                <div class="col-12">
                    <label for="inputPassword" class="form-label">Password</label>
                    <input type="password" class="form-control" name="inputPassword" value="" required="">
                    <small class="text-danger"><?php if (isset($errors[2])) echo $errors[2]; ?></small>
                </div>
                <div class="col-12">
                    <label for="inputPassword" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" name="inputPassword2" value="" required="">
                    <small class="text-danger"><?php if (isset($errors[3])) echo $errors[3]; ?></small>
                </div>

                <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck" name="agree">
                    <label class="form-check-label" for="gridCheck">
                        I agree to the Terms and Conditions
                    </label>
                    <br>
                    <small class="text-danger"><?php if (isset($errors[4])) echo $errors[4]; ?></small> 
                </div>
                </div>
                <div class="col-12 account">
                    <input type="submit" name="submitBtn" class="btn create_account btn-lg btn-primary" value="Create An Account">
                </div>
            </form>
        </div>
    </div>

</body>
</html>