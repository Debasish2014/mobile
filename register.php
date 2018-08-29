<?php include "include/header-links.php" ?>
<?php
if(isset($_POST['register_user'])){
        if (!empty($_POST)) {
            $trimmed_data = array_map('trim', $_POST);

            // escape variables for security

            $name = $trimmed_data['name'];
            $phone = $trimmed_data['ph_no'];
            $Email = $trimmed_data['Email'];
            $password = $trimmed_data['Password'];
            $uid = md5(uniqid($name, true));

            // $user=$_SESSION['user_id'];

            if (!$_POST) {
                $_SESSION['error'] = FIELDS_MISSING;
            }
            $pass = sha1($password);
            $query1 = "SELECT * FROM user where email = '$Email' OR user_id = '$uid' OR phone_no = '$phone' ";
            $resultGet = mysqli_query($con, $query1);
            $countGet = mysqli_num_rows($resultGet);
            if ($countGet > 0) {
                $_SESSION['error'] = ALLREADY_ADD;
            } else {

                $query = "INSERT INTO `user`(`user_id`,`name`, `phone_no`, `email`,`password`) VALUES ('$uid','$name','$phone','$Email','$pass')";

                if ($result2 = mysqli_query($con, $query)) {
                    $_SESSION['user'] = $uid;
                    header('Location:user/Edit-Profile');
                    mysqli_close($con);
                    return true;
                };
                echo $con->error;
            }
        } else {
            $_SESSION['error'] = ADD_FAIL;
        }
}

?>
<link href="css/style-register.css" rel="stylesheet" type="text/css" media="all" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<script src="js/jquery-1.11.1.min.js"></script>
</head>

<body>
    <div class="wthree-dot">
        <h1>Sign-Up Here</h1>
        <?php require_once 'IC/message.php';?>
        <div class="profile">
            <div class="wrap">
                <div class="wthree-grids">
                    <div class="content-left">
                        <div class="content-info">
                            <h2>SignUp now. it's free and always will be</h2>
                            <!--
<div class="slider">
<div class="callbacks_container">
<ul class="rslides callbacks callbacks1" id="slider4">
<li>
<div class="w3layouts-banner-info">
<h3>Vivamus dui dolor</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et placerat leo, non condimentum justo</p>
</div>
</li>
<li>
<div class="w3layouts-banner-info">
<h3>Duis in nisl egestas</h3>
<p>Suspendisse leo lacus, hendrerit consectetur scelerisque in, tempor sit amet tortor. Pellentesque rhoncus</p>
</div>
</li>
</ul>
</div>
<div class="clear"> </div>
</div>
-->
                            <div class="agileinfo-follow">
                                <h4>Or</h4>
                                <h4>Sign Up with</h4>
                            </div>
                            <div class="agileinfo-social-grids">
                                <ul>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-rss"></i></a>
                                    <a href="#"><i class="fa fa-vk"></i></a>
                                    <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                                </ul>
                            </div>
                            <div class="agileinfo-follow">
                                <h4>Duh!! I Already have an account</h4>
                                <h4><a href="#">Sign In</a></h4>
                            </div>

                        </div>
                    </div>
                    <div class="content-main">
                        <div class="w3ls-subscribe">
                            <form action="#" method="post">
                                <div class="slow">
                                    <label class="" for="firstname" style="webkittransition: 2s linear 1s;">Name</label>
                                    <input type="text" name="name" placeholder="Name" required="">
                                </div>
                                <div class="slow">
                                    <label class="" for="ph-no">Phone Number</label>
                                    <input type="text" name="ph_no" placeholder="Phone-number" required="">
                                </div>
                                <div class="slow">
                                    <label class="" for="Email">Email</label>
                                    <input type="email" name="Email" placeholder="Email" required="">
                                </div>
                                <div class="slow">
                                    <label class="" for="Password">Password</label>
                                    <input type="password" id="password" name="Password" placeholder="Password" required="">
                                </div>
                                <div class="slow">
                                    <label class="" for="ConfirmPassword">Confirm Password</label>
                                    <input type="password" id="confirm_password" name="ConfirmPassword" placeholder="Confirm Password" required="">
                                </div>
                                <input type="submit" name="register_user" value="Sign Up">
                            </form>
                        </div>
                    </div>
                    <div class="clear"> </div>
                    <button class="btn btn-warning back-button btn-block"><span><i class="fa fa-undo"></i></span>Go Back</button>
                </div>

            </div>
        </div>
    </div>
    <script src="js/responsiveslides.min.js"></script>
    <script>
        // You can also use "$(window).load(function() {"
        $(function() {
            // Slideshow 4
            $("#slider4").responsiveSlides({
                auto: true,
                pager: true,
                nav: false,
                speed: 400,
                namespace: "callbacks",
                before: function() {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function() {
                    $('.events').append("<li>after event fired.</li>");
                }
            });
            $('label').hide();
            $('input').on('mouseenter', function() {
                $(this).parent().find('label').show();
            });  
            $('input').on('mouseleave', function() {
                $(this).parent().find('label').hide();
            });


        });

    </script>
    <!--banner Slider starts Here-->
</body>

</html>

<script type="text/javascript">
    var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>

<?php unset($_SESSION['success'] ); unset($_SESSION['error']);  ?>
<?php ob_end_flush(); ?> 
