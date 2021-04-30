<?php
include './component/html_head.php';
include './component/navbar.php';
?>

<?php
if (!isset($_GET['id'])) {
    include "component/not_found.php";
    exit;
}
?>

<?php
require './common/include.php';
$productId = $_GET['id'];
$product = getProductById($productId);
if (!$product) {
    include "component/not_found.php";
    exit;
}
?>


<?php
include_once './common/include.php';
$data = include_product_data();
$id = $_GET['id'];
$phone;
foreach ($data['phones'] as $item) {
    if ($item['id'] == $id) {
        $phone = $item;
    }
}
?>
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
<?php
include './component/html_end.php'
?>