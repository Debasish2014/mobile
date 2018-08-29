<?php include "include/header-links.php" ?>
<?php include "include/header.php" ?>


<?php
if(isset($_POST['change_password'])){
        if (!empty($_POST)) {
            $trimmed_data = array_map('trim', $_POST);

            // escape variables for security

            $old_pass = sha1($trimmed_data['old_pass']);
            $newpass = sha1($trimmed_data['newpass']);
            $conpass = sha1($trimmed_data['conpass']);
            $id = $_SESSION['user'];
            if ($newpass == $conpass) {
            $query = "SELECT * FROM `user` WHERE `password` = '$old_pass' AND `user_id` = '$id'";
            $result = mysqli_query($con, $query);
            $count = mysqli_num_rows($result);
            if ($count > 0) {
                $query2 = "UPDATE `user` SET `password` = '$newpass' WHERE `password` = '$old_pass' AND `user_id` = '$id'";
                $result = mysqli_query($con, $query2);
                $_SESSION['success'] = PASSCHANGE;
            }
            else{
                $_SESSION['error'] = OLDPASS;
            }
        } else {
            $_SESSION['error'] = PASSNOTMATCH;
        }

        
        } else {
            $_SESSION['error'] = ADD_FAIL;
        }
}

?>


<div class="container">
    <div class="row bottom40">
        <?php require_once '../IC/message.php';?>
        <?php include "include/user_sidebar.php" ?>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h4>Change Your Password</h4>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <form action="#" method="POST">
                                <div class=" ">
                                    <label for="old_pass" class="col-4 col-form-label">Old Password</label> 
                                    <div class="col-8">
                                        <input id="old_pass" name="old_pass" placeholder="Old Password" class="form-control here" required="required" type="password">
                                    </div>
                                </div>
                                <div class=" ">
                                    <label for="newpass" class="col-4 col-form-label">New Password</label> 
                                    <div class="col-8">
                                        <input id="password" name="newpass" placeholder="New Password" class="form-control here" type="password" required="required">
                                    </div>
                                </div>                               
                                <div class=" ">
                                    <label for="newpass" class="col-4 col-form-label">Confirm Password</label> 
                                    <div class="col-8">
                                        <input id="confirm_password" name="conpass" placeholder="Confirm Password" class="form-control here" type="text" required="required">
                                    </div>
                                </div> 
                                <div class=" ">
                                    <div class="offset-4 col-8">
                                        <button name="change_password" type="submit" class="btn btn-primary">Change Password</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>	
</div>
<div class="row bottom40"></div>
</div>
<?php include "include/social-media-bar.php" ?>
<?php include "include/footer.php" ?>
<?php include "include/footer-links.php" ?>
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