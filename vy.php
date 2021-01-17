<!doctype html>
<html lang="en">

<head>
    <title>TRAN THI VY</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="vy.css">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>

<body>
    <?php
    require("config.php");
    ?>
    <section>
        <div class="container">
            <div class="row">
                <div class=" col-12 col-md-5 col-lg-5 ">
                    <div class="avt">
                        <img src="Anh/vy.jpg" alt="avt">
                    </div>
                    <div class="contact">
                        <h2>INFORMATION</h2>
                    </div>
                    <div class="stt">
                            <?php
                                require("config-csdl.php");
                                //b2: truy vấn
                                    $sql=  'select * from information WHERE id_information = 1 ';
                            
                                    $result=mysqli_query($conn,$sql);
                                    //b3: Xử lý kết quả
                                    $post_list= mysqli_fetch_all($result);
                            ?>
                            <?php
                                foreach($post_list as $post){
                                    echo'<tr><i class="far fa-calendar-alt icon"
                                    style="width: 25px; text-align: center;"></i><span>'.$post[2].'</span></tr>' ;
                                    echo '</br>';
                                    echo'<tr><i class="fas fa-user-alt icon"
                                    style="width: 25px; text-align: center;"></i><span>'.$post[3].'</span></tr>' ;
                                    echo '</br>';
                                    echo'<tr><i class="fas fa-mobile-alt icon"
                                    style="width: 25px; text-align: center;"></i><span>'.$post[4].'</span></tr>' ;
                                    echo '</br>';
                                    echo'<tr><i class="far fa-envelope icon"
                                    style="width: 25px; text-align: center;"></i><span>'.$post[5].'</span></tr>' ;
                                    echo '</br>';
                                    echo'<tr><i class="fas fa-map-marker-alt icon"
                                    style="width: 25px; text-align: center;"></i><span>'.$post[6].'</span></tr>' ;
                                    echo '</br>';}
                            ?>

                    </div>
                    <div class="skill">
                        <h2>SKILL</h2>
                    </div>
                    <div class="box">
                        <p>HTML</p>
                        <div class="progress">
                            <div class="progress-bar">
                                <span class="progress-bar--html">80%</span>
                            </div>
                        </div>

                        <p>CSS</p>
                        <div class="progress">
                            <div class="progress-bar">
                                <span class="progress-bar--css">70%</span>
                            </div>
                        </div>

                        <p>JAVASCRIP</p>
                        <div class="progress">
                            <div class="progress-bar">
                                <span class="progress-bar--js">40%</span>
                            </div>
                        </div>

                        <p>PHP</p>
                        <div class="progress">
                            <div class="progress-bar">
                                <span class="progress-bar--php">60%</span>
                            </div>
                        </div>
                    </div>

                </div>
                <div class=" col-md-7 col-lg-7 bg-white">
                    <div class="content-1">
                        <h2>TRAN THI VY</h2>
                        <p>
                            <?php
                                require("config-csdl.php");
                                //b2: truy vấn
                                    $sql=  'select * from introduce WHERE id_introduce=1 ';
                            
                                    // $sql = 'select * from benhnhan';
                                    $result=mysqli_query($conn,$sql);
                                    //b3: Xử lý kết quả
                                    $post_list= mysqli_fetch_all($result);
                            ?>
                            <?php
                                foreach($post_list as $post){
                                    echo'<td>'.$post[2].'</td>';}
                            ?>

                        </p>
                    </div>
                    <div class="target">
                        <a href="#"><i class="fas fa-bullseye"></i></a>TARGET
                    </div>
                    <div class="content-1">
                        <p>
                            <?php
                                    require("config-csdl.php");
                                    //b2: truy vấn
                                        $sql=  'select * from target WHERE id_target=1 ';
                                
                                        // $sql = 'select * from benhnhan';
                                        $result=mysqli_query($conn,$sql);
                                        //b3: Xử lý kết quả
                                        $post_list= mysqli_fetch_all($result);
                                ?>
                                <?php
                                    foreach($post_list as $post){
                                        echo'<td>'.$post[2].'</td>';}
                                ?>
                        </p>
                    </div>
                    <div class="education">
                        <a href="#"><i class="fas fa-university "></i></a>EDUCATION
                    </div>
                    <div class="content-1">
                        <p>
                            <?php
                                require("config-csdl.php");
                                //b2: truy vấn
                                    $sql=  'select * from education WHERE id_education=1 ';
                                    
                            
                                    // $sql = 'select * from benhnhan';
                                    $result=mysqli_query($conn,$sql);
                                    //b3: Xử lý kết quả
                                    $post_list= mysqli_fetch_all($result);
                            ?>
                            <?php
                                foreach($post_list as $post){
                                    echo'<tr>'.$post[2].'</tr>' ;
                                    echo'&ensp;';
                                    echo'<tr>'.$post[3].'</tr>' ;
                                    echo '</br>';}
                            ?>
                            <!-- ---------- -->
                            <?php
                                require("config-csdl.php");
                                //b2: truy vấn
                                    $sql=  'select * from education WHERE id_education=2';
                                    
                            
                                    // $sql = 'select * from benhnhan';
                                    $result=mysqli_query($conn,$sql);
                                    //b3: Xử lý kết quả
                                    $post_list= mysqli_fetch_all($result);
                            ?>
                            <?php
                                foreach($post_list as $post){
                                    echo'<tr>'.$post[2].'</tr>' ;
                                    echo'&ensp;';
                                    echo'<tr>'.$post[3].'</tr>' ;
                                    echo '</br>';}
                            ?>
                            <!-- -------------- -->
                            <?php
                                require("config-csdl.php");
                                //b2: truy vấn
                                    $sql=  'select * from education WHERE id_education=3 ';
                                    
                            
                                    // $sql = 'select * from benhnhan';
                                    $result=mysqli_query($conn,$sql);
                                    //b3: Xử lý kết quả
                                    $post_list= mysqli_fetch_all($result);
                            ?>
                            <?php
                                foreach($post_list as $post){
                                    echo'<tr>'.$post[2].'</tr>' ;
                                    echo'&ensp;';
                                    echo'<tr>'.$post[3].'</tr>' ;
                                    echo '</br>';}
                            ?>
                            <!-- ---------- -->
                            <?php
                                require("config-csdl.php");
                                //b2: truy vấn
                                    $sql=  'select * from education WHERE id_education=4';
                                    
                            
                                    // $sql = 'select * from benhnhan';
                                    $result=mysqli_query($conn,$sql);
                                    //b3: Xử lý kết quả
                                    $post_list= mysqli_fetch_all($result);
                            ?>
                            <?php
                                foreach($post_list as $post){
                                    echo'<tr>'.$post[2].'</tr>' ;
                                    echo'&ensp;';
                                    echo'<tr>'.$post[3].'</tr>' ;
                                    echo '</br>';}
                            ?>
                            
                        </p>
                    </div>
                    <div class="prize">
                        <a href="#"><i class="fas fa-bahai "></i></a>PRIZE
                    </div>
                    <div class="thanhtic">
                        <li>
                            <?php
                                    require("config-csdl.php");
                                    //b2: truy vấn
                                        $sql=  'select * from prize WHERE id_prize=1 ';
                                
                                        // $sql = 'select * from benhnhan';
                                        $result=mysqli_query($conn,$sql);
                                        //b3: Xử lý kết quả
                                        $post_list= mysqli_fetch_all($result);
                                ?>
                                <?php
                                    foreach($post_list as $post){
                                        echo'<td>'.$post[2].'</td>';
                                        echo '</br>';}
                            ?>
                            <!-- ---------- -->
                            <?php
                                    require("config-csdl.php");
                                    //b2: truy vấn
                                        $sql=  'select * from prize WHERE id_prize=2 ';
                                
                                        // $sql = 'select * from benhnhan';
                                        $result=mysqli_query($conn,$sql);
                                        //b3: Xử lý kết quả
                                        $post_list= mysqli_fetch_all($result);
                                ?>
                                <?php
                                    foreach($post_list as $post){
                                        echo'<td>'.$post[2].'</td>';
                                        echo '</br>';}
                            ?>
                                    
                        </li>
                    </div>
                    <div class="follow">
                        <a href="#"><i class="fas fa-bell"></i></a>FOLLOW ME
                    </div>
                    <div class="me">
                        <li><i class="fab fa-facebook icon"></i><a
                                href="https://www.facebook.com/tran.vy.1656854"
                                class="fb">facebook.com/tranthivy</a></li>
                        <!-- <li><i class="fab fa-instagram icon"></i><a href="https://www.instagram.com/nguyenthiyennhi2k/"
                                class="fb"><span>nguyenthiyennhi2k</span></a></li> -->
                    </div>


                </div>
            </div>
        </div>

    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="js.js"></script>
    <script src="hover.js"></script>
</body>

</html>