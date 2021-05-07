<?php
session_start();
$csrf_token = rand(0, 1000000000);
$_SESSION['token'] = $csrf_token;

include '../common/include.php';
include_template('html_head.php', ['title' => 'Create Coupon']);

require '../component/navbar.php';
?>


<body>
    <div class="container-sm mt-3">
        <input type="text" id="safetyCode" value=<?php echo $csrf_token ?>>
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="coupon" id="coupon" placeholder="Enter a new Coupon Code" aria-label="Enter a new Coupon Code" aria-describedby="button-addon2">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button" id="couponButton">Enter</button>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="createCoupon.js"></script>
</body>

</html>