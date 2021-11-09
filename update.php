<?php
    if (isset($_GET["user_id"])){
        $receivedName = $_GET["user_name"];
        $receivedEmail = $_GET["user_email"];
        $receivedPassword = $_GET["user_password"];
        $receivedId = $_GET["user_id"];
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
<h1 class="text-info text-center">Firefox Poultry Farm</h1>
<div class="row">
    <div class="col-3"></div>
    <div class="col-6">
        <h3 class="text-info text-center">Update USers</h3>
        <form method="post" action="update_handler.php">
            <input value="<?php echo $receivedId;?>" type="hidden" name="id">
            <input  value="<?php echo $receivedName;?>"  name="x" class="form-control"type="text"placeholder="Update name"><br><br>
            <input  value="<?php echo $receivedEmail;?>" name="y" class="form-control"type="email"placeholder="Update email"><br><br>
            <input  value="<?php echo $receivedPassword;?>" name="z" class="form-control"type="password"placeholder="Update password"><br><br>
            <input name="btn_update" class="btn btn-outline-info btn-block" type="submit"value="Update">
            <a class="btn btn-block btn-outline-success" href="users.php">Back</a>
        </form>
    </div>
</div>
<div class="col-3"></div>

</body>
</html>
