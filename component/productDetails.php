<main class="productDetails">
    <img src=<?php echo "/Omedia-Ecommerce/" . $image_link ?> alt="">
    <div id="flex-container">
        <h1><?php echo $name ?></h1>
        <p><em id="brand"><?php echo $brand . " ●" ?></em><strong id="price"><?php echo $price ?></strong></p>
        <div id="flex-horizontal-container">
            <div class="column">
                <p><strong>Release Date: </strong><?php echo $release_date ?></p>
                <p><strong>OS: </strong><?php echo $os ?></p>
                <p><strong>GPU: </strong><?php echo $gpu ?></p>
            </div>
            <div class="column">
                <p><strong>CPU: </strong><?php echo $cpu ?></p>
                <p><strong>RAM: </strong><?php echo $ram ?></p>
                <p><strong>ROM: </strong><?php echo $rom ?></p>
            </div>
        </div>
        <h2>Reviews:</h2>
    </div>
</main>