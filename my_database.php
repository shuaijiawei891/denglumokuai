<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$database = "mydb";
//创建连接
$conn = new mysqli($servername,$username,$password,$database);
//检测连接
if($conn->connect_error){
	die("连接失败：".$conn->connect_error);
}
echo "";
?>