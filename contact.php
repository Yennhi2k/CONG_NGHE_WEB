<!doctype html>
<html lang="en">
  <head>
    <title>CONTACT</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  </head>
  <body>    
  <?php
    require("config.php");
    ?>
      <section>
      <div class="container-fluid">
	<div class="row">
		<div class="col-md-5 col-lg-5">
        <h2> GET IN TOUCH</h2>
             <p>if you have any question or require further<br> information, please do not hesitate to contact us at</p>
             <div class="container-fluid">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="address">
                        <strong>Detailed Information</strong><br />
                        <i class="fas fa-map-marker-alt"></i>Dai Hoc Thuy Loi</br> 
                        <i class="fas fa-phone-volume"></i> (123) 456-7890 </br>
                        <i class="fas fa-envelope-open-text"></i> nguyenvn@gmail.com
                      </div>
                    </div>
                  </div>
                </div>
		</div>
		<div class="col-md-7 col-lg-7">
        <div class="container">
        <div class="row col-md-6 col md-offset-3">
            <div class="panel panel primary">
                <div class="panel-heading ">
                    <h1>Register Now</h1>
                </div>
                <div class="panel-body">
                    <form action="process-contact.php" method="post"  class="contact_form" name="form" onsubmit="return validated()">
                    <div class="form-group">
                                    <label for="name"></label>
                                    <input autocomplete="off" type="text" name="name" id="name" class="form-control" placeholder="Name" >
                                    <div id="ten_error">Please fill up your Name</div>
                                </div>
                                <div class="form-group">
                                    <label for="title"></label>
                                    <input type="text" name="title" id="title" class="form-control" placeholder="Tittle" >
                                    <div id="tieude_error">Please fill up your Tittle</div>
                                </div>
                                <div class="form-group">
                                  <label for="email"></label>
                                  <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                  <div id="email_error">Please fill up your Email </div>
                                </div>
                                <div class="form-group">
                                  <label for="message"></label>
                                  <textarea rows="7" cols="50" input  type="text" name="message" id="message" class="form-control" placeholder="Message"></textarea>
                                  <div id="thongdiep_error">Please fill up your Message</div>
                                </div>
                                <button class="btn" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        </div>
            </div>
        </div>
        

        
</section>
<footer>
  <div class="col-md-12 col-lg-12 wrapper"> 
        <div class="button">
            <div class="icon"><i class="fab fa-facebook-f"></i></div>
            <span>Facebook</span>
        </div>
        <div class="button">
            <div class="icon"><i class="fab fa-twitter"></i></div>
            <span>Twitter</span>
        </div>
        <div class="button">
            <div class="icon"><i class="fab fa-instagram"></i></div>
            <span>Instagram</span>
        </div>
        <div class="button">
            <div class="icon"><i class="fab fa-github"></i></div>
            <span>Github</span>
        </div>
        <div class="button">
            <div class="icon"><i class="fab fa-youtube"></i></div>
            <span>Youtube</span>
        </div>
    </div>
</footer>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="hover.js"></script>
    <script src="error-contact.js"></script>
  </body>
</html>
