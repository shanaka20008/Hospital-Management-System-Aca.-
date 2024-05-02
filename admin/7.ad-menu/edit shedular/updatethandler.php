

<?php

if (isset($_POST["update"])) 
{

    include_once('connect.php');
	 
     $S_ID = $_POST['S_ID'];
     $reson = $_POST['reson'];
     $room_no = $_POST['room_no'];
     $time_period = $_POST['time_period'];
     $R_ID = $_POST['R_ID'];
    
     mysqli_query($connection,"UPDATE shedular SET  reson = '$_POST[reson]', room_no = '$_POST[room_no]', R_ID = '$_POST[R_ID]' WHERE S_ID = '$S_ID'");
	 
     header("Location: table-shedule.php?update=success");
        exit();
}