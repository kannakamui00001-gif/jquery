<?php
$localhost = "localhost";
$user = "root";
$password = "";
$database = "food";

$conn = mysqli_connect($localhost, $user, $password, $database);

mysqli_set_charset($conn, "utf8");

?>