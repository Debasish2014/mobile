<?php if( isset( $_SESSION['error']) && !empty( $_SESSION['error'] )){ ?>
	<div class='alert alert-danger'>
		<p class="text-center"> <?php echo $_SESSION['error']; ?>  </p>
	</div>
<?php $s = 1;  ?>
<?php }elseif ( isset( $_SESSION['success']) && !empty( $_SESSION['success'] )){ ?>
<?php //print_r( $_SESSION );exit;   ?>
	<div class="alert alert-success">
		<p class="text-center"> <?php echo $_SESSION['success']; ?> </p>
	</div>
<?php $s = 1; ?>
<?php }else{
	$s =0;
} ?>




<?php if($s){ $s = 0; ?>
<!--	<script>
		$(document).ready(function(){
			$('.message_div').delay(3000).slideUp();
		});
    </script>-->
     <script>

                    window.setTimeout(function() {
                        $(".alert").fadeTo(500, 0).slideUp(500, function(){
                            $(this).remove(); 
                        });
                    }, 3000);
                                     </script>
<?php } ?>