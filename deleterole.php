<?php

$urlid=$_GET['catid'];

include('config.php');

$sql="DELETE FROM `role` WHERE `id` = $urlid";

$exe=mysqli_query($con,$sql);
if($exe)
{
    echo "<script>alert('data deleted successfully')</script>";
    header('Location:roleshow.php');

}
?>