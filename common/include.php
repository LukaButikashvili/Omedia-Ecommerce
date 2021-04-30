<?php

// fetchs data and converts json to associative array
function get_config()
{
    return json_decode(file_get_contents('config/config.json'), true);
}


function include_template($template_name, $variable = [], $print = true)
{
    $output = null;

    $component_path = get_config()['component-path'];
    $file_path = $component_path . '/' . $template_name;

    if (file_exists($file_path)) {
        extract($variable);

        ob_start();

        include $file_path;
        $output = ob_get_contents();

        ob_end_clean();
    }

    if ($print) {
        echo $output;
    }

    return $output;
}

function include_product_data()
{
    $path = $_SERVER['DOCUMENT_ROOT'] . "/Omedia-Ecommerce/data/products.json";
    $product_data = json_decode(file_get_contents($path), true);
    return $product_data;
}

// checks if product exists
function getProductById($id)
{
    $data = include_product_data();
    foreach ($data['phones'] as $item) {
        if ($item['id'] == $id) {
            return $data;
        }
    }
    return null;
}
