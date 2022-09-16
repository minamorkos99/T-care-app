<form action="<?php echo e(url('addmedical')); ?>" method="post">
    <?php echo csrf_field(); ?>



    <input type="number" name="hospital_id" placeholder="hospital_id">
    <input type="number" name="diseases_id" placeholder="diseases_id">
    <input type="number" name="doctor_id" placeholder="doctor_id" >
    <input type="text" name="bloodtype" placeholder="bloodtype" >
    <input type="text" name="user_id" placeholder="user_id" >
    <input type="submit" value="add">


    

      
</form><?php /**PATH D:\New folder\htdocs\minamor2os\resources\views/dataentry/profile.blade.php ENDPATH**/ ?>