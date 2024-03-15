<?php include("Config.php");
   session_start();
   ?>
<!doctype html>
<html lang="en">

<head>
   <!-- Page Meta Tags-->
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="">
   <meta name="author" content="">
   <meta name="keywords" content="">
 
   <!-- Custom Google Fonts-->
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;600&family=Roboto:wght@300;400;700&display=auto"
     rel="stylesheet">
 
   <!-- Favicon TESTINGGGGGGGGGGGGGGGasdfasdfasdfasdfsasdfasdfasdfsad-->
   <link rel="apple-touch-icon" sizes="180x180" href="./assets/images/favicon/apple-touch-icon.png">
   <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/favicon/favicon-32x32.png">
   <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/favicon/favicon-16x16.png">
   <link rel="mask-icon" href="./assets/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
   <meta name="msapplication-TileColor" content="#da532c">
   <meta name="theme-color" content="#ffffff">
 
   <!-- Vendor CSS -->
   <link rel="stylesheet" href="Products/assets/css/libs.bundle.css" />
 
   <!-- Main CSS -->
   <link rel="stylesheet" href="Products/assets/css/theme.bundle.css" />
   <link rel="stylesheet" href="Main-Products.css">
 
   <!-- Fix for custom scrollbar if JS is disabled-->
   <noscript>
     <style>
       /**
           * Reinstate scrolling for non-JS clients
           */
       .simplebar-content-wrapper {
         overflow: auto;
       }
     </style>
   </noscript>
   <style>
    html{
        overflow: hidden !important;
    }

   </style>

