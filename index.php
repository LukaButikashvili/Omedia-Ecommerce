<?php
include './common/include.php';
include_once './common/functions.php';
include_template('header.php', ['name' => 'Home'], true);
$data = include_product_data();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="component/productCard.css">
</head>

<body>
    <!--  <section>
        <div>
            <label for="brand">Brand:</label>
            <select name="brand" id="brand">
                <option value="All">All</option>
                <option value="Apple">Apple</option>
                <option value="Samsung">Samsung</option>
                <option value="OnePlus">OnePlus</option>
                <option value="Google">Google</option>
                <option value="Xiaomi">Xiaomi</option>
                <option value="Huawei">Huawei</option>
            </select>
            <label for="os">OS:</label>
            <select name="os" id="os">
                <option value="All">All</option>
                <option value="Android">Android</option>
                <option value="iOS">iOs</option>
            </select>
            <button>Submit</button>
        </div>
    </section> -->
    <main>
        <?php foreach ($data['phones'] as $item) : ?>
            <?php include_template(
                'productCard.php',
                [
                    'image_link' => $item['img'],
                    'phone_name' => $item['name'],
                    'phone_price' => $item['Price'],
                    'id' => $item['id'],
                    'brand' => $item['brand']
                ]
            ) ?>
        <?php endforeach; ?>
    </main>
</body>

</html>