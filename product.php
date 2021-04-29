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
     <!-- Bootstrap -->
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js?v=<?php echo time(); ?>" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
        'id' => $phone['id'],
    ]) ?>
    <?php include_template("footer.php") ?>
</body>

</html>