<?php
if (isset($_GET["user_id"])){
    $receivedId = $_GET["user_id"];


    //to delete connect to the database

    require_once "connection.php";

    //prepare the delete query

    $deleteQuery = "delete from users where id=$receivedId";

    //to complete the deletion using mysqli Query

    $delete = mysqli_query($connection, $deleteQuery);

    //check if the deletion was successful
    if (isset($delete)){
        //redirect to users.php to see if the user was actually deleted
        header("location:users.php");
    }else{
        echo "delete user failed";
    }
}