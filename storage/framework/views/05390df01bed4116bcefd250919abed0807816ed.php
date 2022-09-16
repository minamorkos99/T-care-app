<!DOCTYPE html>1
<html lang="en">
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>T-CARE</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Bootstrap App Landing Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('design/images/logo.png')); ?>" />
  
  <!-- PLUGINS CSS STYLE -->
  <link rel="stylesheet" href="<?php echo e(asset('design/plugins/bootstrap/bootstrap.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('design/plugins/themify-icons/themify-icons.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('design/plugins/slick/slick.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('design/plugins/slick/slick-theme.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('design/plugins/fancybox/jquery.fancybox.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('design/plugins/aos/aos.css')); ?>">

  <!-- CUSTOM CSS -->
  <link href="<?php echo e(asset('design/css/styleforhome.css')); ?>" rel="stylesheet">

</head>

<body class="body-wrapper" data-spy="scroll" data-target=".privacy-nav">
<nav class="navbar main-nav navbar-expand-lg px-2 px-sm-0 py-2 py-lg-0">
  <div class="container">
    <a class="navbar-brand" href="index.html">
		<div class="logo">
			<img  src="<?php echo e(asset('design/images/logo.png')); ?>" alt="logo"><p>T-CARE</p>
		</div>
	</a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        
        <li class="nav-item @homepage">
			<form action="<?php echo e(url('user/profilehome')); ?>" method="get">
				<input type="submit"class="nav-link" value="home">
	</form>
		  </li>
        <li class="nav-item @about">
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item @contact">
          <a class="nav-link" href="#contact">Contact</a>
        </li>
        <div class="dropdown">
			<a class="btn dropdown-toggle ccn-profile-menu" href="#" data-toggle="dropdown" aria-expanded="false">
				<img class="rounded-circle" src="<?php echo e(asset('design/images/profileimg.png')); ?>">
			</a>
			<div class="dropdown-menu" x-placement="top-start" style="position: absolute; transform: translate3d(-9px, -5px, 0px); top: 0px; left: 0px; will-change: transform;">
				<div class="user_set_header">
					<img class="float-left rounded-circle" src="" alt=""> <!-- src="user's img address" alt ="user's name"-->
					<p><?php echo e(Auth::guard('web')->user()->name); ?><br><span class="address"><?php echo e(Auth::guard('web')->user()->id); ?></span></p>
				</div>
				<div class="user_setting_content">

					<form action="<?php echo e(url('profilehome/')); ?>" method="post">
						<?php echo csrf_field(); ?>
						<input type="submit" class="dropdown-item" value="profilenew">
					</form>
					<form action="<?php echo e(url('logout/')); ?>" method="post">
						<?php echo csrf_field(); ?>
						<input type="submit" class="dropdown-item" value="logout">
					</form>
					
 				</div>			  
			</div>
		  </div>		
      </ul>
    </div>
  </div>
</nav>

<!--====================================
=            Hero Section            =
=====================================-->
<section class="section gradient-banner">
	<div class="shapes-container">
		<div class="shape" data-aos="fade-down-left" data-aos-duration="1500" data-aos-delay="100"></div>
		<div class="shape" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="100"></div>
		<div class="shape" data-aos="fade-up-right" data-aos-duration="1000" data-aos-delay="200"></div>
		<div class="shape" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200"></div>
		<div class="shape" data-aos="fade-down-left" data-aos-duration="1000" data-aos-delay="100"></div>
		<div class="shape" data-aos="fade-down-left" data-aos-duration="1000" data-aos-delay="100"></div>
		<div class="shape" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300"></div>
		<div class="shape" data-aos="fade-down-right" data-aos-duration="500" data-aos-delay="200"></div>
		<div class="shape" data-aos="fade-down-right" data-aos-duration="500" data-aos-delay="100"></div>
		<div class="shape" data-aos="zoom-out" data-aos-duration="2000" data-aos-delay="500"></div>
		<div class="shape" data-aos="fade-up-right" data-aos-duration="500" data-aos-delay="200"></div>
		<div class="shape" data-aos="fade-down-left" data-aos-duration="500" data-aos-delay="100"></div>
		<div class="shape" data-aos="fade-up" data-aos-duration="500" data-aos-delay="0"></div>
		<div class="shape" data-aos="fade-down" data-aos-duration="500" data-aos-delay="0"></div>
		<div class="shape" data-aos="fade-up-right" data-aos-duration="500" data-aos-delay="100"></div>
		<div class="shape" data-aos="fade-down-left" data-aos-duration="500" data-aos-delay="0"></div>
	</div>
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-6 order-2 order-md-1 text-center text-md-left">
				<h1 class="text-white font-weight-bold mb-4">Digitalize your medical record </h1>				
			</div>
			<div class="col-md-6 text-center order-1 order-md-2">
				<img class="img-fluid" src="<?php echo e(asset('design/images/Scan-QR-Code.jpg')); ?>" alt="screenshot">
			</div>
		</div>
	</div>
