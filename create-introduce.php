<?php
   

    // ktra xem ng dùng đã gửi dl lên chưa 
    if( isset($_GET['id']) && isset($_GET['content_introduce'])  ){
        $id=$_GET['id'];
        $content_introduce = $_GET['content_introduce'];
        
        //b1: kết nối với database
        require("config-csdl.php");
        //b2: truy vấn 
        $sql= "insert into introduce(id,content_introduce) values('$id','$content_introduce')";
        // echo $sql;
        $result=mysqli_query($conn,$sql);
        if($result) {
           header("Location:introduce.php");
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
    <title>CREATE INTRODUCE</title>
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
    <h2>CREATE INTRODUCE</h2>
    <form action="">
    <!-- thêm id vao url  -->
    
        <div class="form-group">
            <label for="id">id</label>
            <input type="text" name="id" id="id" class="form-control" placeholder=" " aria-describedby="helpId" >
        </div>
        <div class="form-group">
            <label for="content_introduce">content_introduce</label>
            <input type="text" name="content_introduce" id="content_introduce" class="form-control" placeholder="" aria-describedby="helpId"  >
        </div>
       
       
        <button class="btn btn-success" type="submit">Create introduce</button>
        </form>
        <p><a href="introduce.php" class = "btn btn-success">Back</a></p>
    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>