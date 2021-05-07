<?php
session_start();
$csrf_token = base64_encode(random_bytes(10));
$_SESSION['csrf_token'] = $csrf_token;

//if Guest tries to access this page
if (!isset($_SESSION['type'])) {
    echo '<h1> You are not authorized </h1>';
    http_response_code(401);
    die(1);
}
//if a USER, which is not an ADMIN tries to access this page
if ($_SESSION['type'] !== 'admin') {
    echo '<h1> You do not have access to this Page </h1>';
    http_response_code(403);
    die(1);
}
?>

<?php
include '../common/include.php';
include_template('html_head.php', ['title' => 'addProduct']);

include '../component/navbar.php';
?>
<div class="container-sm mt-3">
    <div class="card">
        <div class="card-body">
            <form action="../editData/addData/upload-manager.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="phoneName">Upload Photo</label>
                    <input class="form-control-file" type="file" id="fileSelect" name="photo" required>
                    <p><strong>Note:</strong> Only .jpg, .jpeg, .gif, .png formats allowed to a max size of 5 MB.</p>
                </div>
                <div class="form-group">
                    <label for="phoneName">Phone Name</label>
                    <input type="text" name="name" class="form-control" id="phoneName">
                </div>
                <div class="form-group">
                    <label for="phoneBrand">Brand</label>
                    <input type="text" name="brand" class="form-control" id="phoneBrand">
                </div>
                <div class="form-group">
                    <label for="phoneBrand">Price</label>
                    <input type="number" name="Price" class="form-control" id="phoneBrand">
                </div>
                <div class="form-group">
                    <label for="releaseDate">Release-Date</label>
                    <input type="text" name="Release-Date" class="form-control" id="releaseDate">
                </div>
                <div class="form-group">
                    <label for="os">Operating System</label>
                    <input type="text" name="Operating System" class="form-control" id="os">
                </div>
                <div class="form-group">
                    <label for="cpu">CPU</label>
                    <input type="text" name="CPU" class="form-control" id="cpu">
                </div>
                <div class="form-group">
                    <label for="gpu">GPU</label>
                    <input type="text" name="GPU" class="form-control" id="gpu">
                </div>
                <div class="form-group">
                    <label for="ram">RAM Memory</label>
                    <input type="text" name="RAM Memory" class="form-control" id="ram">
                </div>
                <div class="form-group">
                    <label for="rom">ROM Memory</label>
                    <input type="text" name="ROM Memory" class="form-control" id="rom">
                </div>
                <input type="hidden" name="csrf_token" value=<?php echo $csrf_token ?>>
                <button type="submit" class="btn btn-primary">Add Product</button>
            </form>
        </div>
    </div>
</div>
</body>

</html>