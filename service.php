<!doctype html>
<html lang="en">
  <head>
    <title>SERVICE</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="service.css">
    <link rel="stylesheet" href="style2.css">
  </head>
  <body>
  <?php
    require("config.php");
    ?>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h2>Our service</h2>
            <p class="build">--------------------------- <i class="far fa-lightbulb">---------------------------</i> </p>
          </div>
          <div class="wrapper">
            <div class="box">
              <div class="front-face">
                <div class="icon"><i class="fas fa-code"></i></div>
                <span>Web Design</span>          
              </div>
              <div class="back-face">
                <span>Web Design</span>
                <p>
                      <?php
                                require("config-csdl.php");
                                //b2: truy vấn
                                    $sql=  'select * from service WHERE id=1 ';
                            
                                    // $sql = 'select * from benhnhan';
                                    $result=mysqli_query($conn,$sql);
                                    //b3: Xử lý kết quả
                                    $post_list= mysqli_fetch_all($result);
                            ?>
                            <?php
                                foreach($post_list as $post){
                                    echo'<td>'.$post[1].'</td>';}
                        ?>
                </p>
              </div>
            </div>

            <div class="box">
              <div class="front-face">
                <div class="icon"><i class="fas fa-chart-line"></i></div>
                <span>UI/UX design</span>          
              </div>
              <div class="back-face">
                <span>UI/UX design</span>
                <p>
                                  
                      <?php
                                require("config-csdl.php");
                                //b2: truy vấn
                                    $sql=  'select * from service WHERE id=2 ';
                            
                                    // $sql = 'select * from benhnhan';
                                    $result=mysqli_query($conn,$sql);
                                    //b3: Xử lý kết quả
                                    $post_list= mysqli_fetch_all($result);
                            ?>
                            <?php
                                foreach($post_list as $post){
                                    echo'<td>'.$post[1].'</td>';}
                        ?>
                </p>
              </div>
            </div>

            <div class="box">
              <div class="front-face">
                <div class="icon"><i class="fas fa-rocket"></i></div>
                <span>Mobile Apps</span>          
              </div>
              <div class="back-face">
                <span>Mobile Apps</span>
                <p>
                                  
                      <?php
                                require("config-csdl.php");
                                //b2: truy vấn
                                    $sql=  'select * from service WHERE id=3 ';
                            
                                    // $sql = 'select * from benhnhan';
                                    $result=mysqli_query($conn,$sql);
                                    //b3: Xử lý kết quả
                                    $post_list= mysqli_fetch_all($result);
                            ?>
                            <?php
                                foreach($post_list as $post){
                                    echo'<td>'.$post[1].'</td>';}
                        ?>
                </p>
              </div>
            </div>
          
            <div class="box">
              <div class="front-face">
                <div class="icon"><i class="fas fa-star"></i></div>
                <span>Logo </span>          
              </div>
              <div class="back-face">
                <span>Logo </span>
                <p>
                                  
                      <?php
                                require("config-csdl.php");
                                //b2: truy vấn
                                    $sql=  'select * from service WHERE id=4 ';
                            
                                    // $sql = 'select * from benhnhan';
                                    $result=mysqli_query($conn,$sql);
                                    //b3: Xử lý kết quả
                                    $post_list= mysqli_fetch_all($result);
                            ?>
                            <?php
                                foreach($post_list as $post){
                                    echo'<td>'.$post[1].'</td>';}
                        ?>
                </p>
              </div>
            </div>

            <div class="box">
              <div class="front-face">
                <div class="icon"><i class="fas fa-lightbulb"></i></div>
                <span>graphics Design</span>          
              </div>
              <div class="back-face">
                <span>graphics Design</span>
                <p>
                                  
                      <?php
                                require("config-csdl.php");
                                //b2: truy vấn
                                    $sql=  'select * from service WHERE id=5 ';
                            
                                    // $sql = 'select * from benhnhan';
                                    $result=mysqli_query($conn,$sql);
                                    //b3: Xử lý kết quả
                                    $post_list= mysqli_fetch_all($result);
                            ?>
                            <?php
                                foreach($post_list as $post){
                                    echo'<td>'.$post[1].'</td>';}
                        ?>
                </p>
              </div>
            </div>

            <div class="box">
              <div class="front-face">
                <div class="icon"><i class="fas fa-calendar-alt"></i></div>
                <span>Calendar</span>          
              </div>
              <div class="back-face">
                <span>Calendar</span>
                <p>
                                  
                      <?php
                                require("config-csdl.php");
                                //b2: truy vấn
                                    $sql=  'select * from service WHERE id=6 ';
                            
                                    // $sql = 'select * from benhnhan';
                                    $result=mysqli_query($conn,$sql);
                                    //b3: Xử lý kết quả
                                    $post_list= mysqli_fetch_all($result);
                            ?>
                            <?php
                                foreach($post_list as $post){
                                    echo'<td>'.$post[1].'</td>';}
                        ?>
                </p>
              </div>
            </div>
          </div>
         
          <!-- ----------------- -->
        </div>
      </div>

   
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="hover.js"></script>
  </body>
</html>