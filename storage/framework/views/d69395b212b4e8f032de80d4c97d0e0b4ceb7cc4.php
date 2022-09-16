user data is 
<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php echo e($item->id); ?>

    <?php echo e($item->name); ?>


    <?php echo e($item->email); ?>


<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



    <form action="<?php echo e(url('addmedical')); ?>" method="post">
        <?php echo csrf_field(); ?> 
    
        <input type="number" name="hospital_id" placeholder="hospital_id">
        <input type="number" name="diseases_id" placeholder="diseases_id">
        <input type="number" name="doctor_id" placeholder="doctor_id" >
        <input type="text" name="bloodtype" placeholder="bloodtype" >
        <input type="text" name="user_id" placeholder="user_id" value="<?php echo e($item->id); ?>">
        <input type="submit" value="add">
          
    </form>
    
    
    <form action="<?php echo e(url('updatemedical')); ?>" method="post">
        <?php echo csrf_field(); ?> 
    
        <input type="number" name="hospital_id" placeholder="hospital_id">
        <input type="number" name="diseases_id" placeholder="diseases_id">
        <input type="number" name="doctor_id" placeholder="doctor_id" >
        <input type="text" name="bloodtype" placeholder="bloodtype" >
        <input type="text" name="user_id" placeholder="user_id" value="<?php echo e($item->id); ?>">
        <input type="submit" value="update">
          
    </form>


    <form action="<?php echo e(url('addhospital')); ?>" method="post">
        <?php echo csrf_field(); ?>
    <input type="text" name="hos_name" placeholder="hos_name">
    <input type="text" name="hos_add" placeholder="hos_add">
    <input type="text" name="hos_phone" placeholder="hos_phone" >
    <input type="submit" value="ADD">
    </form>

    <form action="<?php echo e(url('updatehospital')); ?>" method="put">
        <?php echo csrf_field(); ?>
    <input type="number" name="id" placeholder="id">

    <input type="text" name="hos_name" placeholder="hos_name">
    <input type="text" name="hos_add" placeholder="hos_add">
    <input type="text" name="hos_phone" placeholder="hos_phone" >
    <input type="submit" value="update">
    </form>


    
    <form action="<?php echo e(url('adddiseases')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <input type="text" name="Diabetes mellitus" placeholder="Diabetes_mellitus">
        <input type="text" name="Heart failure" placeholder="Heart_failure">
        <input type="text" name="Acute coronary syndrome" placeholder="Acute_coronary_syndrome" >
        <input type="text" name="Myocardial infarction" placeholder="Myocardial_infarction" >
        <input type="text" name="rheumatic heart disease" placeholder="rheumatic_heart disease" >
        <input type="text" name="Hypertension" placeholder="Hypertension" >
        <input type="text" name="Portal Hypertension" placeholder="Portal_Hypertension" >
        <input type="text" name="Description1" placeholder="Description1" >


    <input type="submit" value="ADD">
    </form>

    
    <form action="<?php echo e(url('updatediseases')); ?>" method="put">
        <?php echo csrf_field(); ?>
    <input type="number" name="id" placeholder="id">

    <input type="text" name="Diabetes mellitus" placeholder="Diabetes mellitus">
    <input type="text" name="Heart failure" placeholder="Heart failure">
    <input type="text" name="Acute coronary syndrome" placeholder="Acute coronary syndrome" >
    <input type="text" name="Myocardial infarction" placeholder="Myocardial infarction" >
    <input type="text" name="rheumatic heart disease" placeholder="rheumatic heart disease" >
    <input type="text" name="Hypertension" placeholder="Hypertension" >
    <input type="text" name="Portal Hypertension" placeholder="Portal Hypertension" >
    <input type="text" name="Description1" placeholder="Description1" >


    <input type="submit" value="update">
    </form>


    <form action="<?php echo e(url('adddoctor')); ?>" method="post">
    <?php echo csrf_field(); ?>
        <input type="text" name="id" placeholder="id">
        <input type="text" name="name" placeholder="name">
        <input type="text" name="specialist" placeholder="specialist" >
        <input type="text" name="phone" placeholder="phone" >



        <input type="submit" value="add">
    </form><?php /**PATH D:\New folder\htdocs\minamor2os\resources\views/dataentry/userdata.blade.php ENDPATH**/ ?>