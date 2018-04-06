<?php
	$cur = "change-password";
	include_once("./common/header.php");
?>
		<div class="col-sm-9" style="margin-top:1em;">
				<div class="row">
					<div class="col-sm-11" id="credit_history">
						<div class="dashboard_credit_header">
							<b>Change Password</b>
						</div>
						<div class="dashboard_credit_body">
							<?php 
							if(isset($_GET['status']) AND $_GET['status'] == 'S')
							{
							?>
								<div class="alert alert-success">Your password has been updated Successfully!</div>
							<?php
							}
							?>
							
							<form method="post" action="./common/update-password.php">
								<div class="form-group" style="margin: 20px;">
									<div class="row">										
										<div class="col-sm-4">
											<label for="old_password"><b>Old Password</b></label>
										</div>										
										<div class="col-sm-5">
											<input class="form-control" id="old_password"  name="old_password" type="password" placeholder="Old Password">
										</div>
									</div>
									<div class="row">										
										<div class="col-sm-4">
											<label for="new_password"><b>New Password</b></label>
										</div>										
										<div class="col-sm-5">
											<input class="form-control" id="new_password"  name="new_password" type="password" placeholder="New Password">
										</div>
									</div>
									<div class="row">										
										<div class="col-sm-4">
											<label for="confirm_new_password"><b>Confirm New Password</b></label>
										</div>										
										<div class="col-sm-5">
											<input class="form-control" id="confirm_new_password"  name="confirm_new_password" type="password" placeholder="Confirm New Password">
										</div>
									</div>
								</div>
								<center>
									<input type="submit" class="btn btn-primary btn-sm">
								</center>
							</form>
						</div>
					</div>
					
					
				</div>
				
					<br>
			</div>
		</div>
<?php
	include_once("./common/footer.php");
?>