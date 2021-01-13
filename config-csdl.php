<?php
   //b1: kết nối với database
   $conn= mysqli_connect('localhost','root','','cv');
   if(!$conn)
   {
       die('lỗi kết nối'.mysqli_connect_error());
   }
?>