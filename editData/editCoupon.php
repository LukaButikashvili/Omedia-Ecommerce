<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', '1');

include_once "../common/include.php";

$data = file_get_contents('../data/coupons.json');
$array_data = json_decode($data, true)['coupons'];

if ($_SESSION['token'] == $_POST['safetyCode']) {
    $new_coupon;
    if (isset($_POST['newCoupon'])) {
        $new_coupon = $_POST['newCoupon'];
        $array_data[] = $new_coupon;
    }

    $newArr['coupons'] = $array_data;
    file_put_contents("../data/coupons.json", json_encode($newArr));
} else {
    echo "ATTACK ATTEMPTED!";
}
