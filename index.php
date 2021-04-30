<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
session_start();
include './common/include.php';
$data = include_product_data();
?>

<?php
include './component/html_head.php';
include './component/navbar.php';
?>

<div class="container">
    <div class="row">
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
    </div>
</div>
<?php
include './component/html_end.php'
?>