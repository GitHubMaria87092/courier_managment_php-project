<?php

$urlid=$_GET['catid'];

include('config.php');

$sql="DELETE FROM `city` WHERE `city_ID` = $urlid";

$exe=mysqli_query($con,$sql);
if($exe)
{
    echo "<script>alert('data deleted successfully')</script>";
    header('Location:cityshow.php');

}
?>