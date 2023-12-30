
<?php

$msg = "";

include '../../config/config.php';

if (isset($_GET['reset'])) {
    if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM users WHERE code='{$_GET['reset']}'")) > 0) {
        if (isset($_POST['submit'])) {
            $password = mysqli_real_escape_string($conn, md5($_POST['password']));
            $confirm_password = mysqli_real_escape_string($conn, md5($_POST['confirm-password']));

            if ($password === $confirm_password) {
                $query = mysqli_query($conn, "UPDATE users SET password='{$password}', code='' WHERE code='{$_GET['reset']}'");

                if ($query) {
                    echo "<script type='text/javascript'>alert('Password changed successfully.');
                    location.href = '../signin/index.php';</script>";
                }
            } else {
                #$msg = "<div class='alert alert-danger'>Password and Confirm Password do not match.</div>";
                echo "<script type='text/javascript'>alert('Password and Confirm Password do not match.');</script>";
            }
        }
    } else {
        #$msg = "<div class='alert alert-danger'>submit Link do not match.</div>";
        echo "<script type='text/javascript'>alert('submit Link do not match.');
        location.href = '../forgotpw/forgotpw.php'; </script></script>";
    }
} else {
    header("Location:../forgotpw/forgotpw.php");
}

?>

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

    <h1 class="heading">  <span> change password </span> </h1>

    <div class="box-container">
        <div class="form-box">
        <center><img src="../../images/logo.jpg " style="height:8rem;" alt=""></center>
            <form id="registration" class="input-group" action="" method="post">
                
                <input type="password" id="password" class="input-field" name="password" placeholder="New Password" required style="text-transform : none;">
                <input type="password" id="password" class="input-field" name="confirm-password" placeholder="Confirm Password" required style="text-transform : none;">
      
                <br><br><br><br>
                
                <br>
                <button type="submit" class="submit-btn" name="submit">change</button>
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
