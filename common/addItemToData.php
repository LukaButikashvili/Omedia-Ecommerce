<?php 

// $path - the path of json file
// $post_data - the data which you want to add 
// $key_name - json datas main keyname (e.g. "phones")

function addItemToData(string $path, array $post_data, string $key_name) {

    //fetch data and convert it to array
    $data = file_get_contents($path);
    $convert_json_to_array = json_decode($data, true)[$key_name];

    // get id of last data object to give a new data new id
    $data_length = count($convert_json_to_array);
    $calculate_new_data_id = $convert_json_to_array[$data_length - 1]['id'] + 1;
    
    //make new data array
    // $id = ['id' => $calculate_new_data_id];
     $post_data['id'] = $calculate_new_data_id;
    array_push($convert_json_to_array, $post_data);

    //give data same keyname and convert it back to json
    $updated_data = [$key_name => $convert_json_to_array];
    $convert_array_to_json = json_encode($updated_data);

    //upload new data to the json file
    file_put_contents($path, $convert_array_to_json);
}

