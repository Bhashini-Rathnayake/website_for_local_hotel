<?php

    $msg="";

   session_start();
    if (isset($_SESSION['SESSION_EMAIL'])) {
        header("Location: ../products/products.php");
        die();
    }
 
    include '../../config/config.php';
    $msg = "";
 
    if (isset($_GET['verification'])) {
        if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM users WHERE code='{$_GET['verification']}'")) > 0) {
            $query = mysqli_query($conn, "UPDATE users SET code='' WHERE code='{$_GET['verification']}'");
            
            if ($query) {
                #$msg = "<div class='alert alert-success'>Account verification has been successfully completed.</div>";
                echo "<script type='text/javascript'>alert('Account verification has been successfully completed.');</script>";
            }
        } else {
            #$msg = "<div class='alert alert-danger'>Email or password do not match.</div>";
            echo "<script type='text/javascript'>alert('Email or password do not match.');</script>";
            #header("Location: index.php");
        }
    }
 
    if (isset($_POST['submit'])) {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, md5($_POST['password']));
 
        $sql = "SELECT * FROM users WHERE email='{$email}' AND password='{$password}'";
        $result = mysqli_query($conn, $sql);
 
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
 
            if (empty($row['code'])) {
                $_SESSION['SESSION_EMAIL'] = $email;
                echo "<script type='text/javascript'>alert('Successfully signed');
               location.href = '../products/products.php'; </script>"; 
            } else {
                #$msg = "<div class='alert alert-info'>First verify your account and try again.</div>";
                echo "<script type='text/javascript'>alert('First verify your account and try again..');</script>";
            }
        } else {
            #$msg = "<div class='alert alert-danger'>Email or password do not match.</div>";
            echo "<script type='text/javascript'>alert('Email or password do not match.');</script>";
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

    <h1 class="heading"><span> signin</span> </h1>

    <div class="box-container">
        <div class="form-box">
        <center><img src="../../images/logo.jpg " style="height:8rem;" alt=""></center>
            <form id="registration" class="input-group" action="" method="post">
            <input type="email" class="input-field" name="email" placeholder="Email" required style="text-transform : none;" value="<?php if (isset($_POST['submit'])){echo $email;} ?>" autocomplete="off">
                <input type="password" id="password" class="input-field" name="password" placeholder="Enter Password" required style="text-transform : none;" autocomplete="off">
                <input type="checkbox" onchange="document.getElementById('password').type = this.checked ? 'text' : 'password'"> Show password
                <br><br><br><br>
                <p style="font-size:1.5rem; ">Dont you have an account<a href="http://localhost/ak/pages/signup/signup.php" onclick="#"> click here to signup</a></p>
                <hr>
                <p style="font-size:1.5rem; ">forgot your password<a href="http://localhost/ak/pages/forgotpw/forgotpw.php" onclick="#"> click here</a></p>
                <br>
                <button type="signin" class="submit-btn" name="submit">sign in</button>
            </form>
            <form id="login" class="input-group" action ="" method ="post">
                
            </form>
        </div>

    </div>

    </section>

    <!-- footer section starts  -->

    <?php include '../../includes/footer.php'; ?>

    <!-- footer section ends -->

    <!-- custom js file link  -->
    <script src="../../js/script.js"></script>

</body>
