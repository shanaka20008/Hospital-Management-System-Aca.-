<?php
include_once('connect.php');
if (isset($_POST['delete'])) {

$H_ID=$_GET["H_ID"];

mysqli_query($connection," DELETE FROM history WHERE H_ID = '$H_ID'");
}
header("Location: table-history.php?delete=success");
exit();

?>
