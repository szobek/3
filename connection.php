<?php
$host ="localhost";
$port ="3306";
$name ="docker";
$user ="root";
$pass ="";

$dsn = "mysql:host=" . $host . ";port=" . $port . ";dbname=" . $name;

try {
    $conn = new PDO($dsn, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
} catch (PDOException $e) {
    echo $e->getMessage();
}
