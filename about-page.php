<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Page</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gudea:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gudea:ital,wght@0,400;0,700;1,400&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="about-page.css">
   
</head>
<body>

    <!-- Bootstrap Navbar -->
    <nav>
      <!-- Navbar -->
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light  flex-column border-0  ">
      <div class="container-fluid">
          <div class="w-100">
              <div class="d-flex justify-content-between align-items-center flex-wrap">
  
                  <!-- Logo-->
                  <a class="navbar-brand fw-bold fs-3 m-0 p-0 flex-shrink-0 order-0" href="./index.html">
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
                          <a class="nav-link text-light" href="./login.html">
                              Account
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
                                  <h6 class="fw-bolder m-0">Cart Summary (2 items)</h6>
                                  <i class="ri-close-circle-line text-muted ri-lg cursor-pointer btn-close-cart"></i>
                              </div>
                              <!-- / Cart Header-->
                          
                              <!-- Cart Items-->
                              <div>
                          
                                  <!-- Cart Product-->
                                  <div class="row mx-0 py-4 g-0 border-bottom">
                                      <div class="col-2 position-relative">
                                          <picture class="d-block ">
                                              <img class="img-fluid" src="./assets/images/products/product-cart-1.jpg" alt="HTML Bootstrap Template by Pixel Rocket">
                                          </picture>
                                      </div>
                                      <div class="col-9 offset-1">
                                          <div>
                                              <h6 class="justify-content-between d-flex align-items-start mb-2">
                                                  Nike Air VaporMax 2021
                                                  <i class="ri-close-line ms-3"></i>
                                              </h6>
                                              <span class="d-block text-muted fw-bolder text-uppercase fs-9">Size: 9 / Qty: 1</span>
                                          </div>
                                          <p class="fw-bolder text-end text-muted m-0">$85.00</p>
                                      </div>
                                  </div>
                                  <!-- Cart Product-->
                                  <div class="row mx-0 py-4 g-0 border-bottom">
                                      <div class="col-2 position-relative">
                                          <picture class="d-block ">
                                              <img class="img-fluid" src="./assets/images/products/product-cart-2.jpg" alt="HTML Bootstrap Template by Pixel Rocket">
                                          </picture>
                                      </div>
                                      <div class="col-9 offset-1">
                                          <div>
                                              <h6 class="justify-content-between d-flex align-items-start mb-2">
                                                  Nike ZoomX Vaporfly
                                                  <i class="ri-close-line ms-3"></i>
                                              </h6>
                                              <span class="d-block text-muted fw-bolder text-uppercase fs-9">Size: 11 / Qty: 1</span>
                                          </div>
                                          <p class="fw-bolder text-end text-muted m-0">$125.00</p>
                                      </div>
                                  </div>
                              </div>
                              <!-- /Cart Items-->
                          
                              <!-- Cart Summary-->
                              <div>
                                  <div class="pt-3">
                                      <div class="d-flex flex-column flex-md-row justify-content-md-between align-items-md-start mb-4 mb-md-2">
                                          <div>
                                              <p class="m-0 fw-bold fs-5">Grand Total</p>
                                              <span class="text-muted small">Inc $45.89 sales tax</span>
                                          </div>
                                          <p class="m-0 fs-5 fw-bold">$422.99</p>
                                      </div>
                                  </div>
                                  <a href="./cart.html" class="btn btn-outline-dark w-100 text-center mt-4 " role="button">View Cart</a>
                                  <a href="./checkout.html" class="btn btn-dark w-100 text-center mt-2" role="button">Proceed To Checkout</a>
                              </div>
                              <!-- / Cart Summary-->
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
                          <a class="nav-link text-white" href="index.html" role="button">
                            Home
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-white" href="./category.html" role="button">
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
                                                    <h6 class="dropdown-heading">Coats & Jackets</h6>
                                                    <ul class="list-unstyled">
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="Products\Cakes.html" target="displayContent">Cakes</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="Products\Meat.html" target="displayContent">meat</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="Products\Sauce.html" target="displayContent">sauces</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="Products\Dairy.html" target="displayContent">Dairy</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html" target="displayContent">Casual Jackets</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html" target="displayContent">Windproof Jackets</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html" target="displayContent">Breathable Jackets</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html" target="displayContent">Cleaning & Proofing</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item dropdown-link-all" href="./category.html">View All</a></li>
                                                    </ul>
                                                </div>
                                                <!-- / menu row-->
                                            
                                                <!-- menu row-->
                                                <div class="col">
                                                    <h6 class="dropdown-heading">Insulated</h6>
                                                    <ul class="list-unstyled">
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">Insulated Jackets</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">Bodywarmers</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">Parkas</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">Baselayers & Thermals</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">Winter Hats</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">Scarves & Neck</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">Gloves & Mitts</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">Accessories</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item dropdown-link-all" href="./category.html">View All</a></li>
                                                    </ul>
                                                </div>
                                                <!-- / menu row-->
                                            
                                                <!-- menu row-->
                                                <div class="d-none d-xxl-block col">
                                                    <h6 class="dropdown-heading">Footwear</h6>
                                                    <ul class="list-unstyled">
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">Lifestyle & Casual</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">Walking Shoes</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">Running Shoes</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">Military Boots</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">Fabric Walking Boots</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">Leather Walking Boots</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">Wellies</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">Winter Footwear</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item dropdown-link-all" href="./category.html">View All</a></li>
                                                    </ul>
                                                </div>
                                                <!-- / menu row-->  
                                                
                                                <!-- menu row-->
                                                <div class="col">
                                                    <h6 class="dropdown-heading text-danger">Special Offers</h6>
                                                    <ul class="list-unstyled">
                                                        <li class="dropdown-list-item"><a class="dropdown-item text-danger" href="./category.html">Insulated Jackets</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item text-danger" href="./category.html">Bodywarmers</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item text-danger" href="./category.html">Parkas</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item text-danger" href="./category.html">Baselayers & Thermals</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item text-danger" href="./category.html">Winter Hats</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item text-danger" href="./category.html">Scarves & Neck</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item text-danger" href="./category.html">Gloves & Mitts</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item text-danger" href="./category.html">Accessories</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item text-danger dropdown-link-all" href="./category.html">View All</a></li>
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
                            <a class="nav-link text-white" href="./category.html" role="button">
                              Contact us
                            </a>
                          </li>
                              
                            
                                               <!-- / Menu-->
  
                  </div>

              </div>
          </div>
      </div>
  </nav>
  

    <!-- About Section -->
    <div class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mx-auto text-center">
                    <div class="about-text">
                        <h1>About us:</h1>
                        <h2 class="retinq-keto-shop">RETINQ KETO SHOP</h2>
                        <h4>We offer a wide range of keto and low-carb supplies from meals, essentials, pastries, drinks, and frozen goods. <br><br> You may stay and enjoy your goodies here, too. We have a few tables available. Come and visit us. <br><br> Enjoy eating out without the compromise. All items on the menu are definitely in! Thank you so much for shopping with us!</h4>
                        <button type="button" class="btn btn-light">SHOP NOW</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
                          <div class="row justify-content-center">
                            <div class="col-12 col-md-6 ">
                              <!-- Correcting the image path as necessary -->
                              <img class="wifeypic" src="images/wifepic.jpg">
                              
                              <div class="owner-text mt-5">
                                <h5>Cherry Ann Zaragoza <br>Owner, RetinQ KETO SHOP</h5>
                              </div>
                            </div>
                          </div>
                        </div>


    <!-- Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        // Your existing JavaScript code
        window.addEventListener("scroll", function(){
            var header = document.querySelector("nav");
            header.classList.toggle("sticky", window.scrollY > 0);
        });
    </script>
</body>
</html>
