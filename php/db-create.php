<?php
include_once('db-connect-autorization.php');

$connect = new Connect();
$conn = $connect->connect();

$sql = "CREATE TABLE table_users_server (id INTEGER AUTO_INCREMENT PRIMARY KEY, name VARCHAR(50), login VARCHAR(50), password VARCHAR(50));";

mysqli_query($conn, $sql);
$err = mysqli_connect_error();
if ($err) {
    echo 'Error code 1:' . $err . '<br>';
    exit();
}
$conn->close();