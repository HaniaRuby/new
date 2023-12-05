<?php

if(isset($_GET['ip']))
$ad= $_GET['ip'];
else
$ad="";

include_once "controllers/userController.php";
include_once "models/user.php";

?>



<!-- /*
* Template Name: UntreeStore
* Template Author: Untree.co
* Author URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,400;0,700;1,700&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap"
    rel="stylesheet">


  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.min.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="css/aos.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.min.js"></script>

  <title>MYTHE</title>
</head>

<body>

  <div class="search-form" id="search-form">
    <form action="">
      <input type="search" class="form-control" placeholder="Enter keyword to search...">
      <button class="button">
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor"
          xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd"
            d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z" />
          <path fill-rule="evenodd"
            d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
        </svg>
      </button>
      <button class="button">
        <div class="close-search">
          <span class="icofont-close js-close-search"></span>
        </div>
      </button>

    </form>
  </div>

  <div class="site-mobile-menu">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close">
        <span class="icofont-close js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>



  <nav class="site-nav mb-5">
    <div class="sticky-nav js-sticky-header">

      <div class="container position-relative">
        <div class="site-navigation text-center dark">
          <a href="index.html" class="logo menu-absolute m-0"><img src="mythe.png" alt="LOGO" style=" height: 130px; margin-top: 70px;">
            <span class="text-primary"></span></a>
          <ul class="js-clone-nav pl-0 d-none d-lg-inline-block site-menu">
            <li><a href="index.html">Home</a></li>
            <li><a href="shop.html">Shop</a></li>
            <li class="active"><a href="cart.html">Cart</a></li>
          </ul>




          <div class="menu-icons">
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

          <!-- <a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none" data-toggle="collapse" data-target="#main-navbar">
             --><span></span>
          </a>

        </div>
      </div>
    </div>
  </nav>


  <div class="page-heading bg-light">
    <div class="container">
      <div class="row align-items-end text-center">
        <div class="col-lg-7 mx-auto">
          <h1>Cart</h1>
          <p class="mb-4"><a href="index.html">Home</a> / <strong>Cart</strong></p>
        </div>
      </div>
    </div>
  </div>

  <div id="cart">
    <div class="untree_co-section">
      <div class="container">
        <div class="row mb-5">
          <form class="col-md-12" method="post">
            <div class="site-blocks-table">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="product-thumbnail">Image</th>
                    <th class="product-name">Product</th>
                    <th class="product-price">Price</th>
                    <th class="product-quantity">Quantity</th>
                    <th class="product-total">Total</th>
                    <th class="product-remove">Remove</th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="item in cartItems" :key="item.id">
                    <td class="product-thumbnail">
                      <img :src="item.image" alt="Image" class="img-fluid">
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black">{{ item.name }}</h2>
                    </td>
                    <td>{{ item.price }}</td>
                    <td>
                      <div class="input-group mb-3" style="max-width: 120px;">
                        <div class="input-group-prepend">
                          <button class="btn btn-outline-black js-btn-minus" type="button"
                            @click="decrement(item)">&minus;</button>
                        </div>
                        <input type="text" class="form-control text-center" v-model="item.quantity" placeholder="1"
                          aria-label="Example text with button addon">

                        <div class="input-group-append">
                          <button class="btn btn-outline-black js-btn-plus" type="button"
                            @click="increment(item)">&plus;</button>
                        </div>
                      </div>

                    </td>
                    <td>{{ (item.price * item.quantity).toFixed(2) }}</td>
                    <td><a href="#" class="btn btn-black btn-sm" @click.prevent="removeItem(item)">X</a></td>
                  </tr>
                  <!-- 
                  <tr>
                    <td class="product-thumbnail">
                      <img src="images/products/bottoms-1-min.jpg" alt="Image" class="img-fluid">
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black">Polo Shirt</h2>
                    </td>
                    <td>$49.00</td>
                    <td>
                      <div class="input-group mb-3" style="max-width: 120px;">
                        <div class="input-group-prepend">
                          <button class="btn btn-outline-black js-btn-minus" type="button">&minus;</button>
                        </div>
                        <input type="text" class="form-control text-center" value="1" placeholder=""
                          aria-label="Example text with button addon" aria-describedby="button-addon1">
                        <div class="input-group-append">
                          <button class="btn btn-outline-black js-btn-plus" type="button">&plus;</button>
                        </div>
                      </div>

                    </td>
                    <td>$49.00</td>
                    <td><a href="#" class="btn btn-black btn-sm">X</a></td>
                  </tr>
 -->
                </tbody>
              </table>
            </div>
          </form>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="row mb-5">
              <div class="col-md-6 mb-3 mb-md-0">
                <button class="btn btn-black btn-sm btn-block">Update Cart</button>
              </div>
              <div class="col-md-6">
                <button class="btn btn-outline-black btn-sm btn-block"
                  onclick="window.location.href = 'shop.html'">Continue Shopping</button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <label class="text-black h4" for="coupon">Coupon</label>
                <p>Enter your coupon code if you have one.</p>
              </div>
              <div class="col-md-8 mb-3 mb-md-0">
                <input v-model="coupon" type="text" class="form-control py-3" id="coupon" placeholder="Coupon Code">
              </div>
              <div class="col-md-4">
                <button class="btn btn-black">Apply Coupon</button>
              </div>
            </div>
          </div>
          <div class="col-md-6 pl-5">
            <div class="row justify-content-end">
              <div class="col-md-7">
                <div class="row">
                  <div class="col-md-12 text-right border-bottom mb-5">
                    <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-6">
                    <span class="text-black">Subtotal</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black">${{ cartTotal.toFixed(2) }}</strong>
                  </div>
                </div>
                <div class="row mb-5">
                  <div class="col-md-6">
                    <span class="text-black">Total</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black">
                      <p>${{ cartTotal.toFixed(2) }}</p>
                    </strong>
                    <strong class="text-black" v-if="coupon == 'first'">
                      <p> 5% off</p>
                    </strong>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <button class="btn btn-black btn-lg py-3 btn-block" @click="proceedToCheckout">Proceed To
                      Checkout</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="untree_co-section bg-light">
      <div class="container">
        <div class="row align-items-stretch">
          <div class="col-12 col-sm-6 col-md-4 mb-3 mb-md-0">
            <div class="feature h-100">
              <div class="icon mb-4">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-truck" fill="currentColor"
                  xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd"
                    d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5v7h-1v-7a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .5.5v1A1.5 1.5 0 0 1 0 10.5v-7zM4.5 11h6v1h-6v-1z" />
                  <path fill-rule="evenodd"
                    d="M11 5h2.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5h-1v-1h1a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4.5h-1V5zm-8 8a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 1a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" />
                  <path fill-rule="evenodd" d="M12 13a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 1a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" />
                </svg>
              </div>
              <h3>Worldwide Delivery</h3>
              <p>Far far away, behind the word mountains, far from the countries.</p>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 mb-3 mb-md-0">
            <div class="feature h-100">
              <div class="icon mb-4">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-shield-lock" fill="currentColor"
                  xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd"
                    d="M5.443 1.991a60.17 60.17 0 0 0-2.725.802.454.454 0 0 0-.315.366C1.87 7.056 3.1 9.9 4.567 11.773c.736.94 1.533 1.636 2.197 2.093.333.228.626.394.857.5.116.053.21.089.282.11A.73.73 0 0 0 8 14.5c.007-.001.038-.005.097-.023.072-.022.166-.058.282-.111.23-.106.525-.272.857-.5a10.197 10.197 0 0 0 2.197-2.093C12.9 9.9 14.13 7.056 13.597 3.159a.454.454 0 0 0-.315-.366c-.626-.2-1.682-.526-2.725-.802C9.491 1.71 8.51 1.5 8 1.5c-.51 0-1.49.21-2.557.491zm-.256-.966C6.23.749 7.337.5 8 .5c.662 0 1.77.249 2.813.525a61.09 61.09 0 0 1 2.772.815c.528.168.926.623 1.003 1.184.573 4.197-.756 7.307-2.367 9.365a11.191 11.191 0 0 1-2.418 2.3 6.942 6.942 0 0 1-1.007.586c-.27.124-.558.225-.796.225s-.526-.101-.796-.225a6.908 6.908 0 0 1-1.007-.586 11.192 11.192 0 0 1-2.417-2.3C2.167 10.331.839 7.221 1.412 3.024A1.454 1.454 0 0 1 2.415 1.84a61.11 61.11 0 0 1 2.772-.815z" />
                  <path d="M9.5 6.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                  <path
                    d="M7.411 8.034a.5.5 0 0 1 .493-.417h.156a.5.5 0 0 1 .492.414l.347 2a.5.5 0 0 1-.493.585h-.835a.5.5 0 0 1-.493-.582l.333-2z" />
                </svg>
              </div>
              <h3>Secure Payments</h3>
              <p>Far far away, behind the word mountains, far from the countries.</p>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 mb-3 mb-md-0">
            <div class="feature h-100">
              <div class="icon mb-4">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-counterclockwise"
                  fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd"
                    d="M12.83 6.706a5 5 0 0 0-7.103-3.16.5.5 0 1 1-.454-.892A6 6 0 1 1 2.545 5.5a.5.5 0 1 1 .91.417 5 5 0 1 0 9.375.789z" />
                  <path fill-rule="evenodd"
                    d="M7.854.146a.5.5 0 0 0-.708 0l-2.5 2.5a.5.5 0 0 0 0 .708l2.5 2.5a.5.5 0 1 0 .708-.708L5.707 3 7.854.854a.5.5 0 0 0 0-.708z" />
                </svg>
              </div>
              <h3>Simple Returns</h3>
              <p>Far far away, behind the word mountains, far from the countries.</p>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- /.untree_co-section -->

    <div class="site-footer">


      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-5">
            <div class="widget mb-4">
              <h3 class="mb-2">About UntreeStore</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate modi cumque rem recusandae quaerat
                at asperiores beatae saepe repudiandae quam rerum aspernatur dolores et ipsa obcaecati voluptates libero
              </p>
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
            <p>Copyright &copy;
              <script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed with
              love by <a href="https://untree.co">Untree.co</a> <!-- License information: https://untree.co/license/ -->
            </p>

          </div>
        </div>
      </div> <!-- /.container -->
    </div> <!-- /.site-footer -->

    <div id="overlayer"></div>
    <div class="loader">
      <div class="spinner-border" role="status">
        <span class="sr-only">Loading...</span>
      </div>
    </div>
  </div>

  <script>
    const cartApp = new Vue({
      el: "#cart",
      data: {
        coupon: "",
        cartTotal: 0,
        cartItems: [
          // Your initial cart items data
          { id: 0, name: "Top Up T-Shirt", price: 49.00, quantity: 1, image: "images/products/jacket-1-min.jpg" },
          { id: 1, name: "Polo Shirt", price: 49.00, quantity: 1, image: "images/products/bottoms-1-min.jpg" }
        ]
      },
      methods: {
        increment(item) {
          const index = this.cartItems.indexOf(item);
          this.$set(this.cartItems, index, { ...item, quantity: item.quantity +1});
          this.updateCartTotal();
        },
        
        decrement(item) {
          const index = this.cartItems.indexOf(item);
          if (item.quantity > 1) {
            this.$set(this.cartItems, index, { ...item, quantity: item.quantity -1});
            this.updateCartTotal();
          }
        },
        removeItem(item) {
          // Implement remove item logic
          const itemIndex = this.cartItems.indexOf(item);
          if (itemIndex !== -1) {
            this.cartItems.splice(itemIndex, 1);
            this.updateCartTotal();
          }
        },
        updateCartTotal() {
          // Calculate the total based on the current cart items
          let total = 0;
          this.cartItems.forEach(item => {
            total = total + (item.price * item.quantity);
          });
          this.cartTotal = total;
        },
        proceedToCheckout() {
          // Create a data object to represent the cart items
          const cartData = {
            cartItems: this.cartItems,
          };
          // Convert the data object to a JSON string
          const cartDataJson = JSON.stringify(cartData);
          localStorage.setItem('cartData', cartDataJson);
          // Directly redirect to the checkout page
          window.location.href = 'checkout.html';
        },
        applyCoupon() {
          // Make an Axios POST request to send the coupon data to the server
          axios.post('/path/to/CartController.php', { coupon: this.coupon })
            .then(response => {
              // Handle the response from the server if needed
              console.log(response.data);
            })
            .catch(error => {
              // Handle any errors that occur during the request
              console.error(error);
            });
        }
      } // Close the methods object
    });
  </script>

</body>

</html>


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