<?php
function myConnect() {
    $servername = "127.0.0.1:3306";
    $username = "root";
    $password = "";
    $dbname = "trainphp";
    $conn = mysqli_connect($servername, $username, $password);
    mysqli_select_db($conn, $dbname);
    // mysqli_query($conn, "SET NAME utf-8");
    mysqli_set_charset($conn, "utf8");
    return $conn;
}
?>