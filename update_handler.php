<?php
if (isset($_POST["btn_update"])){
    $userId = $_POST["id"];
    $updateNAme = $_POST["x"];
    $updateEmail = $_POST["y"];
    $updatePassword = $_POST["z"];

        //connect to the database
    require_once "connection.php";

    //prepare the update qeury

    $updateQuery = "UPDATE `users` SET `jina`='$updateNAme',`arafa`='$updateEmail',`siri`='$updatePassword' WHERE id = '$userId'";

        //finally execute the update using the mysqli query function

    $update = mysqli_query($connection, $updateQuery);
    if (isset($update)){
        header("location:users.php");
    }else{
        echo "update failed";
    }
}