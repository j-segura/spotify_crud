<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <header>
        <div class="logo" width="20px">
            <img src="./img/spotify.png" alt="">
            <span>Add new product</span>
        </div>
    </header>
    <form id="create-product" action="./php/storeProduct.php" method="post" enctype="multipart/form-data">
        <label for="select-image">Upload image</label>
        <input type="file" name="image" id="select-image">
        <input type="text" name="productname" id="productname" required placeholder="Product name" class="input">
        <input type="text" name="price" id="price" required placeholder="Price $" class="input">
        <textarea name="description" id="description" cols="30" rows="10" placeholder="Description"></textarea>
        <input type="submit" id="product" name="product" value="SAVE" class="btn-normal input">
    </form>
</body>
</html>