</head>
<body>
    <nav>
      <!-- Navbar -->
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light  flex-column border-0  ">
      <div class="container-fluid">
          <div class="w-100">
              <div class="d-flex justify-content-between align-items-center flex-wrap">
  
                  <!-- Logo-->
                  <a class="navbar-brand fw-bold fs-3 m-0 p-0 flex-shrink-0 order-0" href="index.php">
                      <div class="d-flex align-items-center">
                          <img src="images\logo.png">
                      </div>
                  </a>
                  <!-- / Logo-->
  
                  <!-- Navbar Icons-->
                  <ul class="list-unstyled mb-0 d-flex align-items-center order-1 order-lg-2 nav-sidelinks">
  
                      <!-- Mobile Nav Toggler-->
                      <li class="d-lg-none">
                          <span class="nav-link  d-flex align-items-center cursor-pointer text-light" data-bs-toggle="collapse"
                              data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                              aria-label="Toggle navigation"><i class="ri-menu-line ri-lg me-1  text-light"></i> Menu</span>
                      </li>
                      <!-- /Mobile Nav Toggler-->
  
                      <!-- Navbar Search-->
                      <li class="d-none d-sm-block">
                          <span class="nav-link text-light search-trigger cursor-pointer">Search</span>
  
                          <!-- Search navbar overlay-->
                          <div class="navbar-search d-none">
                              <div class="input-group mb-3 h-100">
                                  <span class="input-group-text px-4 bg-transparent border-0"><i
                                          class="ri-search-line ri-lg"></i></span>
                                  <input type="text" class="form-control text-body bg-transparent border-0"
                                      placeholder="Enter your search terms...">
                                  <span
                                      class="input-group-text px-4 cursor-pointer disable-child-pointer close-search bg-transparent border-0"><i
                                          class="ri-close-circle-line ri-lg"></i></span>
                              </div>
                          </div>
                          <div class="search-overlay"></div>
                          <!-- / Search navbar overlay-->
  
                      </li>
                      <!-- /Navbar Search-->
  
                      <!-- Navbar Login-->
                      <li class="ms-1 d-none d-lg-inline-block  ">
                          <a class="nav-link text-light" href="login.php">
                              Login
                          </a>
                      </li>
                      <!-- /Navbar Login-->
  
                      <!-- Navbar Cart Icon-->
                      <li class="ms-1 d-inline-block position-relative dropdown-cart">
                          <button class="nav-link me-0 disable-child-pointer border-0 p-0 bg-transparent text-light"
                              type="button ">
                              Bag (2)
                          </button>
                          <div class="cart-dropdown dropdown-menu">
                          
                              <!-- Cart Header-->
                              <div class="d-flex justify-content-between align-items-center border-bottom pt-3 pb-4">
                                  <h6 class="fw-bolder m-0">Cart Summary</h6>
                                  <i class="ri-close-circle-line text-muted ri-lg cursor-pointer btn-close-cart"></i>
                              </div>
                              <!-- / Cart Header-->
                          
                              <!-- Cart Items-->
                              <div>
                          
                                 
                            </div>
                          
  
                      </li>
                      <!-- /Navbar Cart Icon-->
  
                  </ul>
                  <!-- Navbar Icons-->                
  
                  <!-- Main Navigation-->
                  <div class="flex-shrink-0 collapse navbar-collapse navbar-collapse-black w-auto flex-grow-1 order-2 order-lg-1"
                      id="navbarNavDropdown">

                      <!-- Menu-->
                      <ul class="navbar-nav mx-auto mb-2 mb-lg-0  ">
                        <li class="nav-item">
                          <a class="nav-link text-white" href="index.php" role="button">
                            Home
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-white" href="about-page.php" role="button">
                            About Us
                          </a>
                        </li>
                          <li class="nav-item dropdown dropdown position-static">
                            <a class="nav-link dropdown-toggle text-white"   href="Products\All_Products.html" target="displayContent" role="button"  aria-expanded="false">
                              Products
                            </a>
                              <!-- Menswear dropdown menu-->
                              <div class="dropdown-menu dropdown-megamenu">
                                <div class="container-fluid">
                                    <div class="row g-0 g-lg-3">
                                        <!-- Menswear Dropdown Menu Links Section-->
                                        <div class="col col-lg-8 py-lg-5">
                                            <div class="row py-3 py-lg-0 flex-wrap gx-4 gy-6">
                                                <!-- menu row-->
                                                <div class="col">
                                                    <h6 class="dropdown-heading">Breads and Pastries</h6>
                                                    <ul class="list-unstyled">
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="Products\Cakes.php" target="displayContent">Cakes</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="Products\Bread.php" target="displayContent">Bread</a></li>
                                                        
                                                       
                                                        
                                                        <li class="dropdown-list-item"><a class="dropdown-item dropdown-link-all" href="./category.html">View All</a></li>
                                                    </ul>
                                                </div>
                                                <!-- / menu row-->
                                            
                                                <!-- menu row-->
                                                <div class="col">
                                                    <h6 class="dropdown-heading">General Goods</h6>
                                                    <ul class="list-unstyled">
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="Products\Meat.php" target="displayContent">Meat</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="Products\Sauce.php" target="displayContent">Sauce & Spread</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="Products\Pasta.php" target="displayContent">Pasta</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item dropdown-link-all" href="./category.html">View All</a></li>
                                                    </ul>
                                                </div>
                                                <!-- / menu row-->
                                            
                                                <!-- menu row-->
                                                <div class="d-none d-xxl-block col">
                                                    <h6 class="dropdown-heading">Snacks</h6>
                                                    <ul class="list-unstyled">
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="Products\Dairy.php" target="displayContent">Desserts</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="Products\Drinks.php" target="displayContent">Drinks</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="Products\Grains.php" target="displayContent">Grains</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="Products\chips.php" target="displayContent">Chips</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item dropdown-link-all" href="./category.html">View All</a></li>
                                                    </ul>
                                                </div>
                                                <!-- / menu row-->  
                                                
                                                <!-- menu row-->
                                                <div class="col">
                                                    <h6 class="dropdown-heading">Another category</h6>
                                                    <ul class="list-unstyled">
                                                        
                                                        <li class="dropdown-list-item"><a class="dropdown-ite dropdown-link-all" href="./category.html">View All</a></li>
                                                    </ul>
                                                </div>
                                                <!-- / menu row-->      
                                            </div>
                                            
                                            <div class="align-items-center justify-content-between mt-5 d-none d-lg-flex">
                                                <div class="me-5 f-w-100">
                                                    <a class="d-block" href="./category.html">
                                                        <picture>
                                                            <img class="img-fluid d-table mx-auto" src="Products\assets\images\products\banners\banner.png" alt="">
                                                        </picture>
                                                    </a>
                                                </div>
                                                <div class="me-5 f-w-100">
                                                    <a class="d-block" href="./category.html">
                                                        <picture>
                                                            <img class="img-fluid d-table mx-auto" src="Products\assets\images\products\banners\banner1.png" alt="">
                                                        </picture>
                                                    </a>
                                                </div>
                                                <div class="me-5 f-w-100">
                                                    <a class="d-block" href="./category.html">
                                                        <picture>
                                                            <img class="img-fluid d-table " src="Products\assets\images\products\banners\banner2.png" alt="">
                                                        </picture>
                                                    </a>
                                                </div>
                                                
                                            </div>                  </div>
                                        <!-- /Menswear Dropdown Menu Links Section-->
                      
                                        <!-- Menswear Dropdown Menu Images Section-->
                                        <div class="col-lg-4 d-none d-lg-block">
                                            <div class="vw-50 border-start h-100 position-absolute"></div>
                                            <div class="py-lg-5 position-relative z-index-10 px-lg-4">
                                                <div class="row g-4">
                                                    <div class="col-12 col-md-6">
                                                        <div class="card justify-content-center d-flex align-items-center bg-transparent">
                                                            <picture class="w-100 d-block mb-2 mx-auto">
                                                                <img class="w-100 rounded" title="" src="Products\assets\images\products\Cakes\cake2.jpg" alt="HTML Bootstrap Template by Pixel Rocket">
                                                            </picture>
                                                            <a class="fw-bolder link-cover" href="./category.html">Latest Arrivals</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="card justify-content-center d-flex align-items-center bg-transparent">
                                                            <picture class="w-100 d-block mb-2 mx-auto">
                                                                <img class="w-100 rounded" title="" src="Products\assets\images\products\Meat\jhin.jpg" alt="HTML Bootstrap Template by Pixel Rocket">
                                                            </picture>
                                                            <a class="fw-bolder link-cover" href="./category.html">Accessories</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="card justify-content-center d-flex align-items-center bg-transparent">
                                                            <picture class="w-100 d-block mb-2 mx-auto">
                                                                <img class="w-100 rounded" title="" src="Products\assets\images\products\Sauce\7k islands dressing.jpg" alt="HTML Bootstrap Template by Pixel Rocket">
                                                            </picture>
                                                            <a class="fw-bolder link-cover" href="./category.html">T-Shirts</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="card justify-content-center d-flex align-items-center bg-transparent">
                                                            <picture class="w-100 d-block mb-2 mx-auto">
                                                                <img class="w-100 rounded" title="" src="Products\assets\images\products\Sauce\Pizzapepperoni.jpg" alt="HTML Bootstrap Template by Pixel Rocket">
                                                            </picture>
                                                            <a class="fw-bolder link-cover" href="./category.html">Jackets</a>
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                            </div>
                                        </div>
                                        <!-- Menswear Dropdown Menu Images Section-->
                                    </div>
                                </div>
                            </div>
                            <!-- / Menswear dropdown menu-->
                          </li>
                          
                          <li class="nav-item">
                            <a class="nav-link text-white" href="contact.php" role="button">
                              Contact us
                            </a>
                          </li>
                              
                            
                                               <!-- / Menu-->
  
                  </div>

              </div>
          </div>
      </div>
  </nav>
  <!-- / Navbar-->    <!-- / Navbar-->








<section class="reviewer-content ">
    <iframe src="Products\All_Products.php" name="displayContent" class="iframe-Content-Display">


    </iframe>
  </section>











 


  <script src="Products\assets\js\theme.bundle.js"></script>
    
  <!-- Theme JS -->
  <script src="Products\assets\js\vendor.bundle.js"></script>

</body>

</html>