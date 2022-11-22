<?php
$con = new mysqli('localhost','root','','Billing');
if(!$con){
    die(mysqli_error($con));
}
?>
