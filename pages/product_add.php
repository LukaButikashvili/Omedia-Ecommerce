<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Add</title>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
    <div class="container-sm">
        <div class="card">
            <div class="card-body">
                <form action="../editData/addData/upload-manager.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <!-- <img src="images/logo/defaultimage.png" alt="default-image" class="img-thumbnail"> -->
                        <label for="phoneName">Upload Photo</label>
                        <input type="file" id="fileSelect" name="photo" required>
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
                        <label for="releaseDate">Brand</label>
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
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>