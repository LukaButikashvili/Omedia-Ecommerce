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
    <div class="filter">
        <label for="brand">
            <p>Filter:</p>
        </label>
        <select name="brand" id="brand">
            <option value="All">All</option>
            <option value="Apple">Apple</option>
            <option value="Samsung">Samsung</option>
            <option value="Google">Google</option>
            <option value="OnePlus">OnePlus</option>
            <option value="Xiaomi">Xiaomi</option>
            <option value="Huawei">Huawei</option>
        </select>
        <button id="submit">Ok</button>
    </div>
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