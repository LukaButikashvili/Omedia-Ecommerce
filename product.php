<?php
include_once './common/include.php';
$data = include_product_data();
$id = $_GET['id'] - 1;
$phone = $data['phones'][$id]
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="product.css">
    <link rel="stylesheet" href="component/productDetails.css">
    <link rel="stylesheet" href="component/myHeader.css">
    <link rel="stylesheet" href="component/footer.css">
</head>

<body>
    <?php include_template("myHeader.php") ?>
    <?php include_template('productDetails.php', [
        'image_link' => $phone['img'],
        'name' => $phone['name'],
        'price' => $phone['Price'],
        'brand' => $phone['brand'],
        'release_date' => $phone['Release-Date'],
        'os' => $phone['Operating System'],
        'cpu' => $phone['CPU'],
        'gpu' => $phone['GPU'],
        'ram' => $phone['RAM Memory'],
        'rom' => $phone['ROM Memory'],
    ]) ?>
    <?php include_template("footer.php") ?>
</body>

</html>