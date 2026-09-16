<?php
$username = "root";
$password = "";
$server_name = "localhost";
$dbname = 'banhang1';
 
$conn = mysqli_connect($server_name,$username,$password,$dbname) or die("không thể kết nối tới database");
mysqli_query($conn,"SET NAMES 'UTF8'");
?>