<?php include "include/header-links.php" ?>
<?php include "include/header.php" ?>
        <!-- start main_slider_area
		============================================ -->

<?php
    $results = array();
    $product_sno = $_GET['product_sno'];
    $query = "SELECT * FROM `product` WHERE `s_no` = '$product_sno'";
    $pro = mysqli_query($con,$query);
    while ($prodetails = mysqli_fetch_assoc($pro)) 
        {
        $results[] = $prodetails;
        }

?>

<?php foreach ($results as $key => $value) {?>

<?php
    $results2 = array();
    $category = $value['category'];
    $query2 = "SELECT * FROM `product` WHERE `category` = '$category'";
    $pro2 = mysqli_query($con,$query2);
    while ($prodetails2 = mysqli_fetch_assoc($pro2)) 
        {
        $results2[] = $prodetails2;
        }

?>
    <section class="shop-details-area">
        <div class="breadcrumbs">
            <div class="container-small">
                <div class="container-inner">
                    <ul>
                        <li class="home">
                            <a href="#">Home</a>
                            <span>
                                    <i class="fa fa-angle-right"></i>
                                </span>
                        </li>
                        <li class="home-two">
                            <a href="#"><?php echo $value['category']; ?></a>
                            <span>
                                    <i class="fa fa-angle-right"></i>
                                </span>
                        </li>
                        <li class="category3">
                            <strong><?php echo $value['product_name']; ?></strong>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="shop-details">
            <div class="container-small">
                <div class="row">
                     <div class="col-md-4 col-sm-6">
                        <div class="s_big">
                            <div>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div id="image1" class="tab-pane fade in active">
                                        <div class="simpleLens-big-image-container">
                                            <a class="simpleLens-lens-image" data-lens-image="<?php echo $value['main_image']; ?>">
                                                    <img alt="" src="<?php echo $value['main_image']; ?>" class="simpleLens-big-image">
                                                </a>
                                        </div>
                                    </div>
                                    <?php if (!empty($value['image1'])) {?>
                                    <div id="image2" class="tab-pane fade">
                                        <div class="simpleLens-big-image-container">
                                            <a class="simpleLens-lens-image" data-lens-image="<?php echo $value['image1']; ?>">
                                                    <img alt="" src="<?php echo $value['image1']; ?>" class="simpleLens-big-image">
                                                </a>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <?php if (!empty($value['image2'])) {?>
                                    <div id="image3" class="tab-pane fade">
                                        <div class="simpleLens-big-image-container">
                                            <a class="simpleLens-lens-image" data-lens-image="<?php echo $value['image2']; ?>">
                                                    <img alt="" src="<?php echo $value['image2']; ?>" class="simpleLens-big-image">
                                                </a>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <?php if (!empty($value['image3'])) {?>
                                    <div id="image4" class="tab-pane fade">
                                        <div class="simpleLens-big-image-container">
                                            <a class="simpleLens-lens-image" data-lens-image="<?php echo $value['image3']; ?>">
                                                    <img alt="" src="<?php echo $value['image3']; ?>" class="simpleLens-big-image">
                                                </a>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                                <div class="thumnail-image fix">
                                    <ul class="tab-menu">
                                        <li class="active">
                                            <a data-toggle="tab" href="#image1">
                                                <img alt="" src="<?php echo $value['main_image']; ?>">
                                            </a>
                                        </li>
                                        <?php if (!empty($value['image1'])) {?>
                                        <li>
                                            <a data-toggle="tab" href="#image2">
                                                <img alt="" src="<?php echo $value['image1']; ?>" >
                                            </a>
                                        </li>
                                        <?php } ?>
                                        <?php if (!empty($value['image2'])) {?>
                                        <li>
                                            <a data-toggle="tab" href="#image3">
                                                <img alt="" src="<?php echo $value['image2']; ?>">
                                            </a>
                                        </li>
                                        <?php } ?>
                                        <?php if (!empty($value['image3'])) {?>
                                        <li>
                                            <a data-toggle="tab" href="#image4">
                                                <img alt="" src="<?php echo $value['image3']; ?>">
                                            </a>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-6 col-xs-12">
                        <div class="cras">
                            <div class="product-name">
                                <h1><?php echo $value['product_name']; ?></h1>
                            </div>
                            <p class="availability in-stock">
                                <?php if ($value['quantity'] == 0) {?>
                                    Availability:
                                <span>Out of Stock</span>
                                <?php }else{ ?>
                                Available Quantity:
                                <span><?php echo $value['quantity']; ?></span>
                            <?php } ?>
                            </p>
                            <div class="short-description">
                                <p> <?php echo $value['description']; ?></p>
                            </div>
                            <div class="pre-box">
                                <span class="special-price"><span style="color: green;">&#8377;<?php echo $value['selling_price']; ?></span>&emsp;<span style="text-decoration: line-through;">&#8377;<?php echo $value['mrp']; ?></span></span>
                            </div>
                            <div class="add-to-box1">
                                <div class="add-to-box add-to-box2">
                                    <div class="add-to-cart">
                                        <?php if ($value['quantity'] !== '0') { ?>
                                    <a href="Cart-<?php echo $value['s_no']; ?>-sample">                                     
                                        <button class="button2 btn-cart" title="" type="button">
                                                <span>Order a Sample</span>
                                            </button>
                                    </a>
                                <?php } ?>
                                    </div>
                                    <div class="product-icon">
                                        <a href="#">
                                                <i class="fa fa-heart"> </i>
                                            </a>
                                        <a href="#">
                                                <i class="fa fa-retweet"></i>
                                            </a>
                                        <a href="#">
                                                <i class="fa fa-envelope"> </i>
                                            </a>
                                    </div>
                                </div>
                            </div>
                   
                        </div>
                    </div>
                    <form action="#"  class="col-md-3 col-sm-12 col-xs-12">
                        <div class="ma-title">
                            <h2>Order Products in Bulk</h2>
                        </div>
                        <div class="all">
                           <form action="#" id="search_mini_form">
                                <div class="cart-search">
                               
                                    <input class="input-text" type="text" placeholder="Search Compatiable Devices">

                                    <button class="button" title="Search" type="submit">

                                            <i class="fa fa-search"></i>
                                        </button>
                                </div>
                            </form>
                            <div class=" content_top content_all indicator-style">
                                <div class="ma-box-content-all">
                                    <?php foreach ($results2 as $key => $value) {?>
                                        <?php if ($value['quantity'] !== '0') { ?>
                                     <div class="ma-box-content">
                                       <div class="product-content">
                                            <h5 class="product-name">
                                                <a href="#"><?php echo $value['product_name']; ?></a>
                                                &emsp;&emsp;&emsp;Min. qty. &ge; <?php echo $value['mini_no_of_product']; ?> pcs
                                            </h5>
                                            
                                            <div class="price-box">
                                                <span class="special">&#8377;<?php echo $value['selling_price']; ?></span>
                                                <span class="cart-control">
                                                    <div class="additem btn btn-primary">-</div> 
                                                    <input id="qty" class="input-text qty" type="text" title="Qty" value="0" maxlength="12" name="qty"> 
                                                    <div class="additem btn btn-primary">+</div>
                                                </span>

                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                                    <?php } ?>
                                </div>
                            </div>
                         <a href="shopping-cart.php"><button class="button2 btn-cart" onclick="productAddToCartForm.submit(this)" title="" type="button" style="width:100%">
                                                <span>Add to Cart</span>
                             </button></a>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- end main_slider_area
		============================================ -->
    <section class="tab_area">
        <div class="container-small">
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <div class="text">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#home" aria-controls="home" role="tab" data-toggle="tab">Product Description</a>
                            </li>
                            <li role="presentation">
                                <a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Tags</a>
                            </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="home">Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer enim purus, posuere at ultricies eu, placerat a felis. Suspendisse aliquet urna pretium eros convallis interdum. Quisque in arcu id dui vulputate mollis eget non arcu. Aenean et nulla purus. Mauris vel tellus non nunc mattis lobortis. Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer enim purus, posuere at ultricies eu, placerat a felis. Suspendisse aliquet urna pretium eros convallis interdum. Quisque in arcu id dui vulputate mollis eget non arcu. Aenean et nulla purus. Mauris vel tellus non nunc mattis lobortis. </div>
                         
                            <div role="tabpanel" class="tab-pane" id="messages">
                                <div class="box-collateral">
                                    <h3>Items Shown abvoe are marked wirh these  tags:</h3>
                                    <p class="tag"><a href="#">Clothing</a>(3)</p>
                                    <p class="tag"><a href="#">Clothing</a>(3)</p>
                                    <p class="tag"><a href="#">Clothing</a>(3)</p>
                                    <p class="tag"><a href="#">Clothing</a>(3)</p>
                                    <p class="tag"><a href="#">Clothing</a>(3)</p>
                                    <p class="tag"><a href="#">Clothing</a>(3)</p>
                                    <p class="tag"><a href="#">Clothing</a>(3)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="product_area">
        <div class="container-small">
            <div class="row">
                <div class="col-md-12">
                    <div class="ma-title">
                        <h2>
                            UpSell Products
                        </h2>
                    </div>
                    <div class="row">
                        <div class="UpSell indicator-style">
                            <!-- single-product start -->
                            <div class=" col-md-3">
                                <div class="single-product">
                                    <span class="sale-text">Sale</span>
                                    <div class="product-img">
                                        <a href="#">
                                                <img class="primary-image" src="img/product/8.jpg" alt="" />
                                            </a>
                                    </div>
                                    <div class="product-content">
                                        <div class="price-box">
                                            <span class="special-price">$155.00</span>
                                            <span class="old-price">$170.00 </span>
                                        </div>
                                        <h2 class="product-name"><a href="#">Fusce aliquam</a></h2>
                                        <div class="pro-rating">
                                            <div class="pro_one">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star-half-o"></i></a>
                                            </div>
                                            <div class="pro_two">
                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-icon">
                                            <a href="#"><i class="fa fa-shopping-cart"> </i></a>
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                            <a href="#"><i class="fa fa-refresh"> </i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product end -->
                            <!-- single-product start -->
                            <div class=" col-md-3">
                                <div class="single-product">
                                    <span class="sale-text">Sale</span>
                                    <div class="product-img">
                                        <a href="#">
                                                <img class="primary-image" src="img/product/4.jpg" alt="" />
                                            </a>
                                    </div>
                                    <div class="product-content">
                                        <div class="price-box">
                                            <span class="special-price">$699.00</span>
                                            <span class="old-price">$800.00 </span>
                                        </div>
                                        <h2 class="product-name"><a href="#">Quisque in arcu</a></h2>
                                        <div class="pro-rating">
                                            <div class="pro_one">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </div>
                                            <div class="pro_two">
                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-icon">
                                            <a href="#"><i class="fa fa-shopping-cart"> </i></a>
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                            <a href="#"><i class="fa fa-refresh"> </i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product end -->
                            <!-- single-product start -->
                            <div class=" col-md-3">
                                <div class="single-product">
                                    <span class="sale-text">Sale</span>
                                    <div class="product-img">
                                        <a href="#">
                                                <img class="primary-image" src="img/product/5_1_1.jpg" alt="" />
                                            </a>
                                    </div>
                                    <div class="product-content">
                                        <div class="price-box">
                                            <span class="special-price">$88.00</span>
                                            <span class="old-price">$99.00</span>
                                        </div>
                                        <h2 class="product-name"><a href="#">Proin lectus ipsum</a></h2>
                                        <div class="pro-rating">
                                            <div class="pro_one">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </div>
                                            <div class="pro_two">
                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-icon">
                                            <a href="#"><i class="fa fa-shopping-cart"> </i></a>
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                            <a href="#"><i class="fa fa-refresh"> </i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product end -->
                            <!-- single-product start -->
                            <div class=" col-md-3">
                                <div class="single-product">
                                    <span class="sale-text">Sale</span>
                                    <div class="product-img">
                                        <a href="#">
                                                <img class="primary-image" src="img/product/3_2.jpg" alt="" />
                                            </a>
                                    </div>
                                    <div class="product-content">
                                        <div class="price-box">
                                            <span class="special-price">$123.00</span>
                                        </div>
                                        <h2 class="product-name"><a href="#">Aliquam consequat</a></h2>
                                        <div class="pro-rating">
                                            <div class="pro_one">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </div>
                                            <div class="pro_two">
                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-icon">
                                            <a href="#"><i class="fa fa-shopping-cart"> </i></a>
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                            <a href="#"><i class="fa fa-refresh"> </i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product end -->
                            <!-- single-product start -->
                            <div class=" col-md-3">
                                <div class="single-product">
                                    <span class="sale-text">Sale</span>
                                    <div class="product-img">
                                        <a href="#">
                                                <img class="primary-image" src="img/product/5_1_1.jpg" alt="" />
                                            </a>
                                    </div>
                                    <div class="product-content">
                                        <div class="price-box">
                                            <span class="special-price">$721.00</span>
                                        </div>
                                        <h2 class="product-name"><a href="#">Donec non est</a></h2>
                                        <div class="pro-rating">
                                            <div class="pro_one">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </div>
                                            <div class="pro_two">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-icon">
                                            <a href="#"><i class="fa fa-shopping-cart"> </i></a>
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                            <a href="#"><i class="fa fa-refresh"> </i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product end -->
                            <!-- single-product start -->
                            <div class=" col-md-3">
                                <div class="single-product">
                                    <span class="sale-text">Sale</span>
                                    <div class="product-img">
                                        <a href="#">
                                                <img class="primary-image" src="img/product/7_2.jpg" alt="" />
                                            </a>
                                    </div>
                                    <div class="product-content">
                                        <div class="price-box">
                                            <span class="special-price">$222.00</span>
                                        </div>
                                        <h2 class="product-name"><a href="#"> Donec ac tempus </a></h2>
                                        <div class="pro-rating">
                                            <div class="pro_one">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </div>
                                            <div class="pro_two">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-icon">
                                            <a href="#"><i class="fa fa-shopping-cart"> </i></a>
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                            <a href="#"><i class="fa fa-refresh"> </i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-md-3">
                                <div class="single-product">
                                    <span class="sale-text">Sale</span>
                                    <div class="product-img">
                                        <a href="#">
                                                <img class="primary-image" src="img/product/6_4.jpg" alt="" />
                                            </a>
                                    </div>
                                    <div class="product-content">
                                        <div class="price-box">
                                            <span class="special-price">$333.00</span>
                                        </div>
                                        <h2 class="product-name"><a href="#">Pellentesque habitant </a></h2>
                                        <div class="pro-rating">
                                            <div class="pro_one">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </div>
                                            <div class="pro_two">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-icon">
                                            <a href="#"><i class="fa fa-shopping-cart"> </i></a>
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                            <a href="#"><i class="fa fa-refresh"> </i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-md-3">
                                <div class="single-product">
                                    <span class="sale-text">Sale</span>
                                    <div class="product-img">
                                        <a href="#">
                                                <img class="primary-image" src="img/product/13.jpg" alt="" />
                                            </a>
                                    </div>
                                    <div class="product-content">
                                        <div class="price-box">
                                            <span class="special-price">$432.00</span>
                                        </div>
                                        <h2 class="product-name"><a href="#">Etiam gravida</a></h2>
                                        <div class="pro-rating">
                                            <div class="pro_one">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </div>
                                            <div class="pro_two">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-icon">
                                            <a href="#"><i class="fa fa-shopping-cart"> </i></a>
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                            <a href="#"><i class="fa fa-refresh"> </i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-md-3">
                                <div class="single-product">
                                    <span class="sale-text">Sale</span>
                                    <div class="product-img">
                                        <a href="#">
                                                <img class="primary-image" src="img/product/1_1.jpg" alt="" />
                                            </a>
                                    </div>
                                    <div class="product-content">
                                        <div class="price-box">
                                            <span class="special-price">$155.00</span>
                                        </div>
                                        <h2 class="product-name"><a href="#">Cras neque metus</a></h2>
                                        <div class="pro-rating">
                                            <div class="pro_one">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </div>
                                            <div class="pro_two">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-icon">
                                            <a href="#"><i class="fa fa-shopping-cart"> </i></a>
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                            <a href="#"><i class="fa fa-refresh"> </i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-md-3">
                                <div class="single-product">
                                    <span class="sale-text">Sale</span>
                                    <div class="product-img">
                                        <a href="#">
                                                <img class="primary-image" src="img/product/12_2.jpg" alt="" />
                                            </a>
                                    </div>
                                    <div class="product-content">
                                        <div class="price-box">
                                            <span class="special-price">$222.00</span>
                                        </div>
                                        <h2 class="product-name"><a href="#">Nunc facilisis</a></h2>
                                        <div class="pro-rating">
                                            <div class="pro_one">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </div>
                                            <div class="pro_two">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-icon">
                                            <a href="#"><i class="fa fa-shopping-cart"> </i></a>
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                            <a href="#"><i class="fa fa-refresh"> </i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-md-3">
                                <div class="single-product">
                                    <span class="sale-text">Sale</span>
                                    <div class="product-img">
                                        <a href="#">
                                                <img class="primary-image" src="img/product/15_1.jpg" alt="" />
                                            </a>
                                    </div>
                                    <div class="product-content">
                                        <div class="price-box">
                                            <span class="special-price">$99.00</span>
                                            <span class="old-price">$111.00</span>
                                        </div>
                                        <h2 class="product-name"><a href="#">Primis in faucibus</a></h2>
                                        <div class="pro-rating">
                                            <div class="pro_one">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </div>
                                            <div class="pro_two">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-icon">
                                            <a href="#"><i class="fa fa-shopping-cart"> </i></a>
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                            <a href="#"><i class="fa fa-refresh"> </i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-md-3">
                                <div class="single-product">
                                    <span class="sale-text">Sale</span>
                                    <div class="product-img">
                                        <a href="#">
                                                <img class="primary-image" src="img/product/17.jpg" alt="" />
                                            </a>
                                    </div>
                                    <div class="product-content">
                                        <div class="price-box">
                                            <span class="special-price">$333.00</span>
                                        </div>
                                        <h2 class="product-name"><a href="#">Accumsan elit </a></h2>
                                        <div class="pro-rating">
                                            <div class="pro_one">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </div>
                                            <div class="pro_two">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-icon">
                                            <a href="#"><i class="fa fa-shopping-cart"> </i></a>
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                            <a href="#"><i class="fa fa-refresh"> </i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-md-3">
                                <div class="single-product">
                                    <span class="sale-text">Sale</span>
                                    <div class="product-img">
                                        <a href="#">
                                                <img class="primary-image" src="img/product/18.jpg" alt="" />
                                            </a>
                                    </div>
                                    <div class="product-content">
                                        <div class="price-box">
                                            <span class="special-price">$345.00</span>
                                        </div>
                                        <h2 class="product-name"><a href="#">occaecati cupiditate</a></h2>
                                        <div class="pro-rating">
                                            <div class="pro_one">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </div>
                                            <div class="pro_two">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-icon">
                                            <a href="#"><i class="fa fa-shopping-cart"> </i></a>
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                            <a href="#"><i class="fa fa-refresh"> </i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-md-3">
                                <div class="single-product">
                                    <span class="sale-text">Sale</span>
                                    <div class="product-img">
                                        <a href="#">
                                                <img class="primary-image" src="img/product/16_3.jpg" alt="" />
                                            </a>
                                    </div>
                                    <div class="product-content">
                                        <div class="price-box">
                                            <span class="special-price">$211.00</span>
                                        </div>
                                        <h2 class="product-name"><a href="#">consequences</a></h2>
                                        <div class="pro-rating">
                                            <div class="pro_one">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </div>
                                            <div class="pro_two">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-icon">
                                            <a href="#"><i class="fa fa-shopping-cart"> </i></a>
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                            <a href="#"><i class="fa fa-refresh"> </i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-md-3">
                                <div class="single-product">
                                    <span class="sale-text">Sale</span>
                                    <div class="product-img">
                                        <a href="#">
                                                <img class="primary-image" src="img/product/20.jpg" alt="" />
                                            </a>
                                    </div>
                                    <div class="product-content">
                                        <div class="price-box">
                                            <span class="special-price">$222.00</span>
                                            <span class="special-price">$333.00</span>
                                        </div>
                                        <h2 class="product-name"><a href="#">pleasure rationally</a></h2>
                                        <div class="pro-rating">
                                            <div class="pro_one">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </div>
                                            <div class="pro_two">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-icon">
                                            <a href="#"><i class="fa fa-shopping-cart"> </i></a>
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                            <a href="#"><i class="fa fa-refresh"> </i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>



<?php include "include/social-media-bar.php" ?>
<?php include "include/footer.php"?>
<?php include "include/footer-links.php"?>
<?php 
    $number = 20;
?>
<script>
        $(".additem").on("click", function () {
        var $button = $(this);
        var oldValue = $button.parent().find("input").val();
        if ($button.text() == "+") {
            if (oldValue < <?php echo $number ?>) {
                var newVal = parseFloat(oldValue) + <?php echo $number ?>;
            } else {
                var newVal = parseFloat(oldValue) + 5;
            }
        } else {
            // Don't allow decrementing below 10
            if (oldValue > <?php echo $number ?>) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 0;
            }
        }
        $button.parent().find("input").val(newVal);
    });
    </script>