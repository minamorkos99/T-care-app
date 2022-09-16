<!DOCTYPE html>2
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Search for the patient</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo e(asset('design/css/searchbarstyle.css')); ?>" />

    <link
      href="https://fonts.googleapis.com/css2?family=Baloo+2&display=swap"
      rel="stylesheet"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
    />
    
  </head>
<body>
  <div class="header">
    <img class="logo" src="<?php echo e(asset('design/images/logo.png')); ?>" />    
    <h1>T-CARE</h1>
  </div>
  <div class="wrapper">
    <div class="container">
    <form action="<?php echo e(url('userdata')); ?>" method="post">
    <?php echo csrf_field(); ?>
       
            <span class="screen-reader-text">Search for...</span>
            <input type="search" class="search-field" placeholder="Enter patient’s ID..." type="number"name="search" title="" />
        </label>
    </form>
    </div>
  </div>
  <section class="section gradient-banner">
    <div class="shapes-container">
      <div class="shape" data-aos="fade-down-left" data-aos-duration="1500" data-aos-delay="100"></div>
      <div class="shape" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="100"></div>
      <div class="shape" data-aos="fade-up-right" data-aos-duration="1000" data-aos-delay="200"></div>
      <div class="shape" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200"></div>
      <div class="shape" data-aos="fade-down-left" data-aos-duration="1000" data-aos-delay="100"></div>
      <div class="shape" data-aos="fade-down-left" data-aos-duration="1000" data-aos-delay="100"></div>
      <div class="shape" data-aos="fade-down-right" data-aos-duration="500" data-aos-delay="200"></div>
      <div class="shape" data-aos="fade-down-right" data-aos-duration="500" data-aos-delay="100"></div>
      <div class="shape" data-aos="fade-up-right" data-aos-duration="500" data-aos-delay="200"></div>
      <div class="shape" data-aos="fade-down-left" data-aos-duration="500" data-aos-delay="100"></div>
      <div class="shape" data-aos="fade-up" data-aos-duration="500" data-aos-delay="0"></div>
      <div class="shape" data-aos="fade-down" data-aos-duration="500" data-aos-delay="0"></div>
      <div class="shape" data-aos="fade-up-right" data-aos-duration="500" data-aos-delay="100"></div>
      <div class="shape" data-aos="fade-down-left" data-aos-duration="500" data-aos-delay="0"></div>
    </div>
  </section>
    
  </body>
</html>
<?php /**PATH D:\New folder\htdocs\minafiiinaal\resources\views/dataentry/search.blade.php ENDPATH**/ ?>