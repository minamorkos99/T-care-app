<!DOCTYPE html>
<html>
<head>
	<title>SignUp and Login</title>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/app.css')); ?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="container" id="container">
<div class="form-container sign-up-container">

<form action="<?php echo e(url('register')); ?>" method="post">
     <?php echo csrf_field(); ?>
	<h1>Create Account</h1>
		<input type="text" placeholder="name"name="name">
		<input type="email" placeholder="Email"name="email">
        <input type="password" placeholder="password"name="password">	
        <input type="text" placeholder="age"name="age">
		<input type="text" placeholder="address"name="address">
        <input type="text" placeholder="state"name="state">


		<label><input id="m" type="radio" name="gender" value="male" required>Male</label>
		<label><input id="f" type="radio" name="gender" value="female">Female</label>		
		<input type="password" placeholder="confirm password">
	<button>SignUp</button>
</form>
</div>
<div class="form-container sign-in-container">
    <form action="<?php echo e(url('login')); ?>" method="post">
     <?php echo csrf_field(); ?>
		<h1>Sign In</h1>
		<!--<div class="social-container">
		<a href="#" class="social"><i class="fa fa-facebook"></i></a>
		<a href="#" class="social"><i class="fa fa-google"></i></a>
		<a href="#" class="social"><i class="fa fa-linkedin"></i></a>
	</div>
	<span>or use your account</span>-->
	<input type="email" name="email" placeholder="Email">
	<input type="password" name="password" placeholder="Password">
	<a href="#">Forgot Your Password</a>

<input type="submit" value="signin">	</form>
</div>
<div class="overlay-container">
	<div class="overlay">
		<div class="overlay-panel overlay-left">
			<h1>Welcome Back!</h1>
			<p>To keep connected with us please login with your personal info</p>
			<button class="ghost" id="signIn">Sign In</button>
		</div>
		<div class="overlay-panel overlay-right">
			<h1>Hello, Friend!</h1>
			<p>Enter your details and start journey with us</p>
			<button class="ghost" id="signUp">Sign Up</button>
		</div>
	</div>
</div>
</div>

<script type="text/javascript">
	const signUpButton = document.getElementById('signUp');
	const signInButton = document.getElementById('signIn');
	const container = document.getElementById('container');

	signUpButton.addEventListener('click', () => {
		container.classList.add("right-panel-active");
	});
	signInButton.addEventListener('click', () => {
		container.classList.remove("right-panel-active");
	});

	
	

</script>


</body>
</html>








<?php /**PATH C:\xampp\htdocs\minagraduation\resources\views/user/login.blade.php ENDPATH**/ ?>