<?php

$updated_data = $_POST;
session_start();

// get json data
$data = file_get_contents('../users.json');
$array_of_data = json_decode($data, true)['users'];

$array = [];
$array_key = null;
foreach($array_of_data as $key => $user) {
    if(password_verify($_POST['password'], $user['password']) && $_SESSION['username'] === $user['username']) {
        $array =  $user;
        $array_key = $key;
    }
}

//check if Previous Password is correct
if(password_verify($_POST['password'], $array['password'])) {
    //updating users array
    $array['firstname'] = $_POST['firstname'];
    $array['lastname'] = $_POST['lastname'];
    $array['username'] = $_POST['username'];

    //replace users old data into new data in array
    $array_of_data[$array_key] = $array;


    //updating data (users.json)
    //give Products data same keyname and convert it back to json
    $updated_data = ["users" => $array_of_data];
    $convert_array_to_json = json_encode($updated_data);

    //upload new data to the json file
    file_put_contents('../users.json', $convert_array_to_json);

    //change session username and session password
    session_start();
    session_unset();
    $_SESSION['username'] = $array['username'];
    $_SESSION['type'] = $array['type'];

    var_dump($array);
    var_dump($convert_array_to_json);

    //redirect
    header("Location: http://localhost/Omedia-Ecommerce");
} else {
    echo '<script>alert("invalid password")</script>';
    die(1);
}