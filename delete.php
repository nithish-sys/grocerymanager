<?php

include 'connect.php';

if(isset($_GET['deleteSerialNo'])){
    $SerialNo= $_GET['deleteSerialNo'];

    $sql = "delete from `groceryData` where SerialNo=$SerialNo";

    $result = mysqli_query($con,$sql);

    if($result){
        header('location:index.php');
    }else{
        die(mysqli_error($con));
    }
}



?>