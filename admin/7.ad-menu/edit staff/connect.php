<?php

$connection = mysqli_connect('localhost','root','','arogya hospital');

if(mysqli_connect_errno()){
	die('Database connection failed'. mysqli_connect_errno());
}else{
	echo "";
}

?>