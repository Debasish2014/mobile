<?php 
 include "include/header-links.php" ?>
<?php include "include/header.php" ?>

<?php
if(isset($_POST['update_user_details'])){
        if (!empty($_POST)) {
            $trimmed_data = array_map('trim', $_POST);

            // escape variables for security

            $name = $trimmed_data['name'];
            $phone = $trimmed_data['phone'];
            $Email = $trimmed_data['email'];
            $company_name = $trimmed_data['company_name'];
            $gst_no = $trimmed_data['gst_no'];
            $address = $trimmed_data['address'];
            $id = $_SESSION['user'];

            // $user=$_SESSION['user_id'];

            if (!$_POST) {
                $_SESSION['error'] = FIELDS_MISSING;
            }

            $query = "UPDATE `user` SET `name`='$name',`phone_no`='$phone',`email`='$Email',`company_name`='$company_name',`gst_no`='$gst_no',`address`='$address' WHERE `user_id` = '$id'";

                if ($result2 = mysqli_query($con, $query)) {
                    $_SESSION['success'] = PROFILE_UPDATE;
                }
        } else {
            $_SESSION['error'] = ADD_FAIL;
        }
}

?>


<?php
if(isset($_POST['user_mage'])){

        $trimmed_data = array_map('trim', $_POST);
        $id = $_SESSION['user'];
        $file_name4 = $_FILES["user_image"]["name"];
        $temp_name4 = $_FILES["user_image"]["tmp_name"];
        $imgtype4 = $_FILES["user_image"]["type"];
        $target_path4 = "../img/user/" . $id;
        $target_path5 = "http://127.0.0.1/mobile/img/user/" . $id;

        move_uploaded_file($temp_name4, $target_path4);

        $query = "UPDATE `user` SET `image`= '$target_path5' WHERE `user_id` = '$id'";

        if (mysqli_query($con, $query)) {
            $_SESSION['success'] = IMAGE_UPDATE;
            
        }
}

?>



<?php

        $results = array();
        $id = $_SESSION['user'];
        $query = "SELECT * FROM `user` WHERE `user_id` = '$id'";
        $result = mysqli_query($con, $query);
        $count = mysqli_num_rows($result);
        if ($count > 0) {
            while ($result1 = mysqli_fetch_assoc($result)) {
                 $results[] = $result1;

                             }
            

            mysqli_close($con);
        }
?>

<?php foreach ($results as $key => $value) {?>
 <div class="container">
	<div class="row bottom40">
	<?php require_once '../IC/message.php';?>
<?php include "include/user_sidebar.php" ?>
		<div class="col-md-6">
		    <div class="card">
		        <div class="card-body">
		            <div class="row">
		                <div class="col-md-12">
		                    <h4>Your Profile</h4>
		                    <hr>
		                </div>
		            </div>
		            <div class="row">
		                <div class="col-md-12">
		                    <form method="POST" action="#">
                              <div class=" ">
                                <label for="lastname" class="col-4 col-form-label">Name</label> 
                                <div class="col-8">
                                  <input id="lastname" name="name" placeholder="Name" class="form-control here" type="text" value="<?php echo $value['name']; ?>">
                                </div>
                              </div>
                              <div class=" ">
                                <label for="email" class="col-4 col-form-label">Email*</label> 
                                <div class="col-8">
                                  <input id="email" name="email" placeholder="Email" class="form-control here" required="required" type="text" value="<?php echo $value['email']; ?>">
                                </div>
                              </div>
                              <div class=" ">
                                <label for="phone" class="col-4 col-form-label">Phone No</label> 
                                <div class="col-8">
                                  <input id="phone" name="phone" placeholder="New Password" class="form-control here" type="text" value="<?php echo $value['phone_no']; ?>">
                                </div>
                              </div>
                              <div class=" ">
                                <label for="com_name" class="col-4 col-form-label">Company Name</label> 
                                <div class="col-8">
                                  <input id="com_name" name="company_name" placeholder="Company Name" class="form-control here" required="required" type="text" value="<?php echo $value['company_name']; ?>">
                                </div>
                              </div>
                              <div class=" ">
                                <label for="gst" class="col-4 col-form-label">GST No (optional)</label> 
                                <div class="col-8">
                                  <input id="gst" name="gst_no" placeholder="GST Number" class="form-control here" type="text" value="<?php echo $value['gst_no']; ?>">
                                </div>
                              </div>
                              <div class=" ">
                                <label for="address" class="col-4 col-form-label">Address</label> 
                                <div class="col-8">
                                  <textarea class="form-control here" name="address" required="required" rows="3" id="address"><?php echo $value['address']; ?></textarea>
                                </div>
                              </div> 
                              <div class=" ">
                                <div class="offset-4 col-8">
                                  <button name="update_user_details" type="submit" class="btn btn-primary">Update My Profile</button>
                                </div>
                              </div>
                            </form>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>	<div class="col-md-3">
		    <div class="card">
		        <div class="card-body">
		            <div class="row">
	           <div class="text-center">
              <form method="POST" action="#" enctype="multipart/form-data">
                <?php if (empty($value['image'])) {?>
                <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
              <?php }else{?>
                <img src="<?php echo $value['image']; ?>" class="avatar img-circle img-thumbnail" alt="avatar">
              <?php } ?>
                <h6>Upload a different photo...</h6>
                <input type="file" name="user_image" class="btn btn-info text-center center-block file-upload"><br>
                <button name="user_mage" type="submit" class="btn btn-primary">Update</button>
              </form>
            </div></hr>
		            </div>
		            
		        </div>
		    </div>
		</div>
	</div>
<div class="row bottom40"></div>
</div>
<?php } ?>
<?php include "include/social-media-bar.php" ?>
<?php include "include/footer.php" ?>
<?php include "include/footer-links.php" ?>