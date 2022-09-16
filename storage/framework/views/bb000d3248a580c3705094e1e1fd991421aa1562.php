<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subject): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <input type="text" name="hos_name" value="<?php echo e($subject->hos_name); ?>"> 
 <input type="text" name="hos_name" value="<?php echo e($subject->hos_add); ?>"> 
 <input type="text" name="hos_name" value="<?php echo e($subject->hos_phone); ?>"> 
 

 <form action="<?php echo e(url('addhospita')); ?>" method="post">
        <?php echo csrf_field(); ?>
        
        <input type="text" name="hos_name" placeholder="hos_name"> 
        <input type="text" name="hos_add" placeholder="hos_add"> 
        <input type="text" name="hos_phone" placeholder="hos_phone"> 
        
        <input type="submit" value="add"> 

 
   </form>

   <br>
 <form action="<?php echo e(url('updatehos/'.$subject->id)); ?>" method="post">
<?php echo csrf_field(); ?>
<?php echo method_field('PUT'); ?>
<input type="text" name="hos_name" value="<?php echo e($subject->hos_name); ?>"> 
 <input type="text" name="hos_add" value="<?php echo e($subject->hos_add); ?>"> 
 <input type="text" name="hos_phone" value="<?php echo e($subject->hos_phone); ?>"> 
 
  <input type="submit" value="update"> 

 </form>
    
 <form action="<?php echo e(url('destroyhospital/'.$subject->id)); ?>" method="DELETE">
         <button>delete</button>
    </form>


<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH D:\New folder\htdocs\minamor2os\resources\views/dataentry/hospital/hosdata.blade.php ENDPATH**/ ?>