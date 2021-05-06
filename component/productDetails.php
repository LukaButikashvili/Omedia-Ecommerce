<section class="section-content padding-y bg">
  <div class="container">
    <div class="card">
      <div class="row no-gutters">
        <aside class="col-md-6">
          <article class="gallery-wrap">
            <div class="img-big-wrap">
              <a href="#" style="margin-top: 50px;"><img src="<?php echo "/Omedia-Ecommerce/" . $image_link ?>" style="height: 500px;"></a>
            </div>
          </article>
        </aside>
        <main class="col-md-6 border-left">
          <article class="content-body">

            <h2 class="title" id="name"><?php echo $name ?></h2>
            <div class="mb-3">
              <h4 class="price" id="Price"><?php echo $price . " ₾" ?></h4>
            </div>
            <dl class="row">
              <dt class="col-sm-3">Brand</dt>
              <dd class="col-sm-9" id="brand"><?php echo $brand ?></dd>

              <dt class="col-sm-3">Release Date</dt>
              <dd class="col-sm-9" id="Release-Date"><?php echo $release_date ?></dd>

              <dt class="col-sm-3">OS</dt>
              <dd class="col-sm-9" id="Operating_System"><?php echo $os ?></dd>

              <dt class="col-sm-3">CPU</dt>
              <dd class="col-sm-9" id="CPU"><?php echo $cpu ?></dd>

              <dt class="col-sm-3">GPU</dt>
              <dd class="col-sm-9" id="GPU"><?php echo $gpu ?></dd>

              <dt class="col-sm-3">RAM</dt>
              <dd class="col-sm-9" id="RAM_Memory"><?php echo $ram ?></dd>

              <dt class="col-sm-3">ROM</dt>
              <dd class="col-sm-9" id="ROM_Memory"><?php echo $rom ?></dd>
            </dl>
            <hr>
            <form method="POST" action="">
              <input type="hidden" name="product_id" value="<?php echo $_GET['id'] ?>">
              <button class="btn  btn-primary" name="add" type="submit"> Add to cart</button>
            </form>
            <?php
            if (isset($_SESSION['type'])) {
              if ($_SESSION['type'] == 'admin') {
                include 'buttons.php';
              }
            }
            ?>
          </article>
        </main>
      </div>
    </div>
  </div>
</section>