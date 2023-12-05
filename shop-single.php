<?php
if(isset($_GET['ip']))
$ip= $_GET['ip'];
else
$ip="";

$id = $_GET['id'];

include_once "controllers/productController.php";

$pro = new ProductController();
$product = $pro->getProduct($id);

if ($product) {
    $name = $product['name'];
    $price = $product['price'];
    $desc = $product['desc'];
    $img = $product['img'];

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="MYTHE">
	<link rel="shortcut icon" href="favicon.png">

	<meta name="description" content="" />
	<meta name="keywords" content="" />

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,400;0,700;1,700&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">


	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/jquery.fancybox.min.css">
	<link rel="stylesheet" href="fonts/icomoon/style.css">
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
	<link rel="stylesheet" href="css/aos.css">
	<link rel="stylesheet" href="css/style.css">

	<title>MYTHE Store</title>
  <link rel="stylesheet" href="css/details-css.css">
</head>
<body>
    <nav class="site-nav mb-5">
        <div class="sticky-nav js-sticky-header">

            <div class="container position-relative">
                <div class="site-navigation text-center dark">
                    <a href="index.html" class="logo menu-absolute m-0"><img src="mythe.png" alt="LOGO" style=" height: 130px; margin-top: 70px;">
                        <span class="text-primary"></span></a>
                    <ul class="js-clone-nav pl-0 d-none d-lg-inline-block site-menu">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="shop.html">Shop</a></li>
                        <li><a href="cart.html">Cart</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>




                    <div class="menu-icons">

                        <!-- <a href="#" class="btn-custom-search" id="btn-search">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                                <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                            </svg>
                        </a> -->

                        <a href="login.html" class="user-profile">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M13 14s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002.002zM3.022 13h9.956a.274.274 0 0 0 .014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 0 0 .022.004zm9.974.056v-.002.002zM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            </svg>
                        </a>

                        <a href="cart.html" class="cart">
                            <span class="item-in-cart">2</span>
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                            </svg>
                        </a>

                    </div>

                    <a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none" data-toggle="collapse" data-target="#main-navbar">
                        <span></span>
                    </a>

                </div>
            </div>
        </div>
    </nav>

    <div id="app">
    <div class="product-details">
        <h1>{{ product.name }}</h1>
        <img :src="product.image" :alt="product.name">
        <p>{{ product.description }}</p>
        <b><p>Price: {{ product.price }}</p></b>
        <!-- You can add more details about the product here -->
        <form method="POST">
        <button id="addToCartBtn" style="border: groove; border-radius: 4px;border-color: white;">Add to Cart</button>
</form>

        <!-- Pop-up Message -->
        <div id="cartMessage" class="popup-message">
            Product added to cart!
        </div>
    </div>
    </div>

    <script src="js/vue.js"></script> <!-- Link to your JavaScript file -->
    <script>// Vue app
    const app = new Vue({
        el: '#app',
        data: {
        product: {
            name: '<?php echo $name; ?>',
            image: <?php echo $img; ?>,
            description: 'buy it now yo wont get your girl anyway',
            price: '<?php echo $price; ?>',
          // Add more properties as needed for your product details
        }
        },
    });
    </script>
    <div class="site-footer">


        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="widget mb-4">
                        <h3 class="mb-2">About MYTHE Store</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate modi cumque rem recusandae quaerat at asperiores beatae saepe repudiandae quam rerum aspernatur dolores et ipsa obcaecati voluptates libero</p>
                    </div>
                    <div class="widget">
                        <h3>Join our mailing list and receive exclusives</h3>
                        <form action="#" class="subscribe">
                            <div class="d-flex">
                                <input type="email" class="form-control" placeholder="Email address">
                                <input type="submit" class="btn btn-black" value="Subscribe">
                            </div>
                        </form>

                        
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="widget">
                        <h3>Help</h3> 
                        <ul class="list-unstyled">
                            <li><a href="#">Contact us</a></li>
                            <li><a href="#">Account</a></li>
                            <li><a href="#">Shipping</a></li>
                            <li><a href="#">Returns</a></li>
                            <li><a href="#">FAQ</a></li>   
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="widget">
                        <h3>About</h3>
                        <ul class="list-unstyled">
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Press</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">FAQ</a></li>   
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="widget">
                        <h3>Shop</h3>
                        <ul class="list-unstyled">
                            <li><a href="#">Store</a></li>
                            <li><a href="#">Gift Cards</a></li>
                            <li><a href="#">Student Discount</a></li>
                        </ul>
                    </div>
                </div>
                
            </div>


            <div class="row mt-5">
                <div class="col-12 text-center">
                    <ul class="list-unstyled social">
                        <li><a href="#"><span class="icon-facebook"></span></a></li>
                        <li><a href="#"><span class="icon-instagram"></span></a></li>
                        <li><a href="#"><span class="icon-linkedin"></span></a></li>
                        <li><a href="#"><span class="icon-twitter"></span></a></li>
                    </ul>
                </div>
                <div class="col-12 text-center copyright">
                    <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed with love by <a href="">MYTHE Store</a> <!-- License information: https://untree.co/license/ -->
                    </p>

                </div>
            </div>
        </div> 
    </div> 

    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
</div>

<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/aos.js"></script>
<script src="js/custom.js"></script>

</body>
</html>
