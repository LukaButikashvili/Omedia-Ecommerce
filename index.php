<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

session_start();
$_SESSION['cart'] = $_SESSION['cart'] ?? [];

include './common/include.php';
$data = include_product_data();
include_template('html_head.php', ['title' => 'Home']);

include './component/navbar.php';
?>

<div class="container mt-2">
    <div class="row justify-content-end mb-3 mt-4 mr-1">
        <?php if (isset($_SESSION['type']) && $_SESSION['type'] == 'admin') : ?>
            <a href="/Omedia-Ecommerce/pages/coupon_create.php">
                <button class="btn btn-secondary">Create a Coupon</button>
            </a>
            <a href="/Omedia-Ecommerce/pages/product_add.php" class="ml-5">
                <button class="btn btn-success">Add Product</button>
            </a>
    </div>

<?php endif ?>

<div class="row mt-2">
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