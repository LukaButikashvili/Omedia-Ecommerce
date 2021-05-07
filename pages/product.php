<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
session_start();
$_SESSION['cart'] = $_SESSION['cart'] ?? [];

include '../common/include.php';
include_template('html_head.php', ['title' => 'Product Details']);

include '../component/navbar.php';
?>

<?php
if (!isset($_GET['id'])) {
    include "../component/not_found.php";
    exit;
}
?>

<?php
$productId = $_GET['id'];
$product = getProductById($productId);
if (!$product) {
    include "../component/not_found.php";
    exit;
}
?>


<?php
$data = include_product_data();
$id = $_GET['id'];
$phone;
foreach ($data['phones'] as $item) {
    if ($item['id'] == $id) {
        $phone = $item;
    }
}

if (isset($_POST["add"])) {
    $cart_element = &$_SESSION['cart'][$_POST['product_id']];
    header("Location: " . $_SERVER['REQUEST_URI']);    
}

?>

<?php include_template('productDetails.php', [
    'image_link' => $phone['img'],
    'name' => $phone['name'],
    'price' => $phone['Price'],
    'brand' => $phone['brand'],
    'release_date' => $phone['Release-Date'],
    'os' => $phone['Operating_System'],
    'cpu' => $phone['CPU'],
    'gpu' => $phone['GPU'],
    'ram' => $phone['RAM_Memory'],
    'rom' => $phone['ROM_Memory'],
    'id' => $phone['id'],
]);
include '../component/review_form.php'

?>

<?php
include '../component/html_end.php';
?>