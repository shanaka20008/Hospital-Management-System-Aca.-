<?php 

include_once('connect.php');

/*Insert Query 



*/
if (isset($_POST['up_stff'])) {
 $SP_A = $_POST['SP_A'];
 $st_idex = $_POST['st_idex'];
 

 $sql = "INSERT INTO staff_ex(specialist_area,St_ID) VALUES ('{$SP_A}','{$st_idex}');";

 mysqli_query($connection,$sql);

 header('Location: edit-staff-ex.php?insert=success');
}
?>

