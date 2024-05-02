

<?php

if (isset($_POST["upW"])) 
{

    include_once('connect.php');
	 
     $W_ID = $_POST['W_ID'];
     $allocate_time = $_POST['allocate_time'];
     $type = $_POST['type'];
     $reson = $_POST['reson'];
     $shedular_name = $_POST['shedular_name'];
     $intensive_status =  $_POST['intensive_status'];
     $Pa_ID =  $_POST['Pa_ID'];
     mysqli_query($connection,"UPDATE waiting_list SET  allocate_time = '$_POST[allocate_time]', type = '$_POST[type]', reson = '$_POST[reson]',
      shedular_name = '$_POST[shedular_name]',
      intensive_status = '$_POST[intensive_status]', Pa_ID = '$_POST[Pa_ID]' WHERE W_ID = '$W_ID'");
	 
     header("Location: table-waitinglist.php?waitinglistupdate=success");
        exit();
}