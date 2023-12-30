<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once 'PHPMailer/src/Exception.php';
require_once 'PHPMailer/src/PHPMailer.php';
require_once 'PHPMailer/src/SMTP.php';

  // Include autoload.php file
  
  // Create object of PHPMailer class
  $mail = new PHPMailer(true);

  $msg = '';

  if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    try {
      $mail->isSMTP();
      $mail->Host = 'smtp.gmail.com';
      $mail->SMTPAuth = true;
      // Gmail ID which you want to use as SMTP server
      $mail->Username = 'apekade19.welimada@gmail.com';
      // Gmail Password
      $mail->Password = 'cfpgbpfpkisdkjbu';
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
      $mail->Port = 465;

      // Email ID from which you want to send the email
      $mail->setFrom('apekade19.welimada@gmail.com');
      // Recipient Email ID where you want to receive emails
      $mail->addAddress('apekade19.welimada@gmail.com');

      $mail->isHTML(true);
      $mail->Subject = 'Contact Form Submission';
      $mail->Body = "<h3>Name : $username <br>Email : $email <br> Phone : $phone <br>Message : $message</h3>";

      $mail->send();
      #$msg = "<div class='alert alert-info'>Message has been sent</div>";
      echo "<script type='text/javascript'>alert('Message has been sent');</script>";
    } catch (Exception $e) {
        #$msg = "<div class='alert alert-danger'>Message could not be sent. Mailer Error: {$mail->ErrorInfo}</div>";
        echo "<script type='text/javascript'>alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}.');</script>";
    }
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>අපේ කඩේ</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="css/main.css"> 

     <!-- Favi icon -->
    <link rel="icon" type="image/x-icon" href="images/logo.jpg">

</head>
<body>
    
<!-- header section starts  -->

<?php include 'includes/header.php'; ?>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>are you hungry? don't wait..! let start to order now!</h3>
        <p><b>we are always ready to deliver your order on time and at the right standards.</b></p>
        <a href="http://localhost/ak/pages/signin/index.php" class="btn" >order now </a>
    </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span>about</span> us </h1>

    <div class="row">

        <div class="image">
            <img src="images/homescreen.jpeg" alt="">
        </div>

        <div class="content">
            <h3>ape kade <br>
                <b>රස පදමට</b></h3>
            <p><b>ape kade</b> can be introduced as a restaurant that attacts customers. we have giving our customers the opportunity to get delicious food at discounted prices.</p>
            <p>our restaurant, which was started in 2019, has been very successful till now and we are always taking care of our customers and working to provide the food they want in a very tasty and clean way.</p>
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- products section starts  -->

<section class="products" id="products">

    <h1 class="heading"> our <span>products</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/product01.jpeg" alt="">
            <h3>kottu</h3>
            <div class="list">
                <ul>
                    <i>vegi</i><br>
                    <i>egg</i><br>
                    <i>chicken</i><br>
                    <i>cheese</i>
                </ul>
            </div>
            <div class="price">rs.350 and upwards</div>
        </div>

        <div class="box">
            <img src="images/rice.jpeg" alt="">
            <h3>fride rice</h3>
            <div class="list">
                <ul>
                    <i>vegi</i><br>
                    <i>egg</i><br>
                    <i>chicken</i><br>
                </ul>
            </div>
            <div class="price">rs.350 and upwards</div>
        </div>

        <div class="box">
            <img src="images/Veg-Noodles.jpg" alt="">
            <h3>noodles</h3>
            <div class="list">
                <ul>
                    <i>vegi</i><br>
                    <i>egg</i><br>
                    <i>chicken</i><br>
                </ul>
            </div>
            <div class="price">rs.150 and upwards</div>
        </div>

        <div class="box">
            <img src="images/buffet.jpg" alt="">
            <h3>rice and curry</h3>
            <div class="list">
                <ul>
                    <i>breakfast</i><br>
                    <i>lunch</i><br>
                </ul>
            </div>
            <div class="price">rs.150 and upwards</div>
        </div>

        <div class="box">
            <img src="images/Short_Eat.jpg" alt="">
            <h3>shorteats</h3>
            <div class="list">
                <ul>
                    <i>patties</i><br>
                    <i>vadai</i><br>
                    <i>cutlets</i><br>
                    <i>samosa</i><br>
                    <i>chinese rolls</i><br>
                    <i>vegetable rotti</i><br>
                </ul>
            </div>
            <div class="price">rs.40 and upwards</div>
        </div>

        <div class="box">
            <img src="images/Hoppers.jpg" alt="">
            <h3>hoppers</h3>
            <div class="list">
                <ul>
                    <i>plain hoppers</i><br>
                    <i>egg hoppers</i><br>
                </ul>
            </div>
            <div class="price">rs.30 and upwards</div>
        </div>

        <div class="box">
            <img src="images/rotti.jpg" alt="">
            <h3>rotti</h3>
            <div class="list">
                <ul>
                    <i>pol rotti</i><br>
                    <i>egg rotti</i><br>
                    <i>yeast rotti</i><br>
                    <i>godamba rotti</i><br>
                </ul>
            </div>
            <div class="price">rs.30 and upwards</div>
        </div>

        <div class="box">
            <img src="images/other.png" alt="">
            <h3>other food</h3>
            <div class="list">
                <ul>
                    <i>string hoppers</i><br>
                    <i>parota</i><br>
                </ul>
            </div>
            <div class="price">rs.50 and upwards</div>
        </div>
        
    </div>
    <br>
    <br>
    <center>
        <a href="http://localhost/ak/pages/signin/index.php" class="btn" >go to products </a>
    </center>
