<?php
include_once('connect.php');
if (isset($_POST['delete'])) {

$St_ID=$_GET["St_ID"];

mysqli_query($connection," DELETE FROM staff WHERE St_ID = '$St_ID'");
}
header("Location: table-staff.php?delete=success");
exit();

?>
