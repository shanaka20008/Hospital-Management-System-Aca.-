<?php

include('security.php');
if(isset($_POST['btnlog']))
{
    $username = $_POST['user']; 
    $password_login = $_POST['password']; 

    $query = "SELECT * FROM user WHERE username='$username' AND password='$password_login' LIMIT 1";
    $query_run = mysqli_query($connection, $query);
    $usertypes = mysqli_fetch_array($query_run);

    if($usertypes['position'] == "admin")
    {
        $_SESSION['username'] = $email_login;
        header('Location: admenu.php');
    }
    else if($usertypes['position'] == "user")
    {
        $_SESSION['username'] = $email_login;
        header('Location: pa-menu.php');
    }
    else
    {
        $_SESSION['status'] = "username / Password is Invalid";
        header('Location: ../login.php');
    }
}
?>