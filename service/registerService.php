<?php
include_once('../my_database.php');
var_dump($_POST);
$name=$_POST['name'];
$password=$_POST['password'];
$sex=$_POST['sex'];
$birthday=$_POST['birthday'];
$address=$_POST['address'];


$stmt = $conn->prepare("insert into user(name,password,sex,birthday,address) values(?,?,?,?,?)");
$stmt->bind_param("sssss",$uname,$upassword,$usex,$ubirthday,$uaddress);
var_dump($stmt->execute());
//if($conn->query($sql))
//	header('Location:http://10.2.53.36/phpweb/php_2/my_database/myda.php?name='.$name);
//	else
//	echo'error:'.$conn->error;
?>