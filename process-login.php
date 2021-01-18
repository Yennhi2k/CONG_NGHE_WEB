
<?php
   require("config-csdl.php");

if(isset($_POST['username']))
{
    $uname=$_POST['username'];
    $password=$_POST['password'];
    $sql="select * from users where username='".$uname."' and password='".$password."'limit 1";
    $result=mysqli_query($conn,$sql);
    // echo "$sql";
  
    // $user=mysqli_fetch_all($result);
    if(mysqli_num_rows($result)==1)
    {
        header("Location:admin.php");
    }
    else
    {
        header("Location:login.php");

    }
}
?>
