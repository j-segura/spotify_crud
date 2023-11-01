<?php

include('connection.php');
if (isset($_REQUEST['login']))
{
    $user = $_REQUEST['user'];
    $pwd = $_REQUEST['pwd'];
    $select_query = mysqli_query($connection, "select * from users where user='$user' and password='$pwd'");
    $result = mysqli_num_rows($select_query);

    if ($result>0) {
        $_SESSION['user'] = $user;
        header('location:../home.php');
    } else {
        $_SESSION['message'] = 'User not registered!';
        $_SESSION['m_type'] = 'danger';
        header('location:../index.php');
    }
}

?>