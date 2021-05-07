<?php
session_start();

$_SESSION['cart'] = $_SESSION['cart'] ?? [];

include '../common/include.php';
include_template('html_head.php', ['title' => 'Profile']);

include '../component/navbar.php';

?>

<div class="d-flex justify-content-center mt-5">
    <h1>Hello <?php echo $_SESSION['username'] ?></h1>
</div>