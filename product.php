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
    'os' => $phone['Operating_System'],
    'cpu' => $phone['CPU'],
    'gpu' => $phone['GPU'],
    'ram' => $phone['RAM_Memory'],
    'rom' => $phone['ROM_Memory'],
    'id' => $phone['id']
]) ?>

<section class="section-content padding-y bg">
    <div class="container">
        <h4>Reviews:</h4>
        <?php if (isset($phone['review'])) : ?>
            <?php foreach ($phone['review'] as $review) : ?>
                <article class="box mb-3">
                    <div>
                        <p>
                            <?php echo $review ?>
                        </p>
                    </div>
                </article>
                <p>
                <?php endforeach; ?>
            <?php else : ?>
                <h5 class="text-center"><em>No Reviews Yet!</em></h5>
            <?php endif; ?>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">Write a Review</span>
                </div>
                <textarea class="form-control" aria-label="With textarea" name="review" id="review"></textarea>
                <button class="btn btn-outline-secondary" type="button" id="submitReview">Submit</button>
            </div>
    </div>
    </div>
</section>
<?php
include './component/html_end.php'
?>