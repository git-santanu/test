<?php
$con= new mysqli('localhost','root','','testdb');
if(!$con){
    die(mysqli_error($con));
}
?>