<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ecommerce</title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/design.css">
</head>
<body>
    
    <div id="top">

        <div class="container">
            <div class="col-md-6 offer">
                <a href="#" class="btn btn-success btn sm">welcome</a>
                <a href="#">4 Items in your card</a>
            </div>
                <div class="col-md-6">
                    <ul class="menu">
                       <li><a href="customer_register.php">Register</a></li>
                       <li><a href="checkout.php">My Account</a></li>
                       <li><a href="cart.php">Go To Card</a></li>
                       <li><a href="checkout.php">Login</a></li>
                    </ul>
                </div>
        </div>
    </div>    

    <div id="navbar" class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand home">
                    <img src="images/ecom-store-logo.png" alt="logo" class="hidden-xs">
                    <img src="images/ecom-store-logo-mobile.png" alt="logo mibile" class="visible-xs">
                </a>
                <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                    <span class="sr-only">toggle navigation</span>
                    <i class="fa fa-align-justify"></i>
                </button>
                <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
                    <span class="sr-only">toggle search</span>
                    <i class="fa fa-search"></i>
                </button>
            </div>

            <div class="navbar-collapse collapse" id="navigation">

                <div class="padding-nav">
                    <ul class="nav navbar-nav left">
                        <li><a href="index.php">Home</a></li>
                        <li class="active"><a href="shop.php">Shop</a></li>
                        <li><a href="checkout.php">My Account</a></li>
                        <li><a href="cart.php">Shopping Card</a></li>
                        <li><a href="contact.php">Cuntact Us</a></li>
                    </ul>
                </div>
                <a href="cart.php" class="btn navbar-btn btn-primary right">
                    <i class="fa fa-shopping-cart"></i>
                    <span>4 items in your cart</span>
                </a>
                <div class="navbar-collapse collapse right">
                    <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">toggle search</span>
                        <i class="fa fa-search"></i>
                    </button>
                </div>
                <div class="collapse clearfix" id="search">
                    <form method="get" action="results.php" class="navbar-form">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="search" name="user_query" required>
                            <span class="input-group-btn">
                            <button type="submit" name="search" value="search" class="btn btn-primary">
                            </span>
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="content">
        <div class="container">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        Shop
                    </li>
                </ul>
            </div>
            <div class="col-md-3">
                <?php 
                    include("includes/sidebar.php");
                ?>
            </div>
            <div class="col-md-9">
                <div id="productMain" class="row">
                    <div class="col-sm-6">
                        <div id="mainImage">
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                </ol>

                                <div class="carousel-inner">
                                    <div class="item active">
                                        <center><img class="img-responsive" src="admin_area/product_images/Product-3a" alt="Product-3a"></center>
                                    </div>
                                    <div class="item">
                                        <center><img class="img-responsive" src="admin_area/product_images/Product-3b" alt="Product-3b"></center>
                                    </div>
                                    <div class="item">
                                        <center><img class="img-responsive" src="admin_area/product_images/Product-3c" alt="Product-3c"></center>
                                    </div>
                                </div>
                                <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                                <i class="fa fa-chevron-left"></i>
                                </a>
                                <a href="#myCarousel" class="right carousel-control" data-slide="next">
                                <i class="fa fa-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="box">
                            <h1 class="text-center">polo shirt Men</h1>
                            <form action="details.php" class="form-horizontal" method="post">
                                <div class="form-group">
                                    <label for="" class="col-md-5 control-label">products quantity</label>
                                    <div class="col-md-7">
                                        <select name="product_qty" id="" class="form-control">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-5 control-label">product size</label>
                                    <div class="col-md-7">
                                        <select name="product_size" class="form-control" >
                                            <option>select size</option>
                                            <option>small</option>
                                            <option>medium</option>
                                            <option>large</option>
                                        </select>
                                    </div>
                                </div>
                                <p class="price">$38</p>
                                <p class="text-center buttons"><button class="btn btn-primary i fa fa-shopping-cart">Add to cart</button></p>
                            </form>
                        </div>
                        <div class="row" id="thumbs">
                            <div class="col-xs-4">
                                <a data-target="#myCarousel" data-slide-to="0" href="#" class="thumb">
                                    <img src="admin_area/product_images/Product-3a" alt="Product-3a" class="img-responsive">
                                </a>
                            </div>
                            <div class="col-xs-4">
                                <a data-target="#myCarousel" data-slide-to="1" href="#" class="thumb">
                                    <img src="admin_area/product_images/Product-3b" alt="Product-3b" class="img-responsive">
                                </a>
                            </div>
                            <div class="col-xs-4">
                                <a data-target="#myCarousel" data-slide-to="2" href="#" class="thumb">
                                    <img src="admin_area/product_images/Product-3c" alt="Product-3c" class="img-responsive">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box" id="details">
                    <h4>product details</h4> 
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores maxime cumque enim totam atque vitae, eos, laboriosam odio iure nemo aut consequatur id, itaque doloribus officia perspiciatis corporis dolor soluta.
                    </p>
                    <h4>size</h4>
                    <ul>
                        <li>small</li>
                        <li>medium</li>
                        <li>large</li>
                    </ul>
                    <hr>
                </div>
                <div id="row same-heigh-row">
                <div class="col-md-3 col-sm-6">
                    <div class="box same-height headline">
                        <h3 class="text-center">products you maybe like</h3>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6-center-responsive">
                    <div class="product same-height">
                        <a href="details.php">
                            <img class="img-responsive" src="admin_area/product_images/Product-6a" alt="">
                        </a>
                        <div class="text">
                            <h3><a href="details.php">polo T-Shirt women</a></h3>
                            <p class="price">$38</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6-center-responsive">
                    <div class="product same-height">
                        <a href="details.php">
                            <img class="img-responsive" src="admin_area/product_images/Product-4a" alt="">
                        </a>
                        <div class="text">
                            <h3><a href="details.php">polo T-Shirt women</a></h3>
                            <p class="price">$38</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6-center-responsive">
                    <div class="product same-height">
                        <a href="details.php">
                            <img class="img-responsive" src="admin_area/product_images/Product-5a" alt="">
                        </a>
                        <div class="text">
                            <h3><a href="details.php">polo T-Shirt women</a></h3>
                            <p class="price">$38</p>
                        </div>
                    </div>
                </div>
                
            </div>
            </div>
           
        </div>
    </div>

    
    <?php 
    include("includes/footer.php");
    ?>
        <script src="js/jquery-331.min.js"></script>
        <script src="js/bootstrap-337.min.js"></script>
</body>
</html>