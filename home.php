<?php

include('./php/connection.php');

$query = mysqli_query($connection, "SELECT * FROM `products`");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body id="home">
    <header>
        <div class="logo" width="20px">
            <img src="./img/spotify.png" alt="">
            <span>Spotify Clothing Store</span>
        </div>
    </header>
    <nav>
        <a href="">home</a>
        <a href="">shop</a>
        <a href="">trends</a>
        <a href="">blog</a>
        <a href="">elements</a>
    </nav>
    <div class="banner">
        <div class="content">
            <div class="info">
                <h2>WE ARE <span>SPOTIFY</span></h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus praesentium asperiores.</p>
                <a href="./create.php" target="_blank">Add New</a>
            </div>
            <div class="img">
                <img src="./img/banner.jpg" alt="">
            </div>
        </div>
    </div>
    <section id="shop">
        <?php foreach($query as $row) { ?> 
                <div>
                    <img src="./storage/<?php echo $row['image'] ?>" alt="">
                </div>
        <?php } ?>
    </section>
</body>
</html>