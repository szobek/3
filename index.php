<?php
session_start();

require_once 'connection.php';
global $conn;

if($_REQUEST && $_REQUEST['name']!=""){
    $name = $_REQUEST["name"];
    $email = $_REQUEST["email"];
    $conn->exec("INSERT INTO `users`(`name`, `email`) VALUES ('$name','$email')");

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form  action="" method="post" >
<input type="text" placeholder="name" name="name" autocomplete="off">
<input type="text" placeholder="email" name="email" autocomplete="off">
<button>Save</button>
</form>
    
</body>
</html>