<?php


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

    var_dump($convert_array_to_json);

    //upload new data to the json file
    file_put_contents('../../data/products.json', $convert_array_to_json);


?>