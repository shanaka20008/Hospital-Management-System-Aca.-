<?php
include_once('connect.php');
if (isset($_POST['staff_ex'])) {

$St_ID=$_GET["St_ID"];

mysqli_query($connection," DELETE FROM staff_ex WHERE St_ID = '$St_ID'");
}
header("Location: table-staffEx.php?delete=success");
exit();

?>
