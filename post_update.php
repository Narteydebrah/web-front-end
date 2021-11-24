<?php
include_once (dirname(__FILE__)).'/post_controller.php';

// check if button is clicked
if(isset($_POST['submit'])){
    // Grab form data
    $id = $_POST['id'];
    $title = $_POST['title'];
    $body = $_POST['body'];

    
    // update post if empty
    $updatedPost = updatePost($id, $title, $body);
    if($updatedPost){
        header("location: post.php?id=".$id);
    }else{
        header("location: post_update.php?id=".$id);
    }
}
// if(isset($_GET['id'])){
     $post = getSinglePost($_GET['id']);
//     if(empty($post)){
//       header("location: chefpostarea.php");
//     }
//     else{
//     }
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Recipe</title>
</head>
<body>

    <form method="POST">
        <h1><?= $post['NameOfFood']; ?></h1>
        <textarea name="body" rows="6" cols="40"><?= $post['Steps']; ?> </textarea>
        <br>
        <input type="submit" name="update" value="Update">
    </form>    
</body>
</html>


