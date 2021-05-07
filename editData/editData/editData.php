<?php

 //if Guest tries to access this page
 session_start();
 if (!isset($_SESSION['type'])) {
    echo '<h1> You are not authorized </h1>';
    http_response_code(401);
    die(1);
}

//if a USER, which is not an ADMIN tries to access this page
if ($_SESSION['type'] !== 'admin') {
    echo '<h1> You do not have access to this Page </h1>';
    http_response_code(403);
    die(1);
}

$updated_data = $_POST['data'];

// get whole json data
$data = file_get_contents('../../data/products.json');
$array_data = json_decode($data, true)['phones'];

//get old data and its index
$product_old_data = [];
$get_index_of_modified_product = null;


foreach($array_data as $key => $phone) {
    if($phone['id'] === $updated_data['id']) {
        $product_old_data = $phone;
        $get_index_of_modified_product = $key;
    }
}

// adding same img and review key/values into new product data
$updated_data['img'] = $product_old_data['img'];
$updated_data['review'] = $product_old_data['review'];

// parse Price, RAM, ROM key values into int
$int_Price = (int) $updated_data['Price'];
$int_ROM = (int) $updated_data['ROM_Memory'];
$int_RAM = (int) $updated_data['RAM_Memory'];

// change string values into int values
$updated_data['Price'] = $int_Price;
$updated_data['ROM_Memory'] = $int_ROM;
$updated_data['RAM_Memory'] = $int_RAM;

//modify Products data with new product data
$array_data[$get_index_of_modified_product] = $updated_data;

//give Products data same keyname and convert it back to json
$updated_data = ["phones" => $array_data];
$convert_array_to_json = json_encode($updated_data);

//upload new data to the json file
file_put_contents('../../data/products.json', $convert_array_to_json);

