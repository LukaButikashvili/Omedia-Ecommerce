<?php
session_start();
include '../component/html_head.php';
include '../component/navbar.php';

//creating csrf token
$csrf_token = base64_encode(random_bytes(10));
$_SESSION['csrf_token'] = $csrf_token;

if (isset($_SESSION['username'])) :
    // get json data
    $data = file_get_contents('../data/users.json');
    $array_data = json_decode($data, true)['users'];

    $new_array;
    foreach ($array_data as $user) {
        if ($user['username'] === $_SESSION['username']) {
            // array_push($new_array, $user);
            $new_array = $user;
        }
    }
?>
    <div class="container mt-5">
        <h1>Account Settings</h1>
        <div class="card">
            <div class="card-body">
                <form action="editUsersData.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="phoneBrand">Firstname</label>
                        <input type="text" name="firstname" class="form-control" value=<?php echo $new_array['firstname'] ?>>
                    </div>
                    <div class="form-group">
                        <label for="phoneBrand">Lastname</label>
                        <input type="text" name="lastname" class="form-control" value=<?php echo $new_array['lastname'] ?>>
                    </div>
                    <div class="form-group">
                        <label for="phoneName">Username</label>
                        <input type="text" name="username" class="form-control" value=<?php echo $new_array['username'] ?>>
                    </div>
                    <div class="form-group">
                        <label for="releaseDate">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <input type="hidden" name="csrf_token" value=<?php echo $csrf_token ?>>
                    <button type="submit" class="btn btn-primary">Change User</button>
                </form>
            </div>
        </div>
    </div>
<?php else :
    http_response_code(401);
?>
    <h1>You are not allowed to access this Page</h1>
<?php endif ?>