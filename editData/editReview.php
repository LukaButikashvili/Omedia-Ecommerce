<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

include_once "../common/include.php";
$data = file_get_contents('../data/products.json');
$array_data = json_decode($data, true)['phones'];
$id = $_POST['id'];

//Here we find the necessary phone to change its data, in our case, to add reviews
$needed_phone;
foreach ($array_data as $item) {
    if ($item['id'] == "$id") {
        $needed_phone = $item;
    }
}

//We add reviews as an array, so that each phone can have multiple reviews
//We also try to guard against attacks by escaping the contents of the review
$needed_phone['review'][] = htmlspecialchars(trim($_POST['review']));

foreach ($array_data as &$item) {
    if ($item['id'] == "$id") {
        $item = $needed_phone;
    }
}

$newArr['phones'] = $array_data;

file_put_contents("../data/products.json", json_encode($newArr));
