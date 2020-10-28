<?php
	include('my_database.php');
	$sql="select name from user where name = '".$_GET['myname']."'";
	$result = $conn->query($sql);
	if($result ->fetch_assoc() == NULL) echo "ok";
	else echo "no";

?>