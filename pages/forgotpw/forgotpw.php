
<?php

session_start();
if (isset($_SESSION['SESSION_EMAIL'])) {
    header("Location: ../products/products.php");
    die();
}

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../../vendor/autoload.php';

include '../../config/config.php';
$msg = "";

if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $code = mysqli_real_escape_string($conn, md5(rand()));

    if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM users WHERE email='{$email}'")) > 0) {
        $query = mysqli_query($conn, "UPDATE users SET code='{$code}' WHERE email='{$email}'");

        if ($query) {        
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
                $mail->Body    = 'Here is the Password Change link <b><a href="http://localhost/ak/pages/changepw/changepw.php?reset='.$code.'">http://localhost/ak/pages/changepw/changepw.php?reset='.$code.'</a></b>';

                $mail->send();
                echo 'Message has been sent';
            } catch (Exception $e) {
                #echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                echo "<script type='text/javascript'>alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}');</script>";
            }
            echo "</div>";        
            #$msg = "<div class='alert alert-info'>We've send a Password Change link on your email address.</div>";
            echo "<script type='text/javascript'>alert('Succesfull.! check your mail inbox.');
            location.href = '../signin/index.php'; </script>";
        }
    } else {
        #$msg = "<div class='alert alert-danger'>$email - This email address do not found.</div>";
        echo "<script type='text/javascript'>alert('$email - This email address do not found.');</script>";
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
    <link rel="icon" type="image/x-icon" href="http://localhost/ak/images/logo.jpg">

</head>
<body>

    <!-- header section starts  -->

    <?php include '../../includes/header.php'; ?>

    <!-- header section ends -->
    <br><br><br><br><br><br><br><br><br>

    <section class="order" id="order">

    <h1 class="heading">  <span> forgot password </span> </h1>

    <div class="box-container">
        <div class="form-box">
        <center><img src="../../images/logo.jpg " style="height:8rem;" alt=""></center>
            <form id="registration" class="input-group" action="" method="post">
                
                <input type="email" class="input-field" name="email" placeholder="Email" required style="text-transform : none;" autocomplete="off">
               
                <br><br><br><br>
                <p style="font-size:1.5rem; ">Go back to login page<a href="http://localhost/ak/pages/signin/index.php" onclick=""> click here</a></p>
                <br>
                <button type="submit" class="submit-btn" name="submit">send link to mail</button>
            </form>
            
        </div>

    </div>

    </section>

    <!-- footer section starts  -->

    <?php include '../includes/footer.php'; ?>

    <!-- footer section ends -->

    <!-- custom js file link  -->
    <script src="../js/script.js"></script>

</body>
