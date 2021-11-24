<?php
include_once (dirname(__FILE__)).'/post_controller.php';

if(isset($_GET['id'])){
    $deletePost = deletePost($_GET['id']);
    if($deletePost){
        header("location: ../chefpostarea.php");
    }else{
        echo "something went wrong";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p> Successfully deleted recipe </p>
</body>
</html>