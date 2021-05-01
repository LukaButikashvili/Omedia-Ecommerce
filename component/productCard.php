

<div class="col-md-3">
    <a href="<?php echo "product.php?id=" . $id ?>">
    <figure class="card card-product-grid">
        <div class="img-wrap"> <img src="<?php echo "/Omedia-Ecommerce" . $image_link ?>"> </div>
        <figcaption class="info-wrap border-top">
            <p class="title" style="white-space:nowrap; overflow:hidden; text-overflow:ellipsis;"><?php echo $phone_name ?></p>
            <div class="price mt-2"><?php echo $phone_price . " ₾"?></div>
        </figcaption>
    </figure>
    </a>
</div>