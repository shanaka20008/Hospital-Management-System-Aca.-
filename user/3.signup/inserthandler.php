<?php 

include_once('connect.php');



if (isset($_POST['log'])) {
 $useN = $_POST['useN'];
 $pa1 =  $_POST['pa1'];
 $pa2 = $_POST['pa2'];
 $position="user";


    $sql = "INSERT INTO user(username,password,position) VALUES ('{$useN}','{$pa1}','{$position}');";

 mysqli_query($connection,$sql);

 header('Location: login.php?insert=success');
 }
 


?>

