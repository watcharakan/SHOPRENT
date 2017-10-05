<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php $__env->startSection('head'); ?>


    <?php $__env->stopSection(); ?>
</head>
<body>

     <?php $__env->startSection('Bar'); ?>


     <?php $__env->stopSection(); ?>

     <?php $__env->startSection('con'); ?>
     

     <?php $__env->stopSection(); ?>



     <?php $__env->startSection('foot'); ?>


     <?php $__env->stopSection(); ?>

</body>

</html>
<?php echo $__env->make("tem", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>