<form action="<?php echo e(url('login')); ?>" method="post">
    <?php echo csrf_field(); ?>
<input type="email" name="email">
<input type="password" name="password" >
<input type="submit" value="login">

</form><?php /**PATH D:\New folder\htdocs\minafiiinaal\resources\views/user/login.blade.php ENDPATH**/ ?>