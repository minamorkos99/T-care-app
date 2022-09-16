<form action="<?php echo e(url('addhospital')); ?>" method="post">
    <?php echo csrf_field(); ?>
<input type="text" name="hos_name" placeholder="hos_name">
<input type="text" name="hos_add" placeholder="hos_add">
<input type="text" name="hos_phone" placeholder="hos_phone" >
<input type="submit" value="ok">
</form><?php /**PATH C:\xampp\htdocs\minamor2os\resources\views/dataentry/hospitaldata.blade.php ENDPATH**/ ?>