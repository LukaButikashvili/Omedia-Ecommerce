<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
session_start();
$_SESSION['cart'] = $_SESSION['cart'] ?? [];
require './component/html_head.php';
require './component/navbar.php';
include './common/include.php';
$data = include_product_data();

//Loads coupon data
$coupon_data = file_get_contents('./data/coupons.json');
$coupons = json_decode($coupon_data, true)['coupons'];

?>
<?php
if (isset($_POST['remove'])) {
    unset($_SESSION['cart'][$_POST['remove']]);
}
?>

<?php if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
    foreach ($_SESSION['cart'] as $product_key => $amount) {
        $product = $data['phones'][$product_key - 1];
        $total[] = $product['Price'];
    }
    $total = array_sum($total);

    //Checks if the entered coupon is correct
    $discount = 0;
    if (isset($_GET['couponCode'])) {
        foreach ($coupons as $item) {
            if ($item == $_GET['couponCode']) {
                $discount = 10;
            }
        }
    }

    $discount_price = ($total / 100) * $discount;
}

?>
<section class="section-content padding-y bg">
    <div class="container">
        <div class="row">
            <aside class="col-lg-9">
                <div class="card" style="overflow: auto; height: 384px;">
                    <table class="table table-borderless table-shopping-cart" style="table-layout:fixed;">
                        <thead class="text-muted">
                            <tr class="small text-uppercase">
                                <th scope="col">Product</th>
                                <th scope="col" width="120">Quantity</th>
                                <th scope="col" width="120">Price</th>
                                <th scope="col" class="text-right" width="150"> </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($_SESSION['cart'] as $product_key => $amount) : ?>
                                <?php $product = $data['phones'][$product_key - 1]; ?>
                                <tr>
                                    <td style="display: block; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                                        <figure class="itemside align-items-center">
                                            <div class="aside"><img src="<?php echo "/Omedia-Ecommerce" . $product['img'] ?>" class="img-sm"></div>
                                            <figcaption class="info">
                                                <a href="#" class="title text-dark"><?php echo $product['name'] ?></a>
                                                <p class="text-muted small">Brand: <?php echo $product['brand'] ?></p>
                                            </figcaption>
                                        </figure>
                                    </td>
                                    <td>
                                        <select class="form-control">
                                            <option>1</option>
                                        </select>
                                    </td>
                                    <td>
                                        <div class="price-wrap">
                                            <var class="price"><?php echo $product['Price'] . "₾" ?></var>
                                        </div>
                                    </td>
                                    <form method="post">
                                        <td class="text-right">
                                            <button class="btn btn-light" type="submit" name="remove" value="<?php echo $product_key ?>">Remove</button>
                                        </td>
                                    </form>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </aside>
            <aside class="col-lg-3">

                <div class="card mb-3">
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label>Have coupon?</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="couponCode" id="couponCode" placeholder="Coupon code">
                                    <span class="input-group-append">
                                        <button class="btn btn-primary" id="couponApply">Apply</button>
                                    </span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <?php if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) : ?>
                            <dl class="dlist-align">
                                <dt>Total price:</dt>
                                <dd class="text-right"><?php echo $total . "₾" ?></dd>
                            </dl>
                            <dl class="dlist-align">
                                <dt>Discount:</dt>
                                <dd class="text-right text-danger"> - <?php echo $discount  . "%" ?></dd>
                            </dl>
                            <dl class="dlist-align">
                                <dt>Total:</dt>
                                <dd class="text-right text-dark b"><strong><?php echo ($total - $discount_price) . "₾" ?></strong></dd>
                            </dl>
                        <?php endif ?>
                        <hr>
                        <p class="text-center mb-3">
                            <img src="https://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/misc/payments.png" height="26">
                        </p>
                        <a href="#" class="btn btn-primary btn-block"> Make Purchase </a>
                    </div>
                </div>
            </aside>
        </div>
        <script src="createCoupon.js"></script>

        <?php
        require './component/html_end.php'
        ?>