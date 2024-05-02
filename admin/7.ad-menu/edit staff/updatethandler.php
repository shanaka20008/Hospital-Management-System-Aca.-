

<?php

if (isset($_POST["update"])) 
{

    include_once('connect.php');
	 
     $St_ID = $_POST['St_ID'];
     $unit = $_POST['unit'];
     $salary = $_POST['salary'];
     $experience = $_POST['experience'];
     $job_title = $_POST['job_title'];
     $shift =  $_POST['shift'];
     $room_no =  $_POST['room_no'];
     $Pa_ID =  $_POST['Pa_ID'];
     mysqli_query($connection,"UPDATE staff SET  unit = '$_POST[unit]', salary = '$_POST[salary]', experience = '$_POST[experience]', job_title = '$_POST[job_title]', shift = '$_POST[shift]', room_no = '$_POST[room_no]' WHERE Pa_ID = '$Pa_ID'");
	 
     header("Location: table-staff.php?update=success");
        exit();
}