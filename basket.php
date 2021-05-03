<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <link href="https://bootstrap-ecommerce.com/bootstrap-ecommerce-html/css/bootstrap.css?v=2.0" rel="stylesheet" type="text/css" />
    <link href="https://bootstrap-ecommerce.com/bootstrap-ecommerce-html/css/ui.css?v=2.0" rel="stylesheet" type="text/css" />
    <!-- Custom styling -->
    <link href="https://bootstrap-ecommerce.com/assets/css/style.css?v=2.0" rel="stylesheet" />
</head>

<body>
    <section class="section-content padding-y bg">
        <div class="container">
            <div class="row">
                <aside class="col-lg-9">
                    <div class="card" style="overflow: auto; height: 384px;">
                        <table class="table table-borderless table-shopping-cart">
                            <thead class="text-muted">
                                <tr class="small text-uppercase">
                                    <th scope="col">Product</th>
                                    <th scope="col" width="120">Quantity</th>
                                    <th scope="col" width="120">Price</th>
                                    <th scope="col" class="text-right" width="200"> </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <figure class="itemside align-items-center">
                                            <div class="aside"><img src="https://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/9.jpg" class="img-sm"></div>
                                            <figcaption class="info">
                                                <a href="#" class="title text-dark">Camera Canon EOS M50 Kit</a>
                                                <p class="text-muted small">Matrix: 25 Mpx <br> Brand: Canon</p>
                                            </figcaption>
                                        </figure>
                                    </td>
                                    <td>
                                        <select class="form-control">
                                        </select>
                                    </td>
                                    <td>
                                        <div class="price-wrap">
                                            <var class="price">$1156.00</var>
                                            <small class="text-muted"> $315.20 each </small>
                                        </div> <!-- price-wrap .// -->
                                    </td>
                                    <td class="text-right">

                                        <a href="" class="btn btn-light"> Remove</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </aside>
                <aside class="col-lg-3">

                    <div class="card mb-3">
                        <div class="card-body">
                            <form>
                                <div class="form-group">
                                    <label>Have coupon?</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="" placeholder="Coupon code">
                                        <span class="input-group-append">
                                            <button class="btn btn-primary">Apply</button>
                                        </span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <dl class="dlist-align">
                                <dt>Total price:</dt>
                                <dd class="text-right">$69.97</dd>
                            </dl>
                            <dl class="dlist-align">
                                <dt>Discount:</dt>
                                <dd class="text-right text-danger">- $10.00</dd>
                            </dl>
                            <dl class="dlist-align">
                                <dt>Total:</dt>
                                <dd class="text-right text-dark b"><strong>$59.97</strong></dd>
                            </dl>
                            <hr>
                            <p class="text-center mb-3">
                                <img src="https://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/misc/payments.png" height="26">
                            </p>
                            <a href="#" class="btn btn-primary btn-block"> Make Purchase </a>
                        </div>
                    </div>

                </aside>
            </div>
</body>

</html>