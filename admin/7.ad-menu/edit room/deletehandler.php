<?php
include_once('connect.php');
if (isset($_POST['delete'])) {

$R_ID=$_GET["R_ID"];

mysqli_query($connection," DELETE FROM room WHERE R_ID = '$R_ID'");
}
header("Location: table-room.php?delete=success");
exit();

?>
