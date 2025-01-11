<?php
session_start();
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$password2 = $_POST['password2'];

// incripted password cretate 

$uper = preg_match('@[A-Z]@', $password);
$lower = preg_match('@[a-z]@', $password);
$number = preg_match('@[0-9]@', $password);

$flag = false;
echo '<h1>THANKS FOR YOUR SIGN UP</h1>';
// username chak input 
if (empty($username)) {
    $flag = true;
    $_SESSION['username_err'] = 'please filup the username';
    header('location:regatation.php');

} else {
    echo "<h2> Re-password: $username </h2>";
}

// email chak input 
if (empty($email)) {
    $flag = true;
    $_SESSION['email_err'] = 'please currect Email';
    header('location:regatation.php');

} else {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $flag = true;
        $_SESSION['email_err'] = 'please example@gmail.com ';
        header('location:regatation.php');
    } else {
        echo  "<h2> Re-password: $email</h2>";
    }
}

// password chak input 
if (empty($password)) {
    $flag = true;
    $_SESSION['pass_err'] = 'please Storng Password';
    header('location:regatation.php');

} else {
    if (!$lower || !$uper || !$number || strlen($password) < 8) {
        $flag = true;
        $_SESSION['pass_err'] = 'please Storng  Password';
        header('location:regatation.php');
    } else {
        echo "<h2> Re-password: $password</h2>";
    }
}

// password rechak input 
if (empty($password2)) {
    $flag = true;
    $_SESSION['repass_err'] = "Don't muth Password";
    header('location:regatation.php');

} else {
    if ($password !== $password2) {
        $flag = true;
        $_SESSION['repass_err'] = "Don't muth Password";
        header('location:regatation.php');
    } else {
        echo "<h2> Re-password: $password2</h2>" ;
    }
}






?>