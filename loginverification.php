<?php
// use \Phppot\DataSource;
use chefsbankdbconnection;

$message = "";
if (count($_POST) > 0) {
    $isSuccess = 0;
    require_once __DIR__ . '/chefsbankdbconnection.php';
    $conn = new chefsbankdbconnection();
    //crosscheck with db variables
    $query = 'SELECT * FROM users WHERE userName= ?';
    $paramType = 's';
    $paramValue = array(
        $_POST["userName"]
    );
    $result = $conn->select($query, $paramType, $paramValue);

    if (! empty($result)) {

        $hashedPassword = $result[0]["password"];
        if (password_verify($_POST["password"], $hashedPassword)) {
            $isSuccess = 1;
        }
    }
    if ($isSuccess == 0) {
        $message = "Invalid Username or Password!";
    } else {
        header("Location:  ./success-message.php");// redirect to homepage(put homepage link here)
    }
}
?>