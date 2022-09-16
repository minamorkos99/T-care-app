user data is 
<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php echo e($item->id); ?>

    <?php echo e($item->name); ?>


    <?php echo e($item->email); ?>






    <form action="<?php echo e(url('addmedical')); ?>" method="post">
        <?php echo csrf_field(); ?>
    
    
    
        <input type="number" name="hospital_id" placeholder="hospital_id">
        <input type="number" name="diseases_id" placeholder="diseases_id">
        <input type="number" name="doctor_id" placeholder="doctor_id" >
        <input type="text" name="bloodtype" placeholder="bloodtype" >
        <input type="text" name="user_id" placeholder="user_id" value="    <?php echo e($item->id); ?>

        ">
        <input type="submit" value="add">
    
    
        
    
          
    </form>


    <form action="<?php echo e(url('addhospital')); ?>" method="post">
        <?php echo csrf_field(); ?>
    <input type="text" name="hos_name" placeholder="hos_name">
    <input type="text" name="hos_add" placeholder="hos_add">
    <input type="text" name="hos_phone" placeholder="hos_phone" >
    <input type="submit" value="ok">
    </form>



<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH C:\xampp\htdocs\minamor2os\resources\views/dataentry/userdata.blade.php ENDPATH**/ ?>