<?php
//connect to database class
// require_once ('db_cred.php');
require_once ('db_class.php');

class Post extends db_connection {
		
    public function create($title, $body){
        // sql query
        $sql = "INSERT INTO `Foods`(`NameOfFood`, `Steps`) VALUES ('$title','$body')";

        // run query
        return $this->db_query($sql);
    }

    public function getPosts(){
        //sql query
        $sql = "SELECT * FROM `posts`";

        //run query
        return $this->db_query($sql);
    }

    public function getFoodItems(){
        //sql query
        $sql = "SELECT * FROM `Foods`";

        //run query
        return $this->db_query($sql);
    }


    public function getSinglePost($id){
        // sql query
        $sql = "SELECT * FROM `Foods` WHERE `TypeID`='$id'";

        // run query
        return $this->db_query($sql);
    }

    public function update($id, $title, $body){
        // sql query
        $sql = "UPDATE `Foods` SET `NameOfFood`='$title',`Steps`='$body' WHERE `TypeID`='$id'";

        // run query
        return $this->db_query($sql);
    }

    public function delete($id){
        // sql query
        $sql = "DELETE FROM `Foods` WHERE `TypeID`='$id'";

        // run query
        return $this->db_query($sql);
    }
}

?>