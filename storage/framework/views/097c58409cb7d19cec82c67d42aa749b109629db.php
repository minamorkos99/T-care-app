<form action="<?php echo e(url('adddiseases')); ?>" method="post">
    <?php echo csrf_field(); ?>
<input type="text" name="Diabetes_mellitus" placeholder="Diabetes_mellitus">
<input type="text" name="Heart_failure" placeholder="Heart_failure">
<input type="text" name="Acute_coronary_syndrome" placeholder="Acute_coronary_syndrome" >
<input type="text" name="Myocardial_infarction" placeholder="Myocardial_infarction" >

<input type="text" name="rheumatic_heart_disease" placeholder="rheumatic_heart disease" >

<input type="text" name="Hypertension" placeholder="Hypertension" >
<input type="text" name="Portal_Hypertension" placeholder="Portal_Hypertension" >
<input type="text" name="Description1" placeholder="Description1" >

<input type="submit" value="ok">
</form><?php /**PATH D:\New folder\htdocs\minamor2os\resources\views/dataentry/diseasesdata.blade.php ENDPATH**/ ?>