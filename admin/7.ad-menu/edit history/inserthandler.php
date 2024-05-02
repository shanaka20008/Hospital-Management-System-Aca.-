<?php 

include_once('connect.php');

/*Insert Query 

INSERT INTO tableName(Column1,Column2....) VALUES (Value1, Value2...);

*/
if (isset($_POST['up_history'])) {
 $H_ID = $_POST['ID'];
 $description = $_POST['dec'];
 $pastIll = $_POST['pill'];
 $pastTret = $_POST['ptre'];
 $pasthp = $_POST['pahp'];
 $pastdr =  $_POST['pastdr'];
 $PID =  $_POST['PID'];

 $sql = "INSERT INTO history(H_ID,description,past_illnesses,past_treatments,past_hospitalized_dt,past_channeled_dr,Pa_ID) VALUES ('{$H_ID}','{$description}','{$pastIll}','{$pastTret}','{$pasthp}','{$pastdr}','{$PID}');";

 mysqli_query($connection,$sql);

 header('Location: edit-history.php?insert=success');
}
?>

