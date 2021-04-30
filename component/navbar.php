 <header class="section-header">
    <nav class="navbar navbar-main navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="index.php"><img src="./images/logo/logo.svg" class="logo"></a>
    
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav ml-auto mr-sm-2 mt-2 mt-lg-0">
            <li class="nav-item active mr-3">
              <a class="nav-link" href="#">Products</a>
            </li>
            <li class="nav-item mr-3">
              <a class="nav-link" href="#">Basket</a>
            </li>
          </ul>
    
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                <i class="fa fa-user rounded-circle mr-2"></i> Profile 
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <!-- logic is missing :) I am going to add it after login/register system is done/ Lekso -->
              <?php if(2> 3):?>
                <a class="dropdown-item" href="#">Profile</a>
                <a class="dropdown-item" href="#">Account settings</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Sign out</a>
              <?php else: ?>
                <a class="dropdown-item" href="#">Sign in</a>
                <a class="dropdown-item" href="#">Sign up</a>
              <?php endif?>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    </header><!-- section-header.// -->
