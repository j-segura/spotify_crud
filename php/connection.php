<?php

$server = "localhost";
$username = "root";
$pwd = "";
$database = "lg_php";

$connection = mysqli_connect("$server", "$username", "$pwd");
$select_db = mysqli_select_db($connection, $database);

/* if (!$select_db) {
    echo('connection terminated!');
} else {
    echo 'connected';
}
 */
?>