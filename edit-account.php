<?php include "include/header-links.php" ?>
<?php include "include/header.php" ?>
<div class="container">
	<div class="row bottom40">
	
	       <div class="col-md-3 ">

            <div class="list-group ">
                <a href="profile.php" class="list-group-item list-group-item-action ">My Account</a>
                <a href="edit-account.php" class="list-group-item list-group-item-action active">Edit Account</a>
                <a href="change-password.php" class="list-group-item list-group-item-action">Password</a>
                <a href="#" class="list-group-item list-group-item-action">Wishlist</a>
                <a href="#" class="list-group-item list-group-item-action">Order History</a>
                <a href="#" class="list-group-item list-group-item-action">Returns</a>
                <a href="#" class="list-group-item list-group-item-action">Transactions</a>
                <a href="logout.php" class="list-group-item list-group-item-action">Log Out</a>
            </div> 
        </div>
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
		                    <form>
                              <div class=" ">
                                <label for="username" class="col-4 col-form-label">User Name*</label> 
                                <div class="col-8">
                                  <input id="username" name="username" placeholder="Username" class="form-control here" required="required" type="text">
                                </div>
                              </div>
                              <div class="">
                                <label for="name" class="col-4 col-form-label">First Name</label> 
                                <div class="col-8">
                                  <input id="name" name="name" placeholder="First Name" class="form-control here" type="text">
                                </div>
                              </div>
                              <div class=" ">
                                <label for="lastname" class="col-4 col-form-label">Last Name</label> 
                                <div class="col-8">
                                  <input id="lastname" name="lastname" placeholder="Last Name" class="form-control here" type="text">
                                </div>
                              </div>
                              <div class=" ">
                                <label for="email" class="col-4 col-form-label">Email*</label> 
                                <div class="col-8">
                                  <input id="email" name="email" placeholder="Email" class="form-control here" required="required" type="text">
                                </div>
                              </div>
                           
                              <div class=" ">
                                <div class="offset-4 col-8">
                                  <button name="submit" type="submit" class="btn btn-primary">Update My Profile</button>
                                </div>
                              </div>
                            </form>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>	
        
        
        <div class="col-md-3">
		    <div class="card">
		        <div class="card-body">
		            <div class="row">
	           <div class="text-center">
        <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
        <h6>Upload a different photo...</h6>
        <input type="file" class="btn btn-info text-center center-block file-upload">
      </div></hr>
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