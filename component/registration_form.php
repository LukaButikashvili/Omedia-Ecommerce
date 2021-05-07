<div class="card mx-auto" style="max-width:520px;">
    <article class="card-body">
        <header class="mb-4">
            <h4 class="card-title">Sign up</h4>
        </header>
        <form method="post" action="../pages/register.php">
            <div class="form-row">
                <div class="col form-group">
                    <label>First name</label>
                    <input type="text" class="form-control" id='firstname' name="firstname">
                </div> <!-- form-group end.// -->
                <div class="col form-group">
                    <label>Last name</label>
                    <input type="text" class="form-control" id="lastname" name="lastname">
                </div> <!-- form-group end.// -->
            </div> <!-- form-row end.// -->
            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" id="username" name="username">
            </div> <!-- form-group end.// -->
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Create password</label>
                    <input class="form-control" type="password" id="password" name="password">
                </div> <!-- form-group end.// -->
                <div class="form-group col-md-6">
                    <label>Repeat password</label>
                    <input class="form-control" type="password" id="password_check" name="password_check">
                </div> <!-- form-group end.// -->
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block"> Register </button>
            </div> <!-- form-group// -->
        </form>
    </article><!-- card-body.// -->
</div>
<div class="text-center mt-4">
    Already have an account? <a href="<?php echo ('/Omedia-Ecommerce/pages/' . "login.php") ?>">Login</a>
</div>