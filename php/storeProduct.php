<?php

include('connection.php');
if (isset($_REQUEST['product']))
{

    

    $productName = $_REQUEST['productname'];
    $price = $_REQUEST['price'];
    $description = $_REQUEST['description'];
    $image = $_FILES['image']['name'];

    if (isset($image) && $image != "") {

        $type = $_FILES['image']['type'];
        $temp = $_FILES['image']['tmp_name'];

        if (!(
            strpos($type, 'gif')
            || strpos($type, 'jpeg')
            || strpos($type, 'webp')
            || strpos($type, 'jpg')
        )) {

            $_SESSION['message'] = 'Only gif, jpeg, webp, jpg files!';
            $_SESSION['m_type'] = 'danger';
            header('location:../create.php');
    
        } else {

            $query = "INSERT INTO `products` (`name`, `price`, `description`, `image`) VALUES ('$productName', '$price', '$description', '$image')";
            $result = mysqli_query($connection, $query);

            if ($result ) {

                move_uploaded_file($temp, '../storage/'.$image);
                $_SESSION['message'] = 'Product saved successfuly!';
                $_SESSION['m_type'] = 'success';
                header('location:../create.php');

            } else {

                $_SESSION['message'] = 'Product saved successfuly!';
                $_SESSION['m_type'] = 'danger';

            }

        }

    }
}

?>