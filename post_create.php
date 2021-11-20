<?php
//connect to post controller
include_once (dirname(__FILE__)).'/post_controller.php';

if(isset($_POST['submit'])){
    // Grab form inputs
    $title = $_POST['title'];
    $body = $_POST['recepe'];

    // create post if not empty
    $newPost = createPost($title, $body);
    if($newPost){
        header("location: ../chefpostarea.php");
    }
}