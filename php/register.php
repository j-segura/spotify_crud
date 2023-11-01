<?php

include('connection.php');
if (isset($_REQUEST['register']))
{
    $user = $_REQUEST['user'];
    $email = $_REQUEST['email'];
    $pwd = $_REQUEST['pwd'];
    $pwdRepeat = $_REQUEST['pwd-repeat'];

    $select_query = mysqli_query($connection, "select * from users where user='$user' or email='$email'");
    $userExist = mysqli_num_rows($select_query);

    if ($userExist>0) {
        ?>
            <script>
                alert('User already exist try with another user or email');
            </script>
        <?php
    } else {
        echo('continuemos con el registro');

        $save_query = mysqli_query($connection, "INSERT INTO `users` (`user`, `email`, `password`) VALUES ('$user', '$email', '$pwd')");
        
        $select_query = mysqli_query($connection, "select * from users where user='$user' or email='$email'");
        $userSaved = mysqli_num_rows($select_query);

        if ($userSaved>0) {
            $_SESSION['user'] = $user;
            header('location:../home.php');
        } else {
            $_SESSION['message'] = 'something went wrong!';
            $_SESSION['m_type'] = 'danger';
            header('location:../index.php');
        }

    }
}

?>