</section>
<!--====  End of Hero Section  ====-->

<section class="section pt-0 position-relative pull-top">
	<div class="container">
		<div class="rounded shadow p-5 bg-white">
			<div class="row">
				<div class="col-lg-4 col-md-6 mt-5 mt-md-0 text-center">
					<i class="ti-paint-bucket text-primary h1"></i>
					<h3 class="mt-4 text-capitalize h5 ">our services</h3>
					<p class="regular text-muted">description</p>
				</div>
				<div class="col-lg-4 col-md-6 mt-5 mt-md-0 text-center">
					<i class="ti-shine text-primary h1"></i>
					<h3 class="mt-4 text-capitalize h5 ">-------</h3>
					
					<p class="regular text-muted">description</p>
				</div>
				<div class="col-lg-4 col-md-12 mt-5 mt-lg-0 text-center">
					<i class="ti-thought text-primary h1"></i>
					<h3 class="mt-4 text-capitalize h5 ">-------</h3>
					<p class="regular text-muted">description</p>
					</p>
				</div>
			</div>
		</div>
	</div>
</section>
<div id= "about" class="about-us">
	<h2>About-us</h2>
	<p class="about-para">Our mission is to provide healthcare and service tailored to each patient’s individual needs by developing a medical bracelet with QR code that contains the personal information about any person, and it also contains the medical information which can be viewed by some hospitals. </p>
	<img class="about-us-img" src="<?php echo e(asset('design/images/aboutus-img.jpg')); ?>" >
</div>

<!--==================================
=            Feature Grid            =
===================================-->
<section class="feature section pt-0">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 ml-auto align-self-center">
				<div class="feature-content">
					<!-- Feature Title -->
					<h2>Join with us through <a
							href="">Mobile App</a></h2>
					<!-- App Description -->
					<p>description about our app</p>
				</div>
			</div>
			<div class="col-lg-6 mr-auto justify-content-center">
				<!-- Feature mockup -->
				<div class="image-content" data-aos="fade-left">
					<img class="img-fluid" src="<?php echo e(asset('design/images/medical.jpg')); ?>" alt="ipad">
				</div>
			</div>
		</div>
	</div>
</section>

<div id="contact" class="contact-area">
	<form action="action_page.php">
  
	  <label for="fname">First Name</label>
	  <input type="text" id="fname" name="firstname" placeholder="Your name..">
  
	  <label for="lname">Last Name</label>
	  <input type="text" id="lname" name="lastname" placeholder="Your last name..">
  
	  <!--<label for="country">Country</label>
	  <select id="country" name="country">
		<option value="country-name">country-name</option>
	  </select>-->
  
	  <label for="subject">Subject</label>
	  <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
  
	  <input type="submit" value="Submit">
  
	</form>
  </div>

<!--====  End of Feature Grid  ====-->

<!--============================
=            Footer            =
=============================-->
<footer>
  <div class="footer-main">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-12 m-md-auto align-self-center">
          <div class="block">
            <a href="index.html">
				<div class="footer-logo">
					<img src="<?php echo e(asset('design/images/logo.png')); ?>" alt="footer-logo"><p>T-CARE</p>
				</div>
			</a>
            <!-- Social Site Icons -->
            <ul class="social-icon list-inline">
              <li class="list-inline-item">
                <a href="https://www.facebook.com/themefisher"><i class="ti-facebook"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="https://twitter.com/themefisher"><i class="ti-twitter"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.instagram.com/themefisher/"><i class="ti-instagram"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>	
</footer>

  <!-- To Top -->
  <div class="scroll-top-to">
    <i class="ti-angle-up"></i>
  </div>
  
  <!-- JAVASCRIPTS -->
  <script src="<?php echo e(asset('design/plugins/jquery/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(asset('design/plugins/bootstrap/bootstrap.min.js')); ?>"></script>
  <script src="<?php echo e(asset('design/plugins/slick/slick.min.js')); ?>"></script>
  <script src="<?php echo e(asset('design/plugins/fancybox/jquery.fancybox.min.js')); ?>"></script>
  <script src="<?php echo e(asset('design/plugins/syotimer/jquery.syotimer.min.js')); ?>"></script>
  <script src="<?php echo e(asset('design/plugins/aos/aos.js')); ?>"></script>
  <!-- google map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgeuuDfRlweIs7D6uo4wdIHVvJ0LonQ6g"></script>
  <script src="<?php echo e(asset('design/plugins/google-map/gmap.js')); ?>"></script>
  
  <script src="<?php echo e(asset('design/js/script.js')); ?>"></script>
</body>

</html><?php /**PATH C:\xampp\htdocs\minagraduation\resources\views/user/home.blade.php ENDPATH**/ ?>