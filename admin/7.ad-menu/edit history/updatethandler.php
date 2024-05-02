

<?php

if (isset($_POST["update"])) 
{

    include_once('connect.php');
	 
     $H_ID = $_POST['H_ID'];
     $description = $_POST['description'];
     $past_illnesses = $_POST['past_illnesses'];
     $past_treatments = $_POST['past_treatments'];
     $past_hospitalized_dt = $_POST['past_hospitalized_dt'];
     $past_channeled_dr =  $_POST['past_channeled_dr'];
     $Pa_ID =  $_POST['Pa_ID'];
     mysqli_query($connection,"UPDATE history SET  description = '$_POST[description]', past_illnesses = '$_POST[past_illnesses]', past_treatments = '$_POST[past_treatments]', past_hospitalized_dt = '$_POST[past_hospitalized_dt]', past_channeled_dr = '$_POST[past_channeled_dr]', Pa_ID = '$_POST[Pa_ID]' WHERE H_ID = '$H_ID'");
	 
     header("Location: table-history.php?update=success");
        exit();
}