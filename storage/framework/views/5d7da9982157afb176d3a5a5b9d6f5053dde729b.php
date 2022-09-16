welcome
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="<?php echo e(asset('design/css/profilestyle.css')); ?>" />
</head>
<body>
    <div class="header">
        <img class="logo" src="logo.png" />    
        <h1>T-CARE</h1>
   </div>  
   <div id="page-wraper">
    <!-- Sidebar Menu -->
    <div class="responsive-nav">
      <i class="fa fa-bars" id="menu-toggle"></i>
      <div id="menu" class="menu">
        <i class="fa fa-times" id="menu-close"></i>
        <div class="container">
          <div class="image">
            <a href="#"><img src="<?php echo e(asset('design/images/profile-image.jpg')); ?>" alt="" /></a>
          </div>
          <div class="author-content">
            <h4>User's name</h4>
            <!--<span></span>-->
          </div>
          <nav class="main-nav" role="navigation">
            <ul class="main-menu">
              <li><a href="#section1">Personal Info</a></li>
              <li><a href="#section2">Medical History</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>

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
</section>
<!--====  End of Hero Section  ====-->

</body>
</html><?php /**PATH D:\New folder\htdocs\minafiiinaal\resources\views/user/profile.blade.php ENDPATH**/ ?>