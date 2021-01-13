<?php
    $s_ten = $_POST['name'];
    $s_tieude = $_POST['title'];
    $s_email = $_POST['email'];
    $s_thongdiep = $_POST['message'];
    
    //database connect
    $conn = mysqli_connect('localhost','root','','cv');
    if(!$conn)
    {
        die('Loi ket noi'.mysqli_connect_error());
    }
    $sql="insert into customer(name,title,email,message) value('$s_ten','$s_tieude','$s_email','$s_thongdiep')";
    $result=mysqli_query($conn,$sql);
    if($result) {
        header("Location:thankyou.php");
    }
?>