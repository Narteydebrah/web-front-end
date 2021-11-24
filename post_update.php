<?php
include_once (dirname(__FILE__)).'/post_controller.php';

if(isset($_GET['id'])){
    $post = getSinglePost($_GET['id']);
    if(empty($post)){
      header("location: chefpostarea.php");
    }
    else{
    }
}

// check if button is clicked
if(isset($_POST['steps'])){
    // Grab form data
    $id = $post['TypeID'];
    $title =  $post['NameOfFood'];
    $body = $_POST['steps'];

    // update post if empty
    $updatedPost = updatePost($id, $title, $body);
    if($updatedPost){
        header("location: post.php?id=".$id);
    }else{
        header("location: post_update.php?id=".$id);
    }
}
?>


