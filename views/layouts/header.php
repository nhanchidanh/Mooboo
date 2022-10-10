
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
   <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
   <?php if($params['page'] === 'product_detail') echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>'?>
   <?php if (isset($params['css']) && is_array($params['css'])) {
      foreach ($params['css'] as $key => $value) {
      ?>
         <link rel="stylesheet" href="<?php echo $this->getCss($value) ?>" />
      <?php
      }
   } ?>
   <title><?= 'Mooboo | ' . htmlspecialchars($params['title']) ?></title>
</head>

<body>
   <style>

   </style>
   <div class="wrapper">
      <header class="header">
         <div class="container-fluid">
            <div class="row">
               <div class="col-12">
                  <nav class="navbar navbar-expand-lg navbar-light fixed-top">
                     <a href="<?= BASE_URL . "/" ?>" class="navbar-brand">
                        <img src="https://cdn.shopify.com/s/files/1/0162/4018/1312/files/logo_150x.png?v=1546680040" alt="logo">
                     </a>
                     <form action="#" class="form-search-respon form-inline ml-lg-auto">
                        <input type="text" name="search" id="search" placeholder="Search here..." class="search-input form-control rounded-pill">
                        <button class="btn btn-search m-sm-2 "><i class="search-icon fa-solid fa-magnifying-glass"></i></button>
                     </form>
                     <div class="cart-box ml-auto d-lg-none m-2">
                        <a class="cart-link btn">
                           <i class="fa-solid fa-cart-shopping"></i>
                           <span class="cart-notice">0</span>
                        </a>
                        <div class="mini_cart">
                           <div class="mini_cart_items">
                              <ul class="cart_list">
                                 <li class="cart_item">
                                    <div class="cart_img_section">
                                       <a href="#" class="cart_img_link">
                                          <img src="https://cdn.shopify.com/s/files/1/0162/4018/1312/products/17_958b2620-266c-4cd9-be79-6c70e2a28889_small.jpg?v=1546406647" alt="cart_img_1" class="cart_img">
                                       </a>
                                    </div>
                                    <div class="cart_info">
                                       <a href="#" class="cart_title">Demo product title</a>
                                       <span class="mini_cart_qty">1X <span class="mini_cart_price">$50.00</span></span>
                                    </div>

                                    <div class="cart_remove">
                                       <a href="#" class="cart_remove_link">
                                          <i class="fa-solid fa-xmark"></i>
                                       </a>
                                    </div>
                                 </li>

                              </ul>
                              <div class="cart_total">
                                 <span class="cart_total_text">Total:
                                    <span class="cart_total_price">$50.00</span>
                                 </span>
                              </div>
                              <div class="view_cart cart_button">
                                 <a href="#">View Cart</a>
                              </div>
                              <div class="checkout cart_button">
                                 <a href="#">Check Out</a>
                              </div>
                           </div>
                           <div class="mini_cart_empty">
                              <h5>Your cart is currently empty.</h5>
                              <div class="checkout cart_button">
                                 <a href="#">Check Out</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <button class="navbar-toggler" data-toggle="collapse" data-target="#main-nav">
                        <span class="navbar-toggler-icon"></span>
                     </button>
                     <div id="main-nav" class="navbar-collapse collapse">
                        <ul class="navbar-nav">
                           <li class="nav-item ">
                              <a href="<?= BASE_URL . '/' ?>" class="nav-link ml-4 <?php if($params['page'] === 'home') echo "active" ?>">Home</a>
                           </li>
                           <li class="nav-item ">
                              <a href="<?= BASE_URL . '/product' ?>" class="nav-link ml-4 <?php if($params['page'] === 'product') echo "active" ?>">Products</a>
                           </li>
                           <li class="nav-item ">
                              <a href="<?= BASE_URL . '/faq' ?>" class="nav-link ml-4 <?php if($params['page'] === 'faq') echo "active" ?>" >FAQ</a>
                           </li>
                           <li class="nav-item ">
                              <a href="<?= BASE_URL . '/about' ?>" class="nav-link ml-4 <?php if($params['page'] === 'about') echo "active" ?>">About Us</a>
                           </li>
                           <li class="nav-item ">
                              <a href="<?= BASE_URL . '/contact' ?>" class="nav-link ml-4 <?php if($params['page'] === 'contact') echo "active" ?>">Contact Us</a>
                           </li>
                           <li class="nav-item dropdown">
                              <a class="nav-link ml-4 dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                 My Account
                              </a>
                              <ul class="dropdown-menu dropdown-menu-right mb-2">
                                 <li><a class="dropdown-item" href="#">My Account</a></li>
                                 <li><a class="dropdown-item" href="#">My Wishlist</a></li>
                                 <li>
                                    <hr class="dropdown-divider">
                                 </li>
                                 <li><a class="dropdown-item <?php if($params['page'] === 'login') echo "active" ?>" href="<?= BASE_URL . '/login' ?>">Login</a></li>
                                 <li><a class="dropdown-item <?php if($params['page'] === 'register') echo "active" ?>" href="<?= BASE_URL . '/register' ?>">Register</a></li>
                              </ul>
                           </li>
                        </ul>
                        <form action="#" class="form-search form-inline ml-lg-auto">
                           <input type="text" name="search" id="search" placeholder="Search here..." class="search-input form-control rounded-pill">
                           <button class="btn btn-search"><i class="search-icon fa-solid fa-magnifying-glass"></i></button>
                        </form>
                        <div class="cart-box d-none d-lg-block m-2">
                           <a href="#" class="cart-link btn">
                              <i class="fa-solid fa-cart-shopping"></i>
                              <span class="cart-notice">0</span>
                           </a>
                           <div class="mini_cart">
                              <div class="mini_cart_items">
                                 <ul class="cart_list">
                                    <li class="cart_item">
                                       <div class="cart_img_section">
                                          <a href="#" class="cart_img_link">
                                             <img src="https://cdn.shopify.com/s/files/1/0162/4018/1312/products/17_958b2620-266c-4cd9-be79-6c70e2a28889_small.jpg?v=1546406647" alt="cart_img_1" class="cart_img">
                                          </a>
                                       </div>
                                       <div class="cart_info">
                                          <a href="#" class="cart_title">Demo product title</a>
                                          <span class="mini_cart_qty">1X <span class="mini_cart_price">$50.00</span></span>
                                       </div>

                                       <div class="cart_remove">
                                          <a href="#" class="cart_remove_link">
                                             <i class="fa-solid fa-xmark"></i>
                                          </a>
                                       </div>
                                    </li>

                                 </ul>
                                 <div class="cart_total">
                                    <span class="cart_total_text">Total:
                                       <span class="cart_total_price">$50.00</span>
                                    </span>
                                 </div>
                                 <div class="view_cart cart_button">
                                    <a href="#">View Cart</a>
                                 </div>
                                 <div class="checkout cart_button">
                                    <a href="#">Check Out</a>
                                 </div>
                              </div>
                              <div class="mini_cart_empty">
                                 <h5>Your cart is currently empty.</h5>
                                 <div class="checkout cart_button">
                                    <a href="#">Check Out</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
               </div>
            </div>
         </div>
      </header>