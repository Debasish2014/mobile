<?php ob_start(); include "include/header-links.php" ?>
<?php include "include/header.php" ?>
        <!-- start shopping-cart-area
		============================================ -->
<?php
$mac = GetMAC();

function GetMAC(){
    ob_start();
    system('getmac');
    $Content = ob_get_contents();
    ob_clean();
    return substr($Content, strpos($Content,'\\')-20, 17);
}
// Function to get the client ip address
function get_client_ip_env() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
        $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
 
    return $ipaddress;
}
$ip = get_client_ip_env();


if (!empty($_GET['product_id']) && !empty($_GET['key'])) {
if (isset($_SESSION['user'])) {
    $userid = $_SESSION['user'];
    $product_id = $_GET['product_id'];
    if ($_GET['key'] == 'sample') {
        $qty = 1;
     } 
    $query2 = "SELECT * FROM `cart` WHERE  `product_id` = '$product_id' AND `user_id` = '$userid'";
    $resultcart = mysqli_query($con, $query2);
    $count = mysqli_num_rows($resultcart);
    if ($count > 0) {
        $_SESSION['error'] = PRODUCT_ALLREADY;
    }else{
        //update in the same mac id
        $check_mac = "SELECT * FROM `cart` WHERE `mac_address` = '$mac' AND `product_id` = '$product_id'";
        $check_mac2 = mysqli_query($con, $check_mac);
        $count2 = mysqli_num_rows($check_mac2);
        if ($count2 > 0) {
            $insertmac = "UPDATE `cart` SET `user_id` = '$userid' WHERE `mac_address` = '$mac' AND `product_id` = '$product_id'";
            $insertmac2 = mysqli_query($con, $insertmac);
            $_SESSION['error'] = PRODUCT_ALLREADY;
        }else{

        $query3 = "INSERT INTO `cart`(`user_id`, `ip_address`, `mac_address`, `product_id`, `qty`) VALUES ('$userid','$ip','$mac','$product_id','$qty')";
        $insertcart = mysqli_query($con, $query3);
        header("Location:Cart-sample");
    }
    }
}else{
    if (!empty($_GET['product_id'])) {
    $product_id = $_GET['product_id'];
}
if (!empty($_GET['key'])) {
    if ($_GET['key'] == 'sample') {
        $qty = 1;
     }
     } 
    $query2 = "SELECT * FROM `cart` WHERE  `product_id` = '$product_id' AND `mac_address` = '$mac'";
    $resultcart = mysqli_query($con, $query2);
    $count = mysqli_num_rows($resultcart);
    if ($count > 0) {
        $_SESSION['error'] = PRODUCT_ALLREADY;
    }else{
        $query3 = "INSERT INTO `cart`(`ip_address`, `mac_address`, `product_id`, `qty`) VALUES ('$ip','$mac','$product_id','$qty')";
        $insertcart = mysqli_query($con, $query3);
        header("Location:Cart-sample");
    }
}
}


if (isset($_SESSION['user'])) {
$userid = $_SESSION['user'];
$resultsproduct = array();
$query = "SELECT * FROM `cart` WHERE `user_id` = '$userid' OR `mac_address` = '$mac'";
}else{
$resultsproduct = array();
$query = "SELECT * FROM `cart` WHERE `mac_address` = '$mac'";    
}

$result = mysqli_query($con, $query);
 while ($result3 = mysqli_fetch_assoc($result)) 
        {   
            $sno = $result3['s_no'];
            $pro_id = $result3['product_id'];
            $query4 = "SELECT * FROM `product` WHERE `s_no` = '$pro_id'";
            $product_details = mysqli_query($con, $query4);
            while ($result4 = mysqli_fetch_assoc($product_details)) 
            {
                $resultsproduct[] = array_merge($result4,$result3);
            }

        }

if (isset($_POST['delete_cart'])) {

    $serial_no = $_POST['serial_no'];
    $delete = "DELETE FROM `cart` WHERE `s_no` = '$serial_no'";
    $delete1 = mysqli_query($con, $delete);
    $_SESSION['success'] = REMOVE_CART;
    header("Location:Cart-sample");
    exit();
}

