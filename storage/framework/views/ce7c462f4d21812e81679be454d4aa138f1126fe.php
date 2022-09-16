<form action="<?php echo e(url('adddiseases')); ?>" method="post">
    <?php echo csrf_field(); ?>
<input type="text" name="Diabetes mellitus" placeholder="Diabetes mellitus">
<input type="text" name="Heart failure" placeholder="Heart failure">
<input type="text" name="Acute coronary syndrome" placeholder="Acute coronary syndrome" >
<input type="text" name="Myocardial infarction" placeholder="Myocardial infarction" >
<input type="text" name="rheumatic heart disease" placeholder="rheumatic heart disease" >
<input type="text" name="Hypertension" placeholder="Hypertension" >
<input type="text" name="Portal Hypertension" placeholder="Portal Hypertension" >
<input type="text" name="Description1" placeholder="Description1" >

<input type="submit" value="ok">
</form><?php /**PATH C:\xampp\htdocs\minamor2os\resources\views/dataentry/diseasesdata.blade.php ENDPATH**/ ?>