<?php 

include_once('connect.php');

/*Insert Query 

INSERT INTO tableName(Column1,Column2....) VALUES (Value1, Value2...);

*/
if (isset($_POST['submitPD'])) {
 $P_ID = $_POST['PatientID'];
 $AD =  $_POST['Address'];
 $DOB = $_POST['DOB'];
 $FNa = $_POST['FullName'];
 $GU =  $_POST['guardian'];
 $ag =  $_POST['age'];
 $TP = $_POST['TP'];
 

 $sql = "INSERT INTO patient(Pa_ID,adress,DOB,name,guardian,age,TP) VALUES ('{$P_ID}','{$AD}','{$DOB}','{$FNa}','{$GU}','{$ag}','{$TP}');";

 mysqli_query($connection,$sql);

 header('Location: pareg.php?insert=success');
}
?>

