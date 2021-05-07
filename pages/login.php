<?php
session_start();
include '../common/include.php';
include_template('html_head.php', ['title' => 'Login']);

require '../component/navbar.php';
?>
<?php if (empty($_POST)) :
    include '../component/login_form.php';
?>

   
<?php else :
    include_once '../common/auth.php';
    login($_POST['username'], $_POST['password']);

?>
<?php endif ?>
<?php include "../component/html_end.php"; ?>