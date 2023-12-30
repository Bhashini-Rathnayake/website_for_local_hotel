<?php
  
   $status ="";
    session_start();
    if (!isset($_SESSION['SESSION_EMAIL'])) {
       
       
    }

    include '../../config/config.php';

    $query = mysqli_query($conn, "SELECT * FROM users WHERE email='{$_SESSION['SESSION_EMAIL']}'");

    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_assoc($query);

        $status = "Welcome " . $row['name'] ;
    }

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
        $useracname = $row['name'];
         $useremail = $row['email'];
         $userphone = $row['phone'];
         $kottu1 = $_POST['kottu1'];
         $kottu2 = $_POST['kottu2'];
         $kottu3 = $_POST['kottu3'];
         $special1 = $_POST['special1'];
         $rice1 = $_POST['rice1'];
         $rice2 = $_POST['rice2'];
         $rice3 = $_POST['rice3'];
         $noodles1 = $_POST['noodles1'];
         $noodles2 = $_POST['noodles2'];
         $noodles3 = $_POST['noodles3'];
         $shorteats1 = $_POST['shorteats1'];
         $shorteats2 = $_POST['shorteats2'];
         $shorteats3 = $_POST['shorteats3'];
         $shorteats4 = $_POST['shorteats4'];
         $shorteats5 = $_POST['shorteats5'];
         $shorteats6 = $_POST['shorteats6'];
         $riceAndCurry1 = $_POST['riceAndCurry1'];
         $riceAndCurry2 = $_POST['riceAndCurry2'];
         $hoppers1 = $_POST['hoppers1'];
         $hoppers2 = $_POST['hoppers2'];
         $rotti1 = $_POST['rotti1'];
         $rotti2 = $_POST['rotti2'];
         $rotti3 = $_POST['rotti3'];
         $rotti4 = $_POST['rotti4'];
         $otherFoods1 = $_POST['otherFoods1'];
         $otherFoods2 = $_POST['otherFoods2'];
         $productPhone = $_POST['productPhone'];



         try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            // Gmail ID which you want to use as SMTP server
            $mail->Username = 'apekade19.welimada@gmail.com';
            // Gmail Password
            $mail->Password = 'cfpgbpfpkisdkjbu';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;
      
            // Email ID from which you want to send the email
            $mail->setFrom('apekade19.welimada@gmail.com');
            // Recipient Email ID where you want to receive emails
            $mail->addAddress('apekade19.welimada@gmail.com');

            $mail->isHTML(true);
            $mail->Subject = 'NEW ORDER';
            $mail->Body = "<h2>User Account Details</h2>
            <h3>User Account Name : $useracname <br>
            User Acount email : $useremail <br>
            User Account Phone : $userphone <br></h3>
            <h3>Order Details</h3>
            <h4>kottu1 : $kottu1<br>
            kottu2 : $kottu2<br>
            kottu3 : $kottu3<br>
            special1 : $special1<br>
            rice1 : $rice1<br>
            rice2 : $rice2<br>
            rice3 : $rice3<br>
            noodles1 : $noodles1<br>
            noodles2 : $noodles2<br>
            noodles3 : $noodles3<br>
            shorteats1 : $shorteats1<br>
            shorteats2 : $shorteats2<br>
            shorteats3 : $shorteats3<br>
            shorteats4 : $shorteats4<br>
            shorteats5 : $shorteats5<br>
            shorteats6 : $shorteats6<br>
            riceAndCurry1 : $riceAndCurry1<br>
            riceAndCurry2 : $riceAndCurry2<br>
            hoppers1 : $hoppers1<br>
            hoppers2 : $hoppers2<br>
            rotti1 : $rotti1<br>
            rotti2 : $rotti2<br>
            rotti3 : $rotti3<br>
            rotti4 : $rotti4<br>
            otherFoods1 : $otherFoods1<br>
            otherFoods2 : $otherFoods2<br></h4>

            <h3>Please Contact the person and Confirm the order Before the Dispute.</h3>
            <h2>Order confirmation mobile : $productPhone </h2>";

            $mail->send();
        #$msg = "<div class='alert alert-info'>Message has been sent</div>";
        echo "<script type='text/javascript'>alert('Order has been placed, Will contact you soon.');</script>";
        } catch (Exception $e) {
            #$msg = "<div class='alert alert-danger'>Message could not be sent. Mailer Error: {$mail->ErrorInfo}</div>";
            echo "<script type='text/javascript'>alert('Order could not be placed. Mailer Error: {$mail->ErrorInfo}.');</script>";
        }
      }

      if (isset($_POST['special'])) {
        $useracname = $row['name'];
         $useremail = $row['email'];
         $userphone = $row['phone'];
         $special1 = $_POST['special1'];
         $special2 = $_POST['special2'];
         $special3 = $_POST['special3'];
         $special4 = $_POST['special4'];
         $special5 = $_POST['special5'];
         $special6 = $_POST['special6'];
         $productPhone = $_POST['productPhone'];



         try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            // Gmail ID which you want to use as SMTP server
            $mail->Username = 'apekade19.welimada@gmail.com';
            // Gmail Password
            $mail->Password = 'jgadxjovnxrvozzf';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;
      
            // Email ID from which you want to send the email
            $mail->setFrom('apekade19.welimada@gmail.com');
            // Recipient Email ID where you want to receive emails
            $mail->addAddress('apekade19.welimada@gmail.com');

            $mail->isHTML(true);
            $mail->Subject = 'SPECIAL ORDER';
            $mail->Body = "<h2>User Account Details</h2>
            <h3>User Account Name : $useracname <br>
            User Acount email : $useremail <br>
            User Account Phone : $userphone <br></h3>
            <h3>Order Details</h3>
            <h4>special1 : $special1<br>
            special2 : $special2<br>
            special3 : $special3<br>
            special4 : $special4<br>
            special5 : $special5<br>
            special6 : $special6<br>
            

            <h3>Please Contact the person and Confirm the order Before the Dispute.</h3>
            <h2>Special order confirmation mobile : $productPhone </h2>";

            $mail->send();
        #$msg = "<div class='alert alert-info'>Message has been sent</div>";
        echo "<script type='text/javascript'>alert('Special order has been placed, Will contact you soon.');</script>";
        } catch (Exception $e) {
            #$msg = "<div class='alert alert-danger'>Message could not be sent. Mailer Error: {$mail->ErrorInfo}</div>";
            echo "<script type='text/javascript'>alert('Order could not be placed. Mailer Error: {$mail->ErrorInfo}.');</script>";
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
    <link rel="stylesheet" href="../../css/main.css">

     <!-- Favi icon -->
    <link rel="icon" type="image/x-icon" href="../../images/logo.jpg">

</head>
<body>
    <br><br><br><br>
    <br><br><br><br>
    <br>

    <!-- header section starts  -->

    <header class="header">

    <a href="#" class="logo">
        <img src="../../images/logo.jpg" alt="">
    </a>

    <div class="navbar">
        <a href="http://localhost/ak/#home"><b>home</b></a>
        <a href="#" style=" text-decoration:none;"><b>Hello ! <?php echo $status ?> </b></a>
        <a href="http://localhost/ak/pages/signin/logout.php" class="btn" style="color:white;"><b>Logout</b></a>
    </div>



    <div class="icons">
        
        <div class="fas fa-bars" id="menu-btn"></div>
    </div>

    
    

    </header>

    <!-- header section ends -->


     <!-- order process section start -->
     

    <section class="about" id="about">


        <h1 class="heading"> <span>order</span> process </h1>

        <div class="row">

            <div class="image">
                <img src="../../images/order-food.png" alt="">
            </div>

            <div class="content">
                <h3>ordering process</h3>
               <ul>
                <li><p>look over the page and desid what do you want.</p></li>
                <li><p>scroll down and you can now add your desired order.</p></li>
                <li><p>then afer giving phone number and click place order. then we can receive your order.</p></li>
                <li><p>we will then contact you and informe necessary details.</p.</li>
               </ul>
            </div>

        </div>

    </section>

     <!-- order process section ends -->

    <!-- menu section starts  -->

    <section class="products" id="products">

        <h1 class="heading"> our <span>menu</span> </h1>
        <form action="" method="post">
  

        <h2 class="heading"style="font-size:3rem;"><span>Sub Category:</span> Kottu</h2>
        <div class="box-container">

            <div class="box">
                <img src="../../images/cheesy-kottu.jpg" alt="">
                <h3>cheese Kottu</h3>
                <div class="price">rs.1200</div>

                <input type="number" class="amountBox" name="kottu1" placeholder="Amount" min="0" style="   width: 100%; padding:2rem; font-size: 1.7rem; color:var(--bg); text-transform: none; background:white;">
           
            </div>

            <div class="box">
                <img src="../../images/kottu.jpg" alt="">
                <h3>chicken kottu </h3>
                <div class="price">rs.630 </div>
                <input type="number" class="amountBox" name="kottu2" placeholder="Amount" min="0" style="  width: 100%; padding:2rem; font-size: 1.7rem; color:var(--bg); text-transform: none; background:white;">
            </div>

            <div class="box">
                <img src="../../images/egg-kottu.jpg" alt="">
                <h3>egg kottu </h3>
                <div class="price">rs.450 </div>
                <input type="number" class="amountBox" name="kottu3" placeholder="Amount" min="0" style="  width: 100%; padding:2rem; font-size: 1.7rem; color:var(--bg); text-transform: none; background:white;">
            </div>

            <div class="box">
                <img src="../../images/vegetable-kottu.jpg" alt="">
                <h3>vegetables kottu</h3>
                <div class="price">rs.350</div>
                <input type="number" class="amountBox" name="special1" placeholder="Amount" min="0" style="  width: 100%; padding:2rem; font-size: 1.7rem; color:var(--bg); text-transform: none; background:white;">
            </div>
            </div>

            <br>
            <h2 class="heading"style="font-size:3rem;"><span>Sub Category:</span> Rice</h2>
            <div class="box-container">

            <div class="box">
                <img src="../../images/newone.jpg" alt="">
                <h3>chicken rice </h3>
                <div class="price">rs.630</div>
                <input type="number" class="amountBox" name="rice1" placeholder="Amount" min="0" style="  width: 100%; padding:2rem; font-size: 1.7rem; color:var(--bg); text-transform: none; background:white;">
            </div>

            <div class="box">
                <img src="../../images/egg-rice.png" alt="">
                <h3>egg rice </h3>
                <div class="price">rs.450 </div>
                <input type="number" class="amountBox" name="rice2" placeholder="Amount" min="0" style="  width: 100%; padding:2rem; font-size: 1.7rem; color:var(--bg); text-transform: none; background:white;">
            </div>

            <div class="box">
                <img src="../../images/vegetable-rice.jpg" alt="">
                <h3>vegetable rice</h3>
                <div class="price">rs.350 </div>
                <input type="number" class="amountBox" name="rice3" placeholder="Amount" min="0" style="  width: 100%; padding:2rem; font-size: 1.7rem; color:var(--bg); text-transform: none; background:white;">
            </div>
            </div>

            <br>
            <h2 class="heading"style="font-size:3rem;"><span>Sub Category:</span> noodles</h2>
            <div class="box-container">

            <div class="box">
                <img src="../../images/chicken-noodles.jpg" alt="">
                <h3>chicken noodles</h3>
                <div class="price">rs.380 </div>
                <input type="number" class="amountBox" name="noodles1" placeholder="Amount" min="0" style="  width: 100%; padding:2rem; font-size: 1.7rem; color:var(--bg); text-transform: none; background:white;">
            </div>

            <div class="box">
                <img src="../../images/noodles.jpg" alt="">
                <h3>egg noodles</h3>
                <div class="price">rs.180 </div>
                <input type="number" class="amountBox" name="noodles2" placeholder="Amount" min="0" style="  width: 100%; padding:2rem; font-size: 1.7rem; color:var(--bg); text-transform: none; background:white;">
            </div>

            <div class="box">
                <img src="../../images/Veg-Noodles.jpg" alt="">
                <h3>vegetable noodles</h3>
                <div class="price">rs.150</div>
                <input type="number" class="amountBox" name="noodles3" placeholder="Amount" min="0" style="  width: 100%; padding:2rem; font-size: 1.7rem; color:var(--bg); text-transform: none; background:white;">
            </div>
            </div>

            <br>
            <h2 class="heading"style="font-size:3rem;"><span>Sub Category:</span> shorteats</h2>
            <div class="box-container">

            <div class="box">
                <img src="../../images/patties.jpg" alt="">
                <h3>patties</h3>
                <div class="price">rs.40</div>
                <input type="number" class="amountBox" name="shorteats1" placeholder="Amount" min="0" style="  width: 100%; padding:2rem; font-size: 1.7rem; color:var(--bg); text-transform: none; background:white;">
            </div>

            <div class="box">
                <img src="../../images/cutlets.jpg" alt="">
                <h3>cutlets</h3>
                <div class="price">rs.40 </div>
                <input type="number" class="amountBox" name="shorteats2" placeholder="Amount" min="0" style="  width: 100%; padding:2rem; font-size: 1.7rem; color:var(--bg); text-transform: none; background:white;">
            </div>

            <div class="box">
                <img src="../../images/samosa.jpg" alt="">
                <h3>samosa</h3>
                <div class="price">rs.50 </div>
                <input type="number" class="amountBox" name="shorteats3" placeholder="Amount" min="0" style="  width: 100%; padding:2rem; font-size: 1.7rem; color:var(--bg); text-transform: none; background:white;">
            </div>

            <div class="box">
                <img src="../../images/rolls.jpg" alt="">
                <h3>rolls</h3>
                <div class="price">rs.40 </div>
                <input type="number" class="amountBox" name="shorteats4" placeholder="Amount" min="0" style="  width: 100%; padding:2rem; font-size: 1.7rem; color:var(--bg); text-transform: none; background:white;">
            </div>

            <div class="box">
                <img src="../../images/veg-rotti.jpg" alt="">
                <h3>vegetable rotti</h3>
                <div class="price">rs.50 </div>
                <input type="number" class="amountBox" name="shorteats5" placeholder="Amount" min="0" style="  width: 100%; padding:2rem; font-size: 1.7rem; color:var(--bg); text-transform: none; background:white;">
            </div>

            <div class="box">
                <img src="../../images/vadai.png" alt="">
                <h3>vadai</h3>
                <div class="price">rs.10 </div>
                <input type="number" class="amountBox" name="shorteats6" placeholder="Amount" min="0" style="  width: 100%; padding:2rem; font-size: 1.7rem; color:var(--bg); text-transform: none; background:white;">
            </div>
            </div>

            <br>
            <h2 class="heading"style="font-size:3rem;"><span>Sub Category:</span> rice And Curry</h2>
            <div class="box-container">

            <div class="box">
                <img src="../../images/buffet.jpg" alt="">
                <h3>breakfast <br>(buffet system)</h3>
                <div class="price">150 </div>
                <input type="number" class="amountBox" name="riceAndCurry1" placeholder="Amount" min="0" style="  width: 100%; padding:2rem; font-size: 1.7rem; color:var(--bg); text-transform: none; background:white;">
            </div>

            <div class="box">
                <img src="../../images/buffet.jpg" alt="">
                <h3>lunch <br>(buffet system)</h3>
                <div class="price">200 </div>
                <input type="number" class="amountBox" name="riceAndCurry2" placeholder="Amount" min="0" style="  width: 100%; padding:2rem; font-size: 1.7rem; color:var(--bg); text-transform: none; background:white;">
            </div>
            </div>

            <br>
            <h2 class="heading"style="font-size:3rem;"><span>Sub Category:</span> hoppers</h2>
            <div class="box-container">

            <div class="box">
                <img src="../../images/egg-hopper.jpg" alt="">
                <h3>egg hoppers</h3>
                <div class="price">rs.80 </div>
                <input type="number" class="amountBox" name="hoppers1" placeholder="Amount" min="0" style="  width: 100%; padding:2rem; font-size: 1.7rem; color:var(--bg); text-transform: none; background:white;">
            </div>

            <div class="box">
                <img src="../../images/plain-hopper.jpg" alt="">
                <h3>plain hoppers</h3>
                <div class="price">rs.30</div>
                <input type="number" class="amountBox" name="hoppers2" placeholder="Amount" min="0" style="  width: 100%; padding:2rem; font-size: 1.7rem; color:var(--bg); text-transform: none; background:white;">
            </div>
            </div>

            <br>
            <h2 class="heading"style="font-size:3rem;"><span>Sub Category:</span> rotti</h2>
            <div class="box-container">

            <div class="box">
                <img src="../../images/egg-rotti.jpg" alt="">
                <h3>egg rotti</h3>
                <div class="price">rs.120 </div>
                <input type="number" class="amountBox" name="rotti1" placeholder="Amount" min="0" style="  width: 100%; padding:2rem; font-size: 1.7rem; color:var(--bg); text-transform: none; background:white;">
            </div>

            <div class="box">
                <img src="../../images/yeast-rotti.jpg" alt="">
                <h3>yeast rotti</h3>
                <div class="price">rs.70</div>
                <input type="number" class="amountBox" name="rotti2" placeholder="Amount" min="0" style="  width: 100%; padding:2rem; font-size: 1.7rem; color:var(--bg); text-transform: none; background:white;">
            </div>

            <div class="box">
                <img src="../../images/pol-rotti.png" alt="">
                <h3>pol rotti</h3>
                <div class="price">rs.30</div>
                <input type="number" class="amountBox" name="rotti3" placeholder="Amount" min="0" style="  width: 100%; padding:2rem; font-size: 1.7rem; color:var(--bg); text-transform: none; background:white;">
            </div>

            <div class="box">
                <img src="../../images/godamba-rotti.png" alt="">
                <h3>godamba rotti</h3>
                <div class="price">rs.50 </div>
                <input type="number" class="amountBox" name="rotti4" placeholder="Amount" min="0" style="  width: 100%; padding:2rem; font-size: 1.7rem; color:var(--bg); text-transform: none; background:white;">
            </div>
            </div>

            <br>
            <h2 class="heading"style="font-size:3rem;"><span>Sub Category:</span> other foods</h2>
            <div class="box-container">

            <div class="box">
                <img src="../../images/string-hoppers.jpg" alt="">
                <h3>string hoppers </h3>
                <div class="price">rs.140 </div>
                <input type="number" class="amountBox" name="otherFoods1" placeholder="Amount" min="0" style="  width: 100%; padding:2rem; font-size: 1.7rem; color:var(--bg); text-transform: none; background:white;">
            </div>

            <div class="box">
                <img src="../../images/parota.jpg" alt="">
                <h3>parota</h3>
                <div class="price">rs.50 </div>
                <input type="number" class="amountBox" name="otherFoods2" placeholder="Amount" min="0" style="  width: 100%; padding:2rem; font-size: 1.7rem; color:var(--bg); text-transform: none; background:white;">
            </div>
            
            </div>

            <br>
            <div style="display:flex;">
            <div class="inputBox" style=" width:60rem; margin-right:5rem; display: flex; align-items: center; margin-top: 2rem; margin-bottom: 2rem; background:var(--bg); border:var(--border);">
                <input type="text" placeholder="Enter mobile no for confirmation" class="productPhone" name="productPhone" onkeypress="return isNumber(event)" required style="width: 100%; padding:2rem; font-size: 1.7rem; color:var(--bg); text-transform: none; background:white;">
            </div>
            <button name="submit" class="btn"  type="submit" style="height:6.5rem; margin-top:2.1rem;">Place Order</button>
            </div>
            
    </form>

    </section>

    <!--Specaial-->

    <section class="speciality" id="speciality">

    <h1 class="heading"> special <span>products</span> </h1>
    <form action="" method="post">
    <div class="box-container">

        <div class="box">
            
            <div class="image">
                <img src="../../images/biryani.jpg" alt="" style="width:25rem">
            </div>
            <div class="content">
                <h3>biriyani</h3>
                
                <div class="price">rs.900</div>
            </div>
            <input type="number" class="amountBox" name="special1" placeholder="Amount" min="0" style="  width: 100%; padding:2rem; font-size: 1.7rem; color:var(--bg); text-transform: none; background:white;">
        </div>

        <div class="box">
            
            <div class="image">
                <img src="../../images/fried chicken.jpg" alt="" style="width:25rem">
            </div>
            <div class="content">
                <h3>frie chicken</h3>
                
                <div class="price">rs.300</div>
            </div>
            <input type="number" class="amountBox" name="special2" placeholder="Amount" min="0" style="  width: 100%; padding:2rem; font-size: 1.7rem; color:var(--bg); text-transform: none; background:white;">
        </div>

        <div class="box">
            
            <div class="image">
                <img src="../../images/devilled-chicken.jpg" alt="">
            </div>
            <div class="content">
                <h3>chicken devilled</h3>
                
                <div class="price">rs.650</div>
            </div>
            <input type="number" class="amountBox" name="special3" placeholder="Amount" min="0" style="  width: 100%; padding:2rem; font-size: 1.7rem; color:var(--bg); text-transform: none; background:white;">
        </div>

        <div class="box">
            
            <div class="image">
                <img src="../../images/string-hoppers-kottu.jpg" alt="">
            </div>
            <div class="content">
                <h3>string hoppers kottu</h3>
                
                <div class="price">rs.500</div>
            </div>
            <input type="number" class="amountBox" name="special4" placeholder="Amount" min="0" style="  width: 100%; padding:2rem; font-size: 1.7rem; color:var(--bg); text-transform: none; background:white;">
        </div>

        <div class="box">
            
            <div class="image">
                <img src="../../images/dolphin-kottu.jpg" alt="">
            </div>
            <div class="content">
                <h3>dolphin kottu</h3>
                
                <div class="price">rs.500</div>
            </div>
            <input type="number" class="amountBox" name="special5" placeholder="Amount" min="0" style="  width: 100%; padding:2rem; font-size: 1.7rem; color:var(--bg); text-transform: none; background:white;">
        </div>

        <div class="box">
            
            <div class="image">
                <img src="../../images/see-food-rice.jpg" alt="">
            </div>
            <div class="content">
                <h3>see food riceS</h3>
                
                <div class="price">rs.650</div>
            </div>
            <input type="number" class="amountBox" name="special6" placeholder="Amount" min="0" style="  width: 100%; padding:2rem; font-size: 1.7rem; color:var(--bg); text-transform: none; background:white;">
        </div>
        
    </div>
    <div style="display:flex;">
            <div class="inputBox" style=" width:60rem; margin-right:5rem; display: flex; align-items: center; margin-top: 2rem; margin-bottom: 2rem; background:var(--bg); border:var(--border);">
                <input type="text" placeholder="Enter mobile no for confirmation" class="productPhone" name="productPhone" onkeypress="return isNumber(event)" required style="width: 100%; padding:2rem; font-size: 1.7rem; color:var(--bg); text-transform: none; background:white;">
            </div>
            <button name="special" class="btn"  type="submit" style="height:6.5rem; margin-top:2.1rem;">Place Special Order</button>
            </div>
    </form>
</section>

<!--Specaial-->

    <!-- menu section ends -->

    <!-- footer section starts  -->

    <?php include '../../includes/footer.php'; ?>

    <!-- footer section ends -->

    <!-- custom js file link  -->
    <script src="../../js/script.js"></script>

    <?php include '../../includes/validate.php' ?>

</body>
