<?php
include_once('connect.php');

$W_ID=$_GET["W_ID"];

mysqli_query($connection," DELETE FROM waiting_list WHERE W_ID = '$W_ID'");

header("Location: table-waitinglist.php?delete=success");
exit();

?>
