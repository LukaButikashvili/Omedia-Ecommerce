<article id=<?php echo $id ?>>
    <a href=<?php echo "product.php?id=" . $id ?>>
        <img src="<?php echo "/Omedia-Ecommerce" . $image_link ?>">
        <h6><?php echo $phone_name ?></h6>
        <p>
            <em>
                <strong>
                    <?php print_r($phone_price) ?>
                </strong>
            </em>
        </p>
    </a>
</article>
