<?php
session_start();
if($_SESSION['username'])
{
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="./images/FavIcon.jpg" type="image/x-icon">
    <title>Pill &mdash; Point</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/Home.css">

</head>

<body>
    <div class="site-wrap">


        <div class="site-navbar py-2">

            <div class="search-wrap">
                <div class="container">
                    <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
                    <form action="#" method="post">
                        <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
                    </form>
                </div>
            </div>

            <div class="container">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="logo">
                        <div class="site-logo">
                            <a href="Home.php" class="js-logo-clone">pill &mdash; point</a>
                        </div>
                    </div>
                    <div class="main-nav d-none d-lg-block">
                        <nav class="site-navigation text-right text-md-center" role="navigation">
                            <ul class="site-menu js-clone-nav d-none d-lg-block">
                                <li><a href="Home.php">Home</a></li>
                                <li class="active"><a href="store.php">Store</a></li>
                                <li><a href="about.php">About</a></li>
                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                        </nav>
                    </div>


                    <div class="icons">
                        <a href="#" class="icons-btn d-inline-block js-search-open"><span
                                class="icon-search"></span></a>
                        <?php
        $count=0;
        if(isset($_SESSION['cart']))
        {
          $count=count($_SESSION['cart']);
        }

     ?>
                        <a href="cart.php" class="icons-btn d-inline-block bag">
                            <span class="icon-shopping-bag">(<?php echo$count; ?>)</span> </a>

                        <img src="images/user.png" class="user-pic" onclick="toggleMenu()">
                    </div>
                    <div class="sub-menu-wrap" id="subMenu">
                        <div class="sub-menu">
                            <div class="user-info">
                                <img src="images/user.png">
                                <h3> <?php  echo $_SESSION['username']; ?> </h3>
                            </div>
                            <hr>

                            <a href="#" class="sub-menu-link">
                                <img src="images/profile.png">
                                <p>Edit Profile</p>
                                <span> > </span>
                            </a>

                            <a href="#" class="sub-menu-link">
                                <img src="images/privacy.png">
                                <p>Privacy & Security</p>
                                <span> > </span>
                            </a>

                            <a href="#" class="sub-menu-link">
                                <img src="images/help.png">
                                <p>Help & Support</p>
                                <span> > </span>
                            </a>

                            <a href="logout.php" class="sub-menu-link">
                                <img src="images/logout.png">
                                <p>Logout</p>
                                <span> > </span>
                            </a>

                        </div>
                        <script>
                        let subMenu = document.getElementById("subMenu");

                        function toggleMenu() {
                            subMenu.classList.toggle("open-menu");
                        }
                        </script>
                    </div>
                    <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span
                            class="icon-menu"></span></a>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-light py-3">
        <div class="col-md-12 mb-0"><a href="Home.php">Home</a> <span class="mx-2 mb-0">/</span> <strong
                class="text-black">Store</strong></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="py-2">
                    <form action="manage_cart.php" method="POST">
                        <div class="card" style="width: 15rem;">
                            <img src="images/product_01.png" class="card-img-top">
                            <div class="card-body text-center">
                                <h3 class="card-title">Bioderma</h3>
                                <p class="card-text">price:Rs.1800</p>
                                <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add to cart</button>
                                <input type="hidden" name="Item_Name" value="Bioderma">
                                <input type="hidden" name="Price" value="1800">
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="py-2">
                    <form action="manage_cart.php" method="POST">
                        <div class="card" style="width: 15rem;">
                            <img src="images/product_02.png" class="card-img-top">
                            <div class="card-body text-center">
                                <h3 class="card-title">Chanca Piedra</h3>
                                <p class="card-text">price:Rs.2570</p>
                                <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add to cart</button>
                                <input type="hidden" name="Item_Name" value="Chanca Piedra">
                                <input type="hidden" name="Price" value="2570">
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="py-2">
                    <form action="manage_cart.php" method="POST">
                        <div class="card" style="width: 15rem;">
                            <img src="images/product_03.png" class="card-img-top">
                            <div class="card-body text-center">
                                <h3 class="card-title">Umcka Cold Care</h3>
                                <p class="card-text">price:Rs.3100</p>
                                <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add to cart</button>
                                <input type="hidden" name="Item_Name" value="Umcka Cold Care">
                                <input type="hidden" name="Price" value="3100">
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="py-2">
                    <form action="manage_cart.php" method="POST">
                        <div class="card" style="width: 15rem;">
                            <img src="images/product_04.png" class="card-img-top">
                            <div class="card-body text-center">
                                <h3 class="card-title">CetylPure</h3>
                                <p class="card-text">price:Rs.1250</p>
                                <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add to cart</button>
                                <input type="hidden" name="Item_Name" value="CetylPure">
                                <input type="hidden" name="Price" value="1250">
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-lg-3">
                <div class="py-2">
                    <form action="manage_cart.php" method="POST">
                        <div class="card" style="width: 15rem;">
                            <img src="images/product_05.png" class="card-img-top">
                            <div class="card-body text-center">
                                <h3 class="card-title">CLA Core</h3>
                                <p class="card-text">price:Rs.1250</p>
                                <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add to cart</button>
                                <input type="hidden" name="Item_Name" value="CLA Core">
                                <input type="hidden" name="Price" value="1250">
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="py-2">
                    <form action="manage_cart.php" method="POST">
                        <div class="card" style="width: 15rem;">
                            <img src="images/product_06.png" class="card-img-top">
                            <div class="card-body text-center">
                                <h3 class="card-title">Poo-Pourri</h3>
                                <p class="card-text">price:Rs.599</p>
                                <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add to cart</button>
                                <input type="hidden" name="Item_Name" value="Poo-pourri">
                                <input type="hidden" name="Price" value="599">
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="py-2">
                    <form action="manage_cart.php" method="POST">
                        <div class="card" style="width: 15rem;">
                            <img src="images/product_03.png" class="card-img-top">
                            <div class="card-body text-center">
                                <h3 class="card-title">Bioderma</h3>
                                <p class="card-text">price:Rs.250</p>
                                <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add to cart</button>
                                <input type="hidden" name="Item_Name" value="Bioderma">
                                <input type="hidden" name="Price" value="450">
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="py-2">
                    <form action="manage_cart.php" method="POST">
                        <div class="card" style="width: 15rem;">
                            <img src="images/product_04.png" class="card-img-top">
                            <div class="card-body text-center">
                                <h3 class="card-title">Bioderma</h3>
                                <p class="card-text">price:Rs.250</p>
                                <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add to cart</button>
                                <input type="hidden" name="Item_Name" value="Bioderma">
                                <input type="hidden" name="Price" value="450">
                            </div>
                        </div>
                    </form>
                </div>
            </div>


        </div>


    </div>











    <div class="site-section bg-secondary bg-image" style="background-image: url('images/bg_2.jpg');">
        <div class="container">
            <div class="row align-items-stretch">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <a href="#" class="banner-1 h-100 d-flex" style="background-image: url('images/bg_1.jpg');">
                        <div class="banner-1-inner align-self-center">
                            <h2>Pharma Products</h2>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae ex ad minus rem odio
                                voluptatem.
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <a href="#" class="banner-1 h-100 d-flex" style="background-image: url('images/bg_2.jpg');">
                        <div class="banner-1-inner ml-auto  align-self-center">
                            <h2>Rated by Experts</h2>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae ex ad minus rem odio
                                voluptatem.
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">

                    <div class="block-7">
                        <h3 class="footer-heading mb-4">About Us</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quae reiciendis distinctio
                            voluptates
                            sed dolorum excepturi iure eaque, aut unde.</p>
                    </div>

                </div>
                <div class="col-lg-3 mx-auto mb-5 mb-lg-0">
                    <h3 class="footer-heading mb-4">Quick Links</h3>
                    <ul class="list-unstyled">
                        <li><a href="#">Supplements</a></li>
                        <li><a href="#">Vitamins</a></li>
                        <li><a href="#">Diet &amp; Nutrition</a></li>
                        <li><a href="#">Tea &amp; Coffee</a></li>
                    </ul>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="block-5 mb-5">
                        <h3 class="footer-heading mb-4">Contact Info</h3>
                        <ul class="list-unstyled">
                            <li class="address">203 Fake St. Mountain View, San Francisco, California, USA</li>
                            <li class="phone"><a href="tel://23923929210">+2 392 3929 210</a></li>
                            <li class="email">emailaddress@domain.com</li>
                        </ul>
                    </div>


                </div>
            </div>
            <div class="row pt-5 mt-5 text-center">
                <div class="col-md-12">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>
                        document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made
                        with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com"
                            target="_blank" class="text-primary">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>

            </div>
        </div>
    </footer>
    </div>
</body>

</html>

<?php
}
  else{
    header('location:index.html');
  }

?>