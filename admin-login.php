<?php
	$cur = "admin_login";
	include_once("./common/header.php");
?>

			<div class="col-sm-9" style="margin-top:1em;">
				<div class="row">
					<div class="col-sm-11" id="credit_history">
						<div class="dashboard_credit_header">
							<b>Login</b>
						</div>
						<div class="dashboard_credit_body" style="padding: 20px;">
							<form action="check-admin-login.php" method="post">
								<div class="form-group" style="margin: 20px;">
									<div class="row">										
										<div class="col-sm-4">
											<label for="username"><b>Username/Email</b></label>
										</div>										
										<div class="col-sm-5">
											<input class="form-control" id="username"  name="username" type="text" placeholder="Username">
										</div>
									</div>
									<div class="row">										
										<div class="col-sm-4">
											<label for="password"><b>Password</b></label>
										</div>										
										<div class="col-sm-5">
											<input class="form-control" id="password"  name="password" type="password" placeholder="Password">
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
			</div>
<?php
	include_once("./common/footer.php");
?>