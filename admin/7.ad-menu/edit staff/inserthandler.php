<?php 

include_once('connect.php');

/*Insert Query 

INSERT INTO tableName(Column1,Column2....) VALUES (Value1, Value2...);

*/
if (isset($_POST['uprm'])) {
 $St_ID = $_POST['St_ID'];
 $unit = $_POST['unit'];
 $salary = $_POST['salary'];
 $experience = $_POST['experience'];
 $job_title = $_POST['job_title'];
 $shift =  $_POST['shift'];
 $room_no =  $_POST['room_no'];
 $Pa_ID =  $_POST['Pa_ID'];

 $sql = "INSERT INTO staff(St_ID,unit,salary,experience,job_title,shift,room_no,Pa_ID) VALUES ('{$St_ID}','{$unit}','{$salary}','{$experience}','{$job_title}','{$shift}','{$shift}','{$Pa_ID}');";

 mysqli_query($connection,$sql);

 header('Location: table-staff.php?insert=success');
}
?>

