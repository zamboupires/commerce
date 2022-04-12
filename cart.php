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
                <a href="#">4 Items in your cart</a>
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
                        <li><a href="shop.php">Shop</a></li>
                        <li><a href="checkout.php">My Account</a></li>
                        <li class="active"><a href="cart.php">Shopping Card</a></li>
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
                        Cart
                    </li>
                </ul>
            </div>
            <div id="cart" class="col-md-9">
                <div class="box">
                    <form action="cart.php" method="post" enctype="multipart/form-data">
                        <h1>Shooping Cart</h1>
                        <p class="text-muted">You corently have 3 item(s) in your cart</p>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th colspan=2>Product</th>
                                        <th>Quantity</th>
                                        <th>Unit Price</th>
                                        <th>size</th>
                                        <th colspan=1>delete</th>
                                        <th colspan=2>sub-total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                        <img src="admin_area/product_images/Product-3a" alt="Product-3a" class="img-responsive">
                                        </td>
                                        <td>
                                            <a href="#">Polo shirt men</a>
                                        </td>
                                        <td>
                                            2
                                        </td>
                                        <td>
                                            $38
                                        </td>
                                        <td>
                                            large
                                        </td>
                                        <td>
                                            <input type="checkbox" name="remove[]">
                                        </td>
                                        <td>
                                            $100
                                        </td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td>
                                        <img class="img-responsive" src="admin_area/product_images/product-1" alt="product 1">
                                        </td>
                                        <td>
                                            <a href="#">Polo shirt women</a>
                                        </td>
                                        <td>
                                            2
                                        </td>
                                        <td>
                                            $38
                                        </td>
                                        <td>
                                            large
                                        </td>
                                        <td>
                                            <input type="checkbox" name="remove[]">
                                        </td>
                                        <td>
                                            $100
                                        </td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td>
                                        <img class="img-responsive" src="admin_area/product_images/product-2" alt="product 2">
                                        </td>
                                        <td>
                                            <a href="#">Men</a>
                                        </td>
                                        <td>
                                            2
                                        </td>
                                        <td>
                                            $38
                                        </td>
                                        <td>
                                            large
                                        </td>
                                        <td>
                                            <input type="checkbox" name="remove[]">
                                        </td>
                                        <td>
                                            $100
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan=5>total</th>
                                        <th colspan=2>$100</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="box-footer">
                            <div class="pull-left">
                                <a href="index.php" class="btn btn-default">
                                    <i class="fa fa-chevron-left"></i> continue shopping
                                </a>
                            </div>
                            <div class="pull-right">
                                <button type="submit" name="update" value="update cart" class="btn btn-default">
                                    <i class="fa fa-refresh"></i> Update cart
                                </button>
                                <a href="checkout.php" class="btn btn-primary">
                                    proceed checkout <i class="fa fa-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
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
            <div class="col-md-3">
                <div id="order-summary" class="box">
                    <div class="box-header">
                        <h1>Order Summary</h1>
                    </div>
                    <p class="text-muted">
                        shipping and additionel cost are calculated based on value you have entered
                    </p>
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Order sub-Total</td>
                                    <th>$200</th>
                                </tr>
                                <tr>
                                    <td>shipping and handling</td>
                                    <td>$0</td>
                                </tr>
                                <tr>
                                    <td>Tax</td>
                                    <td>$0</td>
                                </tr>
                                <tr class="total">
                                    <td>Total</td>
                                    <td>$200</td>
                                </tr>
                            </tbody>
                        </table>
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