<?php

    $msg="";

    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    

    //Load Composer's autoloader
    require '../../vendor/autoload.php';

    include '../../config/config.php';
    

   if(isset($_POST['signup'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $password = mysqli_real_escape_string($conn, md5($_POST['password']));
    $confirm_password = mysqli_real_escape_string($conn, md5($_POST['confirm-password']));
    $code = mysqli_real_escape_string($conn, md5(rand()));

    if(mysqli_num_rows(mysqli_query($conn, "SELECT * FROM users WHERE email='{$email}'")) >0){
        $$msg = "{$email} - This email address has been already exists.";
        echo "<script type='text/javascript'>alert('This email address has been already exists.');</script>";
       
    } else {

        if ($password === $confirm_password){
            $sql = "INSERT INTO users (name, email, phone, password, code) VALUES ('{$name}','{$email}','{$phone}','{$password}','{$code}')";
            $result = mysqli_query($conn, $sql);

            if ($result){
                echo "<div style='display: none;'>";
                //Create an instance; passing `true` enables exceptions
                $mail = new PHPMailer(true);

                try {
                    //Server settings
                    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                    $mail->isSMTP();                                            //Send using SMTP
                    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                    $mail->Username   = 'apekade19.welimada@gmail.com';                     //SMTP username
                    $mail->Password   = 'cfpgbpfpkisdkjbu';                               //SMTP password
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                    //Recipients
                    $mail->setFrom('apekade19.welimada@gmail.com');
                    $mail->addAddress($email); 

                    

                    //Content
                    $mail->isHTML(true);                                  //Set email format to HTML
                    $mail->Subject = 'no reply';
                    $mail->Body    = 'Here is the Email verification link <b><a href="http://localhost/ak/pages/signin/?verification='.$code.'">http://localhost/ak/pages/signin/?verification='.$code.'</a></b>';
                   

                    $mail->send();
                    echo 'Message has been sent';
                } catch (Exception $e) {
                    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                }
                
                
               echo "<script type='text/javascript'>alert('Registration Successfull.');
               location.href = '../signin/index.php'; </script>"; 
               #header("Location: ../signin/index.php");
               
            }else{
                $msg = "Something went Wrong.";
                echo "<script type='text/javascript'>alert('Something went Wrong.');</script>";
            }
        } else {
            $msg = "Password and conform Passweord do not match";
            echo "<script type='text/javascript'>alert('Password and conform Passweord do not match');</script>";
        }
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

    <!-- header section starts  -->

    <?php include '../../includes/header.php'; ?>

    <!-- header section ends -->
    <br><br><br><br><br><br><br><br><br>

    <section class="order" id="order">

    <h1 class="heading">  <span>  signup</span> </h1>

    <div class="box-container">
        <div class="form-box">
            <center><img src="../../images/logo.jpg " style="height:8rem;" alt=""></center>
            <form id="registration" class="input-group" action="" method="post" onsubmit="return ValidateNo();">
                <input type="text" class="input-field" name="name" placeholder="Full Name" required style="text-transform : none;" autocomplete="off">
                <input type="text" id="email" class="input-field" name="email" placeholder="Email" required style="text-transform : none;" autocomplete="off">
                <input type="phone" id="phone" class="input-field" name="phone" placeholder="Phone Number" required style="text-transform : none;" onkeypress="return isNumber(event)" autocomplete="off">
                <input type="password" class="input-field" name="password"placeholder="Password" required style="text-transform : none;" autocomplete="off">
                <input type="password" class="input-field" name="confirm-password" placeholder="Confirm Password" required style="text-transform : none;" autocomplete="off">
                <br><br><br><br>
                <p style="font-size:1.5rem; ">Already you have an account<a href="../signin/index.php"> click here</a></p>
                <br>
                <button type="submit" class="submit-btn" name="signup">sign up</button>
            </form>
            
        </div>

    </div>

    </section>

    <!-- footer section starts  -->

    <?php include '../../includes/footer.php'; ?>

    <!-- footer section ends -->

    <!-- custom js file link  -->
    <script src="../../js/script.js"></script>

    <?php include '../../includes/validate.php' ?>

</body>
