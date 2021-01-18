<?php
    $id=$_GET['id'];
     //b1: kết nối với database
     require("config-csdl.php");
    //bước 2:
    $sql=" delete from target where id_target='$id' ";
    if(mysqli_query($conn,$sql)){
        header("Location: target.php");
    }
?>