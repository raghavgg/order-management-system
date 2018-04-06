<?php
	$cur = "register";
	include_once("./common/header.php");
?>
		<div class="col-sm-9" style="margin-top:1em;">
				<div class="row">
					<div class="col-sm-11" id="credit_history">
						<div class="dashboard_credit_header">
							<b>Register</b>
						</div>
						<div class="dashboard_credit_body">
							<?php 
							if(isset($_GET['status']) AND $_GET['status'] == 'S')
							{
							?>
								<div class="alert alert-success">Your registeration has been done Successfully! Please login to continue</div>
							<?php
							}elseif(isset($_GET['status']) AND $_GET['status'] == 'F')
							{
							?>
								<div class="alert alert-danger">There is some error in Creating your account! Please fill correct information and try again</div>
							<?php
							}
							?>
							<form method="post" action="./common/register.php">	
								<div class="form-group" style="margin: 20px;">
									<div class="row">										
										<div class="col-sm-4">
											<label for="first_name"><b>First Name</b></label>
										</div>										
										<div class="col-sm-5">
											<input class="form-control" id="first_name"  name="first_name" type="text" placeholder="First Name" required>
										</div>
									</div>
									<div class="row">										
										<div class="col-sm-4">
											<label for="last_name"><b>Last Name</b></label>
										</div>										
										<div class="col-sm-5">
											<input class="form-control" id="last_name"  name="last_name" type="text" placeholder="Last Name">
										</div>
									</div>
									<div class="row">										
										<div class="col-sm-4">
											<label for="store_name"><b>Store Name</b></label>
										</div>										
										<div class="col-sm-5">
											<input class="form-control" id="store_name"  name="store_name" type="text" placeholder="Store Name" required>
										</div>
									</div>
									<div class="row">										
										<div class="col-sm-4">
											<label for="dob"><b>Practice No</b></label>
										</div>										
										<div class="col-sm-5">
											<input class="form-control" id="practice_no"  name="practice_no" type="text" placeholder="Practice No">
										</div>
									</div>
									<div class="row">										
										<div class="col-sm-4">
											<label for="gender"><b>Gender</b></label>
										</div>										
										<div class="col-sm-5">
											<select class="form-control" id="gender"  name="gender" placeholder="Gender">
											<option>Select Gender</option>
											<option value="male">Male</option>
											<option value="female">Female</option>
											</select>
										</div>
									</div>
									<div class="row">										
										<div class="col-sm-4">
											<label for="phone"><b>Phone</b></label>
										</div>										
										<div class="col-sm-5">
											<input class="form-control" id="phone"  name="phone" type="text" placeholder="Phone"  required>
										</div>
									</div>
									<div class="row">										
										<div class="col-sm-4">
											<label for="email"><b>Email</b></label>
										</div>										
										<div class="col-sm-5">
											<input class="form-control" id="email"  name="email" type="text" placeholder="Email"  required>
										</div>
									</div>
									<div class="row">										
										<div class="col-sm-4">
											<label for="email"><b>Website</b></label>
										</div>										
										<div class="col-sm-5">
											<input class="form-control" id="website"  name="website" type="text" placeholder="Website">
										</div>
									</div>
									<div class="row">										
										<div class="col-sm-4">
											<label for="email"><b>RAZORITE Member No</b></label>
										</div>										
										<div class="col-sm-5">
											<input class="form-control" id="member_no"  name="member_no" type="text" placeholder="Member No">
										</div>
									</div>
									<div class="row">										
										<div class="col-sm-4">
											<label for="email"><b>Password</b></label>
										</div>										
										<div class="col-sm-5">
											<input class="form-control" id="password"  name="password" type="password" placeholder="Password"  required>
										</div>
									</div>
									<div class="row">										
										<div class="col-sm-4">
											<label for="email"><b>Confirm Password</b></label>
										</div>										
										<div class="col-sm-5">
											<input class="form-control" id="confirm_password"  name="confirm_password" type="password" placeholder="Confirm Password"  required>
										</div>
									</div>
									<div class="row">										
										<div class="col-sm-4">
											<label for="address"><b>Address</b></label>
										</div>										
										<div class="col-sm-5">
											<input class="form-control" id="address"  name="address" type="text" placeholder="Address">
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