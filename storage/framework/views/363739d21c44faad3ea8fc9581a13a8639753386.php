<!DOCTYPE html>3
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Profile</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('design/css/styleforprofile.css')); ?>">
</head>
<body>
	<div class="header">
        <img class="logo" src="<?php echo e(asset('design/images/logo.png')); ?>" />    
        <h1>T-CARE</h1>
   </div>  
   
<form name='' id='' action='' method='post'>
	<section class="personal">
			<div class="container">
				<div class="qr-bar">
					<div class="qr-img">
							<img class="qrimg" src="<?php echo e(asset('design/images/qrcode.png')); ?>" id="qrcode"><br>
							<h3>scan it</h3>
						</div>		
					</div>	
				<div class="p-bar">
					<h2 class="mb-5">Profile</h2>
					<div class="profile-tab-nav border-right">
						<div class="p-4">
							<div class="img-circle text-center mb-3">
								<img src="<?php echo e(asset('design/images/user-profile.jpg')); ?>" alt="Image" class="shadow">
							</div>
							<h4 class="text-center">User Name</h4>
						</div>
					</div>
					<div class="col-mid-8 mt-1">
						<div class="card mb-3 content">
							<h3 class="m-3 pt-3">Personal Info</h3>
							<div class="card-body">
								<div class="row">
									<div class="col-md-3">
										<h5>Full Name</h5>
									</div>
									<div class="col-mid-9 text-secondary">
										<input type="text" id="name" readonly="readonly" value="<?php echo e(Auth::guard('web')->user()->name); ?>"> 
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-md-3">
										<h5>Gender</h5>
									</div>
									<div class="col-md-9 text-secondary">
										<input type="text" id="gender" readonly="readonly" value="<?php echo e(Auth::guard('web')->user()->gender); ?>"> 
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-md-3">
										<h5>National ID</h5>
									</div>
									<div class="col-md-9 text-secondary">
										<input type="text" id="id" readonly="readonly" value="145012578"> 
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-md-3">
										<h5>Email</h5>
									</div>
									<div class="col-md-9 text-secondary">
										<input type="text" id="email" value="<?php echo e(Auth::guard('web')->user()->email); ?>" disabled> 
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-md-3">
										<h5>Password</h5>
									</div>
									<div class="col-md-9 text-secondary">
										<input type="password" id="password" value="<?php echo e(Auth::guard('web')->user()->password); ?>" disabled> 
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-md-3">
										<h5>Phone</h5>
									</div>
									<div class="col-md-9 text-secondary">
										<input type="text" id="phone" value="01095******" disabled> 
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-md-3">
										<h5>Emergency Number</h5>
									</div>
									<div class="col-md-9 text-secondary">
										<input type="text" id="emergency_no" value="010444******" disabled> 
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-md-3">
										<h5>Address</h5>
									</div>
									<div class="col-md-9 text-secondary">
										<input type="text" id="user-address" value="<?php echo e(Auth::guard('web')->user()->address); ?>" disabled> 
									</div>
								</div>
								<input type='button' name='edit' value='edit' id="editbtn" >
								<input type='button' name='save' value='save' id="savebtn" >
							</div>
						</div>
				</div>
			</div>
			
		</section>
	<section class="medical">
		<div class="container">
			<div class="m-bar">
				<h3 class="m-3 pt-3">Medical Info</h3>
				<div class="card-body">
					<div class="row">
						<div class="col-md-3">
							<h5>Blood Type</h5>
						</div>
						<div class="col-md-9 text-secondary">
							<input type="text" id="blood" readonly="readonly" value="B-"> 
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-3">
							<h5>Last Update</h5>
						</div>
						<div class="col-md-9 text-secondary">
							<input type="date" id="last-update" readonly="readonly" value="***/***/***"> 
						</div>
					</div>
					<hr>
					<button class="btn display-btn">Display</button>
				</div>
			</div>
		</div>
	</section>
</form>	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo e(asset('design/js/profile.js')); ?>"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\minagraduation\resources\views/user/profilehome.blade.php ENDPATH**/ ?>