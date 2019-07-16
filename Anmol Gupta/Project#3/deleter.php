<?php
ob_start();
session_start();
include('connection.php');
$x=$_GET['x'];
$sql="DELETE FROM ads WHERE id='".$x."'";
mysqli_query($conn,$sql);
header('Location: user.php');
?>