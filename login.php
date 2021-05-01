<?php
include "./component/html_head.php";
include "./component/navbar.php";

?>
<?php if (empty($_POST)) : 
    include './component/login_form.php';
?>

   
<?php else :
    include_once 'auth.php';
    login($_POST['username'], $_POST['password']);

?>
<?php endif ?>
<?php include "./component/html_end.php"; ?>