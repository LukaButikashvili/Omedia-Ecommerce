
<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
session_start();
if (!empty($_POST)) {
    require '../common/auth.php';
    if ($_POST['password'] == $_POST['password_check']) {
        register_user($_POST['firstname'], $_POST['lastname'], $_POST['username'], $_POST['password']);
    } else {
        echo '<script>alert("passwords don\'t match");</script>';
    }
}
?>
<?php
include '../common/include.php';
include_template('html_head.php', ['title' => 'Register']);

require '../component/navbar.php';
include "../component/registration_form.php"

?>



<?php
if (!empty($_POST)) {
    require 'auth.php';
    if ($_POST['password'] == $_POST['password_check']) {
        register_user($_POST['firstname'], $_POST['lastname'], $_POST['username'], $_POST['password']);
    } else {
        echo '<script>alert("passwords don\'t match");</script>';
    }
}

?>
<?php include "../component/html_end.php"; ?>