</section>

<!-- products section ends -->


<!--speciality section starts-->

<section class="speciality" id="speciality">

    <h1 class="heading"> our <span>special</span> dishes </h1>

    <div class="box-container">

        <div class="box">
            
            <div class="image">
                <img src="images/biryani.jpg" alt="" style="width:25rem">
            </div>
            <div class="content">
                <h3>biriyani</h3>
                
                <div class="price">rs.950 and upwards</div>
            </div>
        </div>

        <div class="box">
            
            <div class="image">
                <img src="images/fried chicken.jpg" alt="" style="width:25rem">
            </div>
            <div class="content">
                <h3>frie chicken</h3>
               
                <div class="price">rs.300 and upwards</div>
            </div>
        </div>

        <div class="box">
            
            <div class="image">
                <img src="images/devilled-chicken.jpg" alt="">
            </div>
            <div class="content">
                <h3>devilled</h3>
                
                <div class="price">rs.650 and upwards</div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <center>
        <a href="http://localhost/ak/pages/signin/index.php" class="btn" >go to products </a>
    </center>
</section>

<!--speciality section ends-->

   <!--form section starts-->

   <section class="contact" id="contact">
    <h1 class="heading"> <span>contact</span> us </h1>
      <div class="row">
      <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15843.878580141667!2d80.90674135!3d6.8942343!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae47be640e7a3f3%3A0xf86a0d5993aefe9d!2sWelimada!5e0!3m2!1sen!2slk!4v1664822234513!5m2!1sen!2slk" allowfullscreen="" loading="lazy"></iframe>
          <!-- /form -->
                      <form action="" method="post" onsubmit="return ValidateNo();">
                      <h3>get in touch</h3>
                          <div class="inputBox">
                          <span class="fas fa-user"></span>
                          <input type="username" class="username" name="username" placeholder="Enter Your username" required autocomplete="off" >
                          </div>
                          <div class="inputBox">
                          <span class="fas fa-envelope"></span>
                          <input type="text" id="email" class="email" name="email" placeholder="Enter Your email" required autocomplete="off" style="text-transform : none;">
                          </div>
                          <div class="inputBox">
                          <span class="fas fa-phone"></span>
                          <input type="text" onkeypress="return isNumber(event)"   id="phone" onekeydown="phoneNumberFormatter()" class="phone" name="phone" placeholder="Enter Your phone number"  required autocomplete="off">
                          </div>
                          <div class="inputBox">
                          <span class="fas fa-envelope"></span>
                          <input type="text" name="message" class="message" name="message" placeholder="Enter Your message"  required autocomplete="off">
                          </div>
                          <br>
                          <button name="submit" class="btn"  type="submit" >Submit</button>
                      </form>
          <!-- //form -->
      </div>
  </section>

    <!--form section ends-->

<!-- order section starts  -->

<?php #include 'pages/order.php'; ?>


<!-- order section ends -->

<!-- footer section starts  -->

<?php include 'includes/footer.php'; ?>

<!-- footer section ends -->

<!-- custom js file link  -->
<script src="js/script.js"></script>

<?php include 'includes/validate.php' ?>

</body>
</html>