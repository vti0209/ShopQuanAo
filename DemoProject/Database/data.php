<?php
$mysqli = new mysqli("localhost","root","");
if ($mysqli===false) {
    die("EPROR; Could not connect.".$mysqli->connect_error);
}
$sql = "CREATE DATABASE THOITRANG";
if ($mysqli->query($sql) === TRUE) {
    echo "database creates succesfully";
}else{
    echo "ERROR; Could nỏ able to execute $sql".$mysqli->error;
}
?>