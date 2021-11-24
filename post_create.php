<?php
//connect to post controller
include_once (dirname(__FILE__)).'/post_controller.php';



if(isset($_POST['steps'])){
    // Grab form inputs
    $title = $_POST['NameOfFood'];
    $body = $_POST['steps'];

    

    // create post if not empty
    $newPost = createPost($title, $body);
    if($newPost){
        header("location: chefpostarea.php");
    }else{
        echo "Failed to create";
    }
}