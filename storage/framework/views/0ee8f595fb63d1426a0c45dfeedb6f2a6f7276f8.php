<form action="<?php echo e(url('addmedical')); ?>" method="post">
    <?php echo csrf_field(); ?>



    <input type="number" name="hospital_id" placeholder="hos_name">
    <input type="number" name="diseases_id" placeholder="hos_add">
    <input type="number" name="doctor_id" placeholder="hos_phone" >
    <input type="text" name="bloodtype" placeholder="hos_phone" >
    <input type="text" name="user_id" placeholder="hos_phone" >
    <input type="submit" value="ok">


    

      
</form><?php /**PATH C:\xampp\htdocs\minamor2os\resources\views/dataentry/profile.blade.php ENDPATH**/ ?>