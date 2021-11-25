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
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../css/style.css" rel="stylesheet">
    <title>Blog Post</title>
  </head>
  <body>
   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <form method="POST" action="post_update.php?id=<?= $post['TypeID'] ?>" >
        <h1><?= $post['NameOfFood']; ?></h1>
        <textarea name="steps" rows="6" cols="40"><?= $post['Steps']; ?> </textarea>
        <br>
        <input name="submit" type="submit" value="update">
    </form>
    <div class="container container-custom">
        
        <a class="btn btn-primary" href="chefpostarea.php">Back to Home</a>
        <a href="post_delete.php?id=<?= $post['TypeID'] ?>" class="btn btn-danger btn-custom"> Delete</a> 
        <!-- <a href="post_update.php?id=<?= $post['TypeID'] ?>" class="btn btn-secondary btn-custom"> Update</a>  -->
    </div>
  </body>
</html>

