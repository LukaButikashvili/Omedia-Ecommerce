 <header class="section-header">
   <nav class="navbar navbar-main navbar-expand-lg navbar-light">
     <div class="container">
       <a class="navbar-brand" href="http://localhost/Omedia-Ecommerce/index.php"><img src="http://localhost/Omedia-Ecommerce/images/logo/logo.svg" class="logo"></a>

       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>

       <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
         <ul class="navbar-nav ml-auto mr-sm-2 mt-2 mt-lg-0">
           <li class="nav-item">
             <a class="nav-link" href="<?php echo ('/Omedia-Ecommerce/pages/' . "cart.php") ?>"><img src="http://localhost/Omedia-Ecommerce/images/icons/shopping_cart_black_24dp.svg" alt=""><sup>
                 <div style="width: 14px;height: 14px;border-radius: 50%;font-size: 10px;color: #fff;
             line-height: 14px;text-align: center;background: red;float: right;margin-left: -10px;"><?php echo (isset($_SESSION['cart'])? (count($_SESSION['cart'])) :  "0") ?></div>
               </sup></a>
           </li>
         </ul>

         <ul class="navbar-nav">
           <li class="nav-item dropdown">
             <a class="nav-link" href="" role="button" data-toggle="dropdown">
               <img src="http://localhost/Omedia-Ecommerce/images/icons/account_circle_black_24dp.svg" alt="">
             </a>
             <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
               <?php if (isset($_SESSION['username'])) : ?>
                 <a class="dropdown-item" href=<?php echo ('/Omedia-Ecommerce/pages/' . "user_page.php") ?>>Profile</a>
                 <a class="dropdown-item" href=<?php echo ('/Omedia-Ecommerce/' . "accountSettings/accountSettingsPage.php") ?>>Account settings <img src="http://localhost/Omedia-Ecommerce/images/icons/manage_accounts_black_24dp.svg" alt=""> </a>
                 <div class="dropdown-divider"></div>
                 <a class="dropdown-item" href="<?php echo ('/Omedia-Ecommerce/pages/' . "signout.php") ?>">Sign out <img src="http://localhost/Omedia-Ecommerce/images/icons/logout_black_24dp.svg" alt=""> </a>
               <?php else : ?>
                 <a class="dropdown-item" href="<?php echo ('/Omedia-Ecommerce/pages/' . "login.php") ?>">Sign in <img src="http://localhost/Omedia-Ecommerce/images/icons/login_black_24dp.svg" alt=""></a>
                 <a class="dropdown-item" href="<?php echo ('/Omedia-Ecommerce/pages/' . "register.php") ?>">Sign up <img src="http://localhost/Omedia-Ecommerce/images/icons/app_registration_black_24dp.svg" alt=""></a>
               <?php endif ?>
             </div>
           </li>
         </ul>
       </div>
     </div>
   </nav>
 </header>