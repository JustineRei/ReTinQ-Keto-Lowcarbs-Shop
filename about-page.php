<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>About Page</title>

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Gudea:ital,wght@0,400;0,700;1,400&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/images/favicon/apple-touch-icon.png">
                            <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/favicon/favicon-32x32.png">
                            <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/favicon/favicon-16x16.png">
                            <link rel="mask-icon" href="./assets/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
                            <meta name="msapplication-TileColor" content="#da532c">
                            <meta name="theme-color" content="#ffffff">
    
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="about-page.css">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/favicon/favicon-16x16.png">
    <link rel="mask-icon" href="./assets/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    

</head>
<body>

<?php include('header.php') ?>




<!-- About Section -->



<div class="about-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mx-auto col-md-10 text-center">
                <div class="about-text">
                    <h1>About us:</h1>
                    <h2 class="retinq-keto-shop">RETINQ KETO SHOP</h2>
                    <h4>We offer a wide range of keto and low-carb supplies from meals, essentials, pastries, drinks, and frozen goods. <br><br> You may stay and enjoy your goodies here, too. We have a few tables available. Come and visit us. <br><br> Enjoy eating out without the compromise. All items on the menu are definitely in! Thank you so much for shopping with us!</h4>
                    <button type="button" class="btn ">SHOP NOW</button>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="container">
   
        <div class="col-12 col-md-6 "> 
            <img class="wifeypic" src="images/wifepic.jpg">
            
            <div class="owner-text mt-2">
                <h5>Cherry Ann Zaragoza <br>Owner, RetinQ KETO SHOP</h5>
            </div>
        </div>
    </div>
</div>

<div class="bg image2"></div>



   


                        
                        


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
