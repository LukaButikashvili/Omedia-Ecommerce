<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
const USERS_FILE = "../data/users.json";

function read_users()
{
    if (!file_exists(USERS_FILE)) {
        print "Users database not found";
        die(1);
    }
    $file = file_get_contents(USERS_FILE);
    return json_decode($file, TRUE)['users'];
}

function register_user($firstname, $lastname, $username, $password)
{
    $users = read_users();
    $newUser['firstname'] = $firstname;
    $newUser['lastname'] = $lastname;
    $newUser['username'] = $username;
    $newUser['password'] = password_hash($password, PASSWORD_BCRYPT); // Hash password
    $newUser['type'] = "user";
    array_push($users, $newUser); // Push new user into users array

    $newUsersArr['users'] = $users; // New array ['users'] for json

    file_put_contents(USERS_FILE, json_encode($newUsersArr)); // Write new user to file
    header('Location: http://localhost/Omedia-Ecommerce/pages/login.php');
    die(0);
}

function login($username, $password)
{
    $users = read_users();
    foreach ($users as $user) {
        if ($user['username'] == $username) {
            if (password_verify($password, $user['password'])) {
                session_start();
                print_r($_SESSION);
                $_SESSION['username'] = $username;
                $_SESSION['type'] = $user['type'];
                header('Location: http://localhost/Omedia-Ecommerce/index.php');
                die(0);
            } else {
                echo '<script>alert("Invalid credentials");</script>';
                die(1);
            }
        }
    }
    echo '<script>alert("User with this username doesn\'t exist ");</script>';
}
function unique_username($username){
    $users = read_users();
    foreach($users as $user){
        if($user['username'] === $username){
            return true;
        }
    }
}
function logout()
{
    session_unset();
    session_destroy();
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000, $params['path'], $params['domain'], $params['secure'], $params['httponly']);
    header('Location: http://localhost/Omedia-Ecommerce/index.php');
}
