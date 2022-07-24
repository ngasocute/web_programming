</head>

<body>

  <header class="page-header">
    <!-- topline -->
    <div class="page-header__topline">
      <div class="container clearfix">

        <div class="currency">
          <a class="currency__change" href="customer/my_account.php?my_orders">
          <?php
          if(!isset($_SESSION['customer_email'])){
          echo "Welcome :Guest"; 
          }
          else
          { 
              echo "Welcome : " . $_SESSION['customer_email'] . "";
            }
?>
          </a>
        </div>

        <div class="basket">
          <a href="cart.php" class="btn btn--basket">
            <i class="icon-basket"></i>
            <?php items(); ?> items
          </a>
        </div>
        
        
        <ul class="login">

<li class="login__item">
<?php
if(!isset($_SESSION['customer_email'])){
  echo '<a href="customer_register.php" class="login__link">Register</a>';
} 
  else
  { 
      echo '<a href="customer/my_account.php?my_orders" class="login__link">My Account</a>';
  }   
?>  
</li>


<li class="login__item">
<?php
if(!isset($_SESSION['customer_email'])){
  echo '<a href="checkout.php" class="login__link">Sign In</a>';
} 
  else
  { 
      echo '<a href="../logout.php" class="login__link">Log out</a>';
  }   
?>  
  
</li>
</ul>
      
      </div>
    </div>
    <!-- bottomline -->
    <div class="page-header__bottomline">
      <div class="container clearfix">

        <div class="logo">
          <a class="logo__link" href="index.php">
            <img class="logo__img" src="images/logo.png" alt="Avenue fashion logotype" width="237" height="19">
          </a>
        </div>

        <nav class="main-nav">
          <ul class="categories">

            <li class="categories__item">
              <a class="categories__link" href="#">
                Mens
               
              </a>
              </li>

            <li class="categories__item">
              <a class="categories__link" href="#">
                Womens
               
              </a>
            </li>

            <li class="categories__item">
              <a class="categories__link categories__link--active" href="shop.php">
                Shop
              </a>
            </li>

            <li class="categories__item">
              <a class="categories__link" href="localstore.php">
                Local Stores
              </a>
            </li>

          <li class="categories__item">
              <a class="categories__link" href="customer/my_account.php?my_orders">
                My Account
                <i class="icon-down-open-1"></i>
              </a>
              <div class="dropdown dropdown--lookbook">
                <div class="clearfix">
                  <div class="dropdown__half">
                    <div class="dropdown__heading">Account Settings</div>
                    <ul class="dropdown__items">
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">My Wishlist</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">My Orders</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">View Shopping Cart</a>
                      </li>
                    </ul>
                  </div>
                  <div class="dropdown__half">
                    <div class="dropdown__heading"></div>
                    <ul class="dropdown__items">
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Edit Your Account</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Change Password</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Delete Account</a>
                      </li>
                    </ul>
                  </div>
                </div>
             

              </div>

            </li>

          </ul>
        </nav>
      </div>
    </div>
  </header>

  <style>
  @media only screen and (max-width: 600px) {
  .hero {
    width: 100vw;
  }
  header .container.clearfix{
    
    justify-content: space-around;

  }
  header .logo {
    padding: 32px 0px;
  }
  .page-header__topline .login {
    margin: 0 auto!important;
  }
  .hero  .btn1 {
     position: static; 
    line-height: 40px;
    float: right;
     right: 0; 
     margin-right: 16px;
     display: block;
     top: 80px;
    }
    .wrapper {
      width: auto;
    padding: 20px;
    margin: 20px;
    }
    .container {
      width: auto;
      max-width:  1170px;
      padding: 0;
      display: flex;
      flex-wrap: wrap;
    }
    .container .col-md-4.col-sm-6.single{
      margin: 0 auto;
      width: 90%;
    }
    .main {
      max-width: 100vw!important;
      overflow: hidden;
    }
    body {
      display: flex;
      flex-direction: column;
      width: 100vw; 
      /* overflow: hidden; */
      min-width: auto!important;
    }
    .categories {
      display: none;

    }
    center{
      margin: 0 auto;
    }
    #content{
      padding-left: 0!important;
    }
    .page-footer .footer-nav{
      padding-left: 20px;
    }
    .login{
      z-index: 20;
    }
}
</style>