    <!-- start slider_area
		============================================ -->
<?php
$results = array();
$query = "SELECT * FROM `category`";
$result = mysqli_query($con, $query);
$count = mysqli_num_rows($result);
    if ($count > 0) {
        while ($result1 = mysqli_fetch_assoc($result)) 
        {
        $results[] = $result1;
        }
                    }   
foreach ($results as $key => $value) {
?>

<?php
$resultsproduct = array();
$catename = $value['cate_name'];
$query2 = "SELECT * FROM `product` WHERE `category` = '$catename'";
$result2 = mysqli_query($con, $query2);
$count2 = mysqli_num_rows($result2);
    if ($count2 > 0) {
        while ($result3 = mysqli_fetch_assoc($result2)) 
        {
        $resultsproduct[] = $result3;
        }   
?>

    <section class="slider_area">
        <div class="container-small">
            <div class="row">
                <div class="col-md-12">
                    <div class="features-tab indicator-style">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><?php echo $value['cate_name']; ?></a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="home">
                                <div class="row">
                                    <div class="features-curosel indicator-style">
                                        <?php foreach ($resultsproduct as $key => $value2) { ?>
                                        <!-- single-product start -->
                                        <div class=" col-md-3">
                                            <div class="single-product">
                                                <span class="sale-text">Sale</span>
                                                <div class="product-img">
                                                    <a href="Product-Details-<?php echo $value2['s_no']; ?>">
                                                            <img class="primary-image" src="<?php echo $value2['main_image']; ?>" alt=""/>
                                                        </a>
                                                </div>
                                                <div class="product-content">
                                                    <h2 class="product-name"><a href="Product-Details-<?php echo $value2['s_no']; ?>"><?php echo $value2['product_name']; ?></a></h2><br>
                                                    <div class="price-box">
                                                        <span class="special-price">&#8377; <?php echo $value2['selling_price'] ?> per pc </span><span class="old-price pull-right" style="text-decoration: line-through;">&#8377; <?php echo $value2['mrp']; ?> per pc </span>
                                                        
                                                        
                                                        <a href="Product-Details-<?php echo $value2['s_no']; ?>"><button class="but order-sample btn btn-default"> Order a Sample</button></a>&emsp;
                                                        <h5 class="pull-right" style="padding: 12px 5px 5px 5px"><a href="#">Min. qty. <br> <?php echo $value2['quantity']; ?> pcs</a></h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                        <!-- single-product end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php  }} ?>
    <!-- end slider_area
		============================================ -->