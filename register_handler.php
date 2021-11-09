<?php
if (isset($_POST["btn_reg"])){
    //Receive data from the user
    $name=$_POST["x"];
    $email=$_POST["y"];
    $password=$_POST["z"];
    //To start saving,connect your created database
    require_once "connection.php";

//Now prepare the insert query
    $insertQuery= "INSERT INTO `users`(`id`, `jina`, `arafa`, `siri`) VALUES (null,'$name','$email','$password')";

    //Complete the saving using mysqli query function
    $save= mysqli_query($connection,$insertQuery);

    //Check if the saving was successful
    if (isset($save)){
        echo "User registered successfully";
    }else{
        echo "User registration failed";
    }
}
