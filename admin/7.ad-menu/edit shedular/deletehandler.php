<?php
include_once('connect.php');
if (isset($_POST['delete'])) {

$S_ID=$_GET["S_ID"];

mysqli_query($connection," DELETE FROM shedular WHERE S_ID = '$S_ID'");
}
header("Location: table-shedule.php?delete=success");
exit();

?>
