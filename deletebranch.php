<?php

$urlid=$_GET['catid'];

include('config.php');

$sql="DELETE FROM `branches` WHERE `id` = $urlid";

$exe=mysqli_query($con,$sql);
if($exe)
{
    echo "<script>alert('data deleted successfully')</script>";
    header('Location:showbranch.php');

}
?>