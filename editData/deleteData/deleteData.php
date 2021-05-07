<?php
    session_start();
    //if Guest tries to access this page
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

    //fetch products
    $data = file_get_contents('../../data/products.json');
    $array_data = json_decode($data, true)['phones'];

    // create new array without phone which id equals to $_POST['id]
    $new_array = [];
    foreach($array_data as $phone) {
        if($phone['id'] != $_POST['id']) {
            array_push($new_array, $phone);
        }
    }

    //give data same keyname and convert it back to json
    $updated_data = ["phones" => $new_array];
    $convert_array_to_json = json_encode($updated_data);

    //upload new data to the json file
    file_put_contents('../../data/products.json', $convert_array_to_json);


?>