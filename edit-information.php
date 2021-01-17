<?php
    // kiểm tra id có tồn tại trên url hay k?
    if(!isset($_GET['id'])) {
        header("Location:information.php");
    }
        //b1: kết nối với database
        require("config-csdl.php");

    // lấy dữ liệu  với id đã có trên csdl 
    $id =  $_GET['id'];
    $sql="select * from information where id_information=$id";
    echo $sql;
    $result=mysqli_query($conn,$sql);
    $bn= mysqli_fetch_array($result);

    // ktra xem ng dùng đã gửi dl lên chưa 
    if( isset($_GET['date_of_birth']) && isset($_GET['gendes']) && isset($_GET['phone']) 
    && isset($_GET['email']) && isset($_GET['address']) ){
        $date_of_birth = $_GET['date_of_birth'];
        $gendes= $_GET['gendes'];
        $phone = $_GET['phone'];
        $email = $_GET['email'];
        $address = $_GET['address'];

        
        //b2: truy vấn 
        $sql= "update information set date_of_birth='$date_of_birth',gendes='$gendes',phone='$phone',email=' $email',
        address='$address' where id_information=$id";
        echo $sql;
        $result=mysqli_query($conn,$sql);
        if($result) {
           header("Location:information.php");
        }
    }
 
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  </head>
  <body>
  <?php
        require('admin-header.php');
    ?>
    
    <div class="container">
    <form action="">
    <!-- thêm id vao url  -->
        <input type="hidden" name="id" value="<?php  echo $bn['id'] ?>">   
    <div class="form-group">
            <label for="id">id</label>
            <input type="text" name="id" id="id" class="form-control" placeholder="" aria-describedby="helpId"   disable value="<?php  echo $bn['id'] ?>">
        </div>
        <div class="form-group">
            <label for="date_of_birth">date_of_birth</label>
            <input type="date" name="date_of_birth" id="date_of_birth" class="form-control" placeholder="Please enter your information " aria-describedby="helpId" value="<?php  echo $bn['date_of_birth'] ?>">
        </div>
        <div class="form-group">
            <label for="gendes">genders</label>
            <input type="text" name="gendes" id="gendes" class="form-control" placeholder="Please enter your information " aria-describedby="helpId"  value="<?php  echo $bn['gendes'] ?>">
        </div>
        <div class="form-group">
            <label for="phone">phone</label>
            <input type="text" name="phone" id="phone" class="form-control" placeholder="Please enter your information " aria-describedby="helpId"  value="<?php  echo $bn['phone'] ?>">
        </div>
        <div class="form-group">
            <label for="email">email</label>
            <input type="text" name="email" id="email" class="form-control" placeholder="Please enter your information " aria-describedby="helpId"  value="<?php  echo $bn['email'] ?>">
        </div>
        <div class="form-group">
            <label for="address">address</label>
            <input type="text" name="address" id="address" class="form-control" placeholder="Please enter your information " aria-describedby="helpId"  value="<?php  echo $bn['address'] ?>">
        </div>
        
        <button class="btn btn-success" type="submit">Edit Information</button>
        </form>
    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>