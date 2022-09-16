<form action="<?php echo e(url('register')); ?>" method="post">


    <?php echo csrf_field(); ?>
    <input type="text" name="name">

    <input type="email" name="email" placeholder="email">
    <input type="password" name="password" placeholder="password">
    <input type="number" name="age" placeholder="mobile_number">
    <input type="text" name="gender" placeholder="gender">
    <input type="text" name="address" placeholder="address">

    <input type="submit" value="login">
    



</form><?php /**PATH C:\xampp\htdocs\minamor2os\resources\views/user/register.blade.php ENDPATH**/ ?>