if (isset($_POST['clear_all'])) {
    $delete = "DELETE FROM `cart` WHERE `user_id` = '$userid' OR `mac_address` = '$mac'";
    $delete1 = mysqli_query($con, $delete);
    $_SESSION['success'] = REMOVE_CART_ALL;
    header("Location:Cart-sample");
    exit();
}

 ?>

        <div class="shopping-cart-area">
            <div class="container-small">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="s-cart-all">
                            <div class="page-title">
                                <h1>Your Cart</h1>
                                <?php $sum = 0; require_once 'IC/message.php';?>
                            </div>
                            <div class="cart-form table-responsive">
                                <table id="shopping-cart-table" class="data-table cart-table">
                                    <tr>
                                        <th>Remove</th>
                                        <th>Images</th>
                                        <th>Product Name</th>
                                        <th>Price</th>
                                        <?php
                                         if ($_GET['key'] == 'sample') {
                                        } else { ?>
                                        <th>Qty</th>
                                    <?php } ?>
                                    <?php
                                         if ($_GET['key'] == 'sample') {
                                        } else { ?>
                                        <th>Subtotal</th>
                                        <?php } ?>
                                    </tr>
                                    <?php foreach ($resultsproduct as $key => $value) { ?>
                                        
                                    <tr>
                                        <td class="sop-icon">
                                            
                                            <form method="POST">
                                                
                                                <input type="hidden" name="serial_no" value="<?php echo $value['s_no']; ?>">
                                            <button type="submit" name="delete_cart" class="btn" style="background-color: white"><i class="fa fa-times"></i></button>
                                            </form>
                                        
                                        </td>
                                        <td class="sop-cart">
                                            <a href="#"><img style="height: 100px" class="center-block img-responsive primary-image" alt="" src="<?php echo $value['main_image']; ?>"></a>
                                        </td>
                                        <td class="sop-cart"><a href="#"><?php echo $value['product_name']; ?></a></td>
                                        <td class="sop-cart"><?php echo $value['mrp']; ?></td>
                                        <?php
                                         if ($_GET['key'] == 'sample') {
                                        } else { ?>
                                        <td><input class="input-text qty" type="text" name="qty" maxlength="12" value="10" title="Qty"></td>
                                    <?php } ?>
                                    <?php
                                         if ($_GET['key'] == 'sample') {
                                        } else { ?>
                                        <td class="sop-cart">$155.00</td>
                                    <?php } ?>
                                    </tr>
                                    <?php

                                    $sum += $value['mrp']; ?>
                                <?php } ?>
                                
                                </table>
                                <div class="a-all ">
                                    <div class="a-left">
                                        <a href="home-page"><button class="button2  notice" title="" type="button">
                                            <span>Continue Shopping</span>
                                        </button>
                                        </a>
                                    </div>
                                    <div class="a-right">
                                        <form method="POST">
                                            <button name="clear_all" class="button2 notice Estimate" title="" type="submit">
                                            <span>Clear Shopping Cart</span>
                                        </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cart-collaterals row">
                    <div class="col-md-4 col-sm-6"></div>
                    <div class="col-md-4 col-sm-6"></div>
                    <div class="col-md-4 col-sm-12">
                        <div class="totals">
                            <div class="subtotal">
                                <p>Subtotal <span>&#8377;<?php echo $sum; ?></span></p>
                                <p>Delivery Charges <span>&#8377;<?php
                                if ($sum == 0) {
                                    echo $delivery_charge = 0;
                                }else{
                                echo $delivery_charge = 60;} ?></span></p>
                                <p style="font-weight: 800; font-size: 18px">Grand Total <span>&#8377;<?php echo $sum + $delivery_charge; ?></span></p>
                            </div>
                            <button class="button2 get" title="" type="button">
                                <a href="register.php"><span>Proceed to Checkout</span></a>
                            </button>
                            <a href="#">Checkout with Multiple Addresses</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end shopping-cart-area
		============================================ -->

<?php include "include/social-media-bar.php" ?>
<?php include "include/footer.php" ?>
<?php include "include/footer-links.php" ?>
