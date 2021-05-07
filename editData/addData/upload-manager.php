<?php

//checking csrf token
session_start();
if(!isset($_SESSION['csrf_token']) && !isset($_POST['csrf_token'])){
    http_response_code(403);
    echo 'csrf token do not exist in your request';
    die(1);
}

var_dump($_POST);
var_dump($_SESSION);

if($_SESSION['csrf_token'] !== $_POST['csrf_token'] ){
    http_response_code(403);
    echo 'csrf token do not macth';
    die(1);
}


include_once "../../common/addItemToData.php";

// Check if the form was submitted

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if file was uploaded without errors
    if (isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0) {
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["photo"]["name"];
        $filetype = $_FILES["photo"]["type"];
        $filesize = $_FILES["photo"]["size"];

        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if (!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");

        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if ($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");

        // Verify MYME type of the file
        if (in_array($filetype, $allowed)) {
            // Check whether file exists before uploading it
            if (file_exists("images/" . $filename)) {
                echo $filename . " is already exists.";
            } else {
                move_uploaded_file($_FILES["photo"]["tmp_name"], "../../images/" . $filename);
                echo "Your file was uploaded successfully.";

                //create new project array and add img file path to it
                $new_product_data = $_POST;
                $new_product_data['img'] = "/images/" . $filename;
                $new_product_data['review'] = [];

                //add product data to products.json
                addItemToData('../../data/products.json', $new_product_data, 'phones');
                header("Location: http://localhost/Omedia-Ecommerce");
            }
        } else {
            echo "Error: There was a problem uploading your file. Please try again.";
        }
    } else {
        echo "Error: " . $_FILES["photo"]["error"];
    }
}
