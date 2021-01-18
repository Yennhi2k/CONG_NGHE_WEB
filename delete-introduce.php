<?php
    $id=$_GET['id'];
     //b1: kết nối với database
     require("config-csdl.php");
    //bước 2:
    $sql=" delete from introduce where id_introduce='$id' ";
    if(mysqli_query($conn,$sql)){
        header("Location: introduce.php");
    }
?>