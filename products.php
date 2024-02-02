<?php
//establish the connection to database, and start the session
require("includes/common.php");
?>

<!--Specifies document type is html-->
<!DOCTYPE html>
<!--Specifies the language as English-->
<html lang="en">

<head>
    <!--instructs browser on how to control the page's dimensions and scaling-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Title of products page-->
    <title>Products | Life Style Store</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <?php
        include 'includes/header.php';
        include 'includes/check-if-added.php';
        ?>
    <div class="container" id="content">
        <!-- Jumbotron Header -->
        <div class="jumbotron home-spacer" id="products-jumbotron">
            <h1>Welcome to our fishing equipment shop!</h1>
            <p>We have the best fishing rods, fishing reels and bait for you. No need to struggle, we have it all in one place.</p>

        </div>
        <hr>

        <div class="row text-center" id="cameras">
            <div class="col-md-3 col-sm-6 home-feature">
                <div class="thumbnail">
                    <img src="img/joranpancing1.jpeg" alt="">
                    <div class="caption">
                        <h3>Joran sea pishing</h3>
                        <p>Rp 250.000 </p>
                        <!--User has to login to purchase the items-->
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                        <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to
                            cart</a>
                        <?php
                                }
                            }
                            ?>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 home-feature">
                <div class="thumbnail">
                    <img src="img/joranpancing 4.jpeg" alt="">
                    <div class="caption">
                        <h3>Ballista Ice </h3>
                        <p>Rp 230.000 </p>
                        <!--User has to login to purchase the items-->
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                        <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to
                            cart</a>
                        <?php
                                }
                            }
                            ?>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 home-feature">
                <div class="thumbnail">
                    <img src="img/joranpancing 5.jpeg" alt="">
                    <div class="caption">
                        <h3>REEL green peace</h3>
                        <p>Rp 190.000</p>
                        <!--User has to login to purchase the items-->
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                        <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to
                            cart</a>
                        <?php
                                }
                            }
                            ?>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 home-feature">
                <div class="thumbnail">
                    <img src="img/joranpancing6.jpeg" alt="">
                    <div class="caption">
                        <h3>Black montera</h3>
                        <p>Rp 250.000</p>
                        <!--User has to login to purchase the items-->
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                        <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to
                            cart</a>
                        <?php
                                }
                            }
                            ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row text-center" id="watches">
            <div class="col-md-3 col-sm-6 home-feature">
                <div class="thumbnail">
                    <img src="img/ril pancing 2.jpeg" alt="">
                    <div class="caption">
                        <h3>Ememol LC 2000 JS </h3>
                        <p>Rp 150.000 </p>
                        <!--User has to login to purchase the items-->
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(5)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                        <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to
                            cart</a>
                        <?php
                                }
                            }
                            ?>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 home-feature">
                <div class="thumbnail">
                    <img src="img/ril pancing 3.jpeg" alt="">
                    <div class="caption">
                        <h3>Thickened body</h3>
                        <p>Rp 200.000 </p>
                        <!--User has to login to purchase the items-->
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                        <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to
                            cart</a>
                        <?php
                                }
                            }
                            ?>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 home-feature">
                <div class="thumbnail">
                    <img src="img/ril pancing 4.jpeg" alt="">
                    <div class="caption">
                        <h3>Gtohda</h3>
                        <p>Rp 180.000 </p>
                        <!--User has to login to purchase the items-->
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(7)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                        <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to
                            cart</a>
                        <?php
                                }
                            }
                            ?>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 home-feature">
                <div class="thumbnail">
                    <img src="img/ril pancing 5.jpeg" alt="">
                    <div class="caption">
                        <h3>baitchasting</h3>
                        <p>Rp 200.000 </p>
                        <!--User has to login to purchase the items-->
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(8)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                        <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to
                            cart</a>
                        <?php
                                }
                            }
                            ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row text-center" id="shirts">
            <div class="col-md-3 col-sm-6 home-feature">
                <div class="thumbnail">
                    <img src="img/ril pancing 6.jpeg" alt="">
                    <div class="caption">
                        <h3>sienna</h3>
                        <p>Rp 160.000 </p>
                        <!--User has to login to purchase the items-->
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(9)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                        <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to
                            cart</a>
                        <?php
                                }
                            }
                            ?>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 home-feature">
                <div class="thumbnail">
                    <img src="img/umpan pancing 4.jpeg" alt="">
                    <div class="caption">
                        <h3>minnow lure</h3>
                        <p>Rp 20.000</p>
                        <!--User has to login to purchase the items-->
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(10)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                        <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to
                            cart</a>
                        <?php
                                }
                            }
                            ?>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 home-feature">
                <div class="thumbnail">
                    <img src="img/umpan pancing 1.jpeg" alt="">
                    <div class="caption">
                        <h3>wisin</h3>
                        <p>Rp 15.000</p>
                        <!--User has to login to purchase the items-->
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(11)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                        <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to
                            cart</a>
                        <?php
                                }
                            }
                            ?>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 home-feature">
                <div class="thumbnail">
                    <img src="img/umpan pancing 2.jpeg" alt="">
                    <div class="caption">
                        <h3>Lure sequin</h3>
                        <p>Rp 30.000</p>
                        <!--User has to login to purchase the items-->
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(12)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                        <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to
                            cart</a>
                        <?php
                                }
                            }
                            ?>
                        </a>
                    </div>
                </div>
            </div>

        </div>
        <hr>
    </div>

    <?php include("includes/footer.php"); ?>
</body>

</html>