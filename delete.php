<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $snoGet = $_GET['deleteid'];
    $sql = "delete from `curd` where sno=$snoGet";
    $res = mysqli_query($con,$sql);
    if(!$res){
        die(mysqli_error($con));
    }else{
        header('location: display.php');
    }
}
?>