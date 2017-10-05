<!DOCTYPE html>
<html>
    <head>
        <title>
        </title>
        <?php $__env->startSection('head'); ?>


    <?php $__env->stopSection(); ?>
    </head>
    <body>
        <?php $__env->startSection('Bar'); ?>


     <?php $__env->stopSection(); ?>

     <?php $__env->startSection('con'); ?>
        <table class="table table-hover" width="100">
            <thead>
                <th>
                    id
                    ClydeUpload::upload($request->file('image'), $request->file('image')->getClientOriginalName());
                </th>
                <th>
                    name

                </th>
            </thead>
            <tbody>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $price): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr align="center">
                    <td>
                        <?php echo e($price->id); ?>

                    </td>
                    <td>
                        <?php echo e($price->name); ?>

                    </td>
                    <td>
                        <form action="fix/<?php echo e($price->id); ?>" class="form-inline" method="post">
                            <a class="btn btn-primary" href="fix/<?php echo e($price->id); ?>">
                                Show
                            </a>
                            |
                            <a class="btn btn-success" href="fix/<?php echo e($price->id); ?>/edit">
                                Edit
                            </a>
                            |
                            <input name="_method" type="hidden" value="Delete">
                                <button class="btn btn-danger">
                                    Delete
                                </button>
                                <?php echo e(csrf_field()); ?>

                            </input>
                        </form>
                        <td>
                        </td>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <?php $__env->stopSection(); ?>



     <?php $__env->startSection('foot'); ?>


     <?php $__env->stopSection(); ?>
    </body>
</html>

<?php echo $__env->make("tem", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>