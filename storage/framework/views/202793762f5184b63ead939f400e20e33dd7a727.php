<form action="<?php echo e(url('login')); ?>" method="post">
    <?php echo csrf_field(); ?>
<input type="email" name="email">
<input type="password" name="password" >
<input type="submit" value="login">

</form><?php /**PATH C:\xampp\htdocs\minamor2os\resources\views/user/login.blade.php ENDPATH**/ ?>