<?php
session_start();
$csrf_token = rand(0, 1000000000);
$_SESSION['token'] = $csrf_token;
include '../common/include.php';
include_template('html_head.php', ['title' => 'Create Coupon']);

require '../component/navbar.php';
?>

<div class="container padding-y center-x">
    <div class="row center-x">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">New coupon</h4>
                <form>
                    <input type="text" id="safetyCode" value=<?php echo $csrf_token ?>>
                    <div class="input-group">
                        <input type="text" class="form-control" id="coupon" placeholder="Enter a new coupon code" name="coupon">
                        <span class="input-group-append"><button class="btn btn-primary" id="couponButton" >Create</button></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="createCoupon.js"></script>
<?php require '../component/html_end.php'?>