 <section class="slider_area">
        <div class="container-small">
            <div class="row">
                <div class="col-md-12">
                    <div class="features-tab indicator-style">
                        <div class="tab-content ">
                            <div role="tabpanel" class="tab-pane active" id="home">
                                <div class="row">
                                    <div class="catagories-curosel indicator-stylers">
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
                                        <!-- single-product start -->
                                        <a href="shop.php"><div class=" col-md-12 catagory-container">
                                            <div class="single-product catagories-area">
                                                <div class="catagories">
                                                    <div class="catagories-text">
                                                        <?php echo $value['cate_name']; ?> 
                                                    </div>
                                                </div>
                                            </div>
                                            </div></a>
                                        <?php } ?>

                                        <!-- single-product end -->
                                        
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