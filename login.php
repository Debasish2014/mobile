<?php include "include/header-links.php" ?>
<?php
if(isset($_POST['user_login'])){


        if (!empty($_POST)) {

            // Trim all the incoming data:
             $trimmed_data = array_map('trim', $_POST);

            // escape variables for security
            $email = $trimmed_data['Email'];
            $password = $trimmed_data['Password'];
            $pass = sha1($password);
            $query = "SELECT `user_id` FROM user where `email`= '$email' and `password` = '$pass' ";
            $result = mysqli_query($con,$query);
            $data = mysqli_fetch_assoc($result);
            $count = mysqli_num_rows($result);
            
            if ($count == 1) {
                $_SESSION = $data;
                $_SESSION['user'] = $data['user_id'];
                date_default_timezone_set("Asia/Calcutta");
                $time = date("H:i:s");
                $date = date("Y-m-d");
                $id1=$data['user_id'];
                $query2 = "UPDATE `user` SET `last_login_date`='$date',`last_login_time`='$time' WHERE `user_id`='$id1'";
                mysqli_query($con, $query2);
                header('Location:user/Edit-Profile');
                exit;
            }
            else{
                $_SESSION['error'] = NOT_MATCHED;
            }
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
        <h1>Sign-In Here</h1>
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
                                <h4>Sign In with</h4>
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
                                <h4>Duh!! I don't have an account</h4>
                                <h4><a href="#">Sign Up</a></h4>
                            </div>

                        </div>
                    </div>
                    <div class="content-main">
                        <div class="w3ls-subscribe">
                            <form action="#" method="post">
                                <!-- <div class="slow">
                                    <label for="username" style="webkittransition: 2s linear 1s;">User Name</label>
                                    <input type="text" name="username" placeholder="User Name" required="">
                                </div>
                            <h3>or</h3> -->
                                <div class="slow">
                                    <label  for="Email">Email</label>
                                    <input type="email" name="Email" placeholder="Email" required="">
                                </div>
                                <div class="slow">
                                    <label for="Password">Password</label>
                                    <input type="password" name="Password" placeholder="Password" required="">
                                </div>
                            
                                <input type="submit" name="user_login" value="Login">
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
<?php unset($_SESSION['success'] ); unset($_SESSION['error']);  ?>
<?php ob_end_flush(); ?> 
