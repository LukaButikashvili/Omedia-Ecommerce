<section class="section-conten padding-y" style="min-height:84vh">
    <div class="card mx-auto" style="max-width: 380px; ">
        <div class="card-body">
            <h4 class="card-title mb-4">Sign in</h4>
            <form method="post" action="http://localhost/Omedia-Ecommerce/pages/login.php">
                <div class="form-group">
                    <label>Username</label>
                    <input name="username" id="username" class="form-control" type="text">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input name="password" id="password" class="form-control" type="password">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block"> Login </button>
                </div>
            </form>
        </div>
    </div>
    <div class="mt-4 text-center">
        Don't have an account? <a href=" <?php echo ('/Omedia-Ecommerce/pages/' . "register.php") ?>">Create One</a>
    </div>
</section>
