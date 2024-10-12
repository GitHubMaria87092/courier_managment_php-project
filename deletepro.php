<?php

$urlid=$_GET['proid'];

include('config.php');

$sql="delete from products where Id='$urlid'";

$exe=mysqli_query($con,$sql);
if($exe)
{
    echo "<script>alert('data deleted successfully')</script>";
    header('Location:showproduct.php');

}










?>