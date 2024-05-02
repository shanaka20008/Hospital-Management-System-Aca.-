<?php 

include_once('connect.php');

/*Insert Query 

*/
if (isset($_POST['upsh'])) {
 $ID = $_POST['ID'];
 $reso = $_POST['reso'];
 $rno = $_POST['rno'];
 $timepe = $_POST['time-pe'];
 $PID =  $_POST['PID'];

 $sql = "INSERT INTO shedular(S_ID,reson,room_no,time_period,R_ID) VALUES ('{$ID}','{$reso}','{$rno}','{$timepe}','{$PID}');";

 mysqli_query($connection,$sql);

 header('Location: edit shedule.php?insert=success');
}
?>

