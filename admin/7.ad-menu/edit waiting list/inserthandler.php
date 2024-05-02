<?php 

include_once('connect.php');

/*Insert Query 

INSERT INTO tableName(Column1,Column2....) VALUES (Value1, Value2...);

*/
if (isset($_POST['upW'])) {
 $ID = $_POST['ID'];
 $date = $_POST['date'];
 $type = $_POST['type'];
 $resn = $_POST['resn'];
 $sh_Namae = $_POST['sh_Namae'];
 $INST =  $_POST['IN-ST'];
 $PID =  $_POST['PID'];

 $sql = "INSERT INTO waiting_list(W_ID,type,allocate_time,reson,shedular_name,intensive_status,Pa_ID) VALUES ('{$ID}','{$date}','{$type}','{$resn}','{$sh_Namae}','{$INST}','{$PID}');";

 mysqli_query($connection,$sql);

 header('Location: ad-waiting-list.php?insert=success');
}
?>

