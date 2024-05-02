<?php 

include_once('connect.php');

/*Insert Query 

INSERT INTO tableName(Column1,Column2....) VALUES (Value1, Value2...);

*/
if (isset($_POST['P-det'])) {
 $ID = $_POST['ID'];
 $date = $_POST['date'];
 $cNamae = $_POST['cNamae'];
 $am = $_POST['am'];
 $PID = $_POST['PID'];
 

 $sql = "INSERT INTO payment(P_ID,date,cashiers_name,amount,Pa_ID) VALUES ('{$ID}','{$date}','{$cNamae}','{$am}','{$PID}');";

 mysqli_query($connection,$sql);

 header('Location: ad-payment.php?insert=success');
}
?>

