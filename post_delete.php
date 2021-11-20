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