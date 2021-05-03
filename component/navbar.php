 <header class="section-header">
   <nav class="navbar navbar-main navbar-expand-lg navbar-light">
     <div class="container">
       <a class="navbar-brand" href="index.php"><img src="./images/logo/logo.svg" class="logo"></a>

       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>

       <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
         <ul class="navbar-nav ml-auto mr-sm-2 mt-2 mt-lg-0">
           <li class="nav-item">
             <a class="nav-link" href="<?php echo ('/Omedia-Ecommerce/' . "cart.php") ?>"><img src="./images/icons/shopping_cart_black_24dp.svg" alt=""><sup><div style="width: 14px;height: 14px;border-radius: 50%;font-size: 10px;color: #fff;
             line-height: 14px;text-align: center;background: red;float: right;margin-left: -10px;"><?php echo count($_SESSION['cart'])?></div></sup></a>
           </li>
         </ul>

         <ul class="navbar-nav">
           <li class="nav-item dropdown">
             <a class="nav-link" href="" role="button" data-toggle="dropdown">
             <img src="./images/icons/account_circle_black_24dp.svg" alt="">
             </a>
             <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
               <!-- logic is missing :) I am going to add it after login/register system is done/ Lekso -->
               <?php if (isset($_SESSION['username'])) : ?>
                 <a class="dropdown-item" href="#">Profile</a>
                 <a class="dropdown-item" href="#">Account settings <img src="./images/icons/manage_accounts_black_24dp.svg" alt=""> </a>
                 <div class="dropdown-divider"></div>
                 <a class="dropdown-item" href="<?php echo ('/Omedia-Ecommerce/' . "signout.php") ?>">Sign out <img src="./images/icons/logout_black_24dp.svg" alt=""> </a>
               <?php else : ?>
                 <a class="dropdown-item" href="<?php echo ('/Omedia-Ecommerce/' . "login.php") ?>">Sign in <img src="./images/icons/login_black_24dp.svg" alt=""></a>
                 <a class="dropdown-item" href="<?php echo ('/Omedia-Ecommerce/' . "register.php") ?>">Sign up <img src="./images/icons/app_registration_black_24dp.svg" alt=""></a>
               <?php endif ?>
             </div>
           </li>
         </ul>
       </div>
     </div>
   </nav>
 </header>