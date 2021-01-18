<?php
    // kiểm tra id có tồn tại trên url hay k?
    if(!isset($_GET['id'])) {
        header("Location:education.php");
    }
      
        //b1: kết nối với database
        require("config-csdl.php");

    // lấy dữ liệu  với id đã có trên csdl 
    $id =  $_GET['id'];
    $sql="select * from education where id_education=$id";
    // echo $sql;
    $result=mysqli_query($conn,$sql);
    $bn= mysqli_fetch_array($result);

    // ktra xem ng dùng đã gửi dl lên chưa 
    if( isset($_GET['year_school']) && isset($_GET['schools']) ){
        $year_school = $_GET['year_school'];
        $schools = $_GET['schools'];
        
        //b2: truy vấn 
        $sql= "update education set year_school='$year_school',schools='$schools' where id_education=$id";
        // echo $sql;
        $result=mysqli_query($conn,$sql);
        if($result) {
           header("Location:education.php");
        }
    }
 
?>
 <style>
    H2{
        text-align: center;
        color: #007bff;
        margin-top:20px;
        margin-bottom:10px;
    }</style>
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
    <h2>EDIT EDUCATION</h2>
    <form action="">
    <!-- thêm id vao url  -->
    <input type="hidden" name="id" value="<?php  echo $bn['id'] ?>">   
        <div class="form-group">
            <label for="id">id</label>
            <input type="text" name="id" id="id" class="form-control" placeholder=" " aria-describedby="helpId" disable value=" <?php  echo $bn['id'] ?>">
        </div>
        <div class="form-group">
            <label for="year_school">year_school</label>
            <input type="text" name="year_school" id="year_school" class="form-control" placeholder="" aria-describedby="helpId"  value=" <?php  echo $bn['year_school'] ?>">
        </div>
        <div class="form-group">
            <label for="schools">schools</label>
            <input type="text" name="schools" id="schools" class="form-control" placeholder="" aria-describedby="helpId"  value=" <?php  echo $bn['schools'] ?>">
        </div>
       
       
        <button class="btn btn-success" type="submit">Edit education</button>
        </form>
    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>