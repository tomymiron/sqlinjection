<?php

    if($_GET){
        $user =  $_GET['user']; 
    }else{
      echo "Url has no user";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style type="text/css"><?php include("css/main.css"); ?></style>
</head>
<body>
    <h2>Welcome!</h2>
    <h2>You are the user: <?php echo($user)?></h2>
</body>
</html>