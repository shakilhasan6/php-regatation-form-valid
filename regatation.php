<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sing Up</title>
  <link rel="stylesheet" href="style.css">
</head>  

<body>
  <div id="login-box">
    <div class="left">
      <h1>Sign up</h1>

      <form action="secssesful.php" method="post">
        <!-- user name input -->
        <input type="text" name="username" placeholder="Username" />
        <?php
        if (isset($_SESSION['username_err'])) { ?>
          <p class="error"><?php echo $_SESSION['username_err'] ?></p>
        <?php }
        unset($_SESSION['username_err']) ?>

        <!-- email  input -->
        <input type="text" name="email" placeholder="E-mail" />

        <?php
        if (isset($_SESSION['email_err'])) { ?>
          <p class="error"><?php echo $_SESSION['email_err'] ?></p>
        <?php }
        unset($_SESSION['email_err']) ?>

        <!-- password  input -->
        <input type="password" name="password" placeholder="Password" />
        <?php
        if (isset($_SESSION['pass_err'])) { ?>
          <p class="error"><?php echo $_SESSION['pass_err'] ?></p>
        <?php }
        unset($_SESSION['pass_err']) ?>

        <!-- rechak password  input -->
        <input type="password" name="password2" placeholder="Retype password" />
        <?php
        if (isset($_SESSION['repass_err'])) { ?>
          <p class="error"><?php echo $_SESSION['repass_err'] ?></p>
        <?php }
        unset($_SESSION['repass_err']) ?>


        <input type="submit" name="signup_submit" value="Sign me up" />
      </form>
    </div>

    <div class="right">
      <span class="loginwith">Sign in with<br />social network</span>

      <button class="social-signin facebook">Log in with facebook</button>
      <button class="social-signin twitter">Log in with Twitter</button>
      <button class="social-signin google">Log in with Google+</button>
    </div>
    <div class="or">OR</div>
  </div>
</body>

</html>