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
       <style>
    H2{
        text-align: center;
        color: #007bff;
        margin-top:20px;
        margin-bottom:10px;
    }</style>
    
    <div class="container-fluid">
    <h2>EDUCATION</h2>
        <div class="row">
            <div class="col-md-12">
                <?php
                    //b1: kết nối với database
                    require("config-csdl.php");
                    //b2: truy vấn 
                    
                    $sql=  'select * from education';

                    $result=mysqli_query($conn,$sql);
                    //b3: Xử lý kết quả
                    $post_list= mysqli_fetch_all($result);
                ?>
                   
                <table class="table table-hover">
                        <thead>
                            <th>id_education</th>
                            <th>id</th>
                            <th>year_schools</th>
                            <th>schools</th>
                            <th>Edit</th>
                        </thead>

                    <tbody>
                        <?php
                            foreach($post_list as $post){
                                echo '<tr>';
                                echo'<td>'.$post[0].'</td>';
                                echo'<td>'.$post[1].'</td>';
                                echo'<td>'.$post[2].'</td>';
                                echo'<td>'.$post[3].'</td>';
                                echo'<td><a href="edit-education.php?id='.$post[0].'"><i class="far fa-edit"></i></a></td>';
                                echo'</tr>';
                            }
                        ?>
                    </tbody>
                </table>

            </div>
        </div>
      </main>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
