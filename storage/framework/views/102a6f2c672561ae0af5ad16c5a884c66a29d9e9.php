

<?php $__env->startSection('title', "Detalhes do plano <?php echo e($plan->name); ?>"); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Detalhes do plano - <b><?php echo e($plan->name); ?></b></h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-body">
            <ul>
                <li>
                    <strong>Nome: </strong> <?php echo e($plan->name); ?>

                </li>
                <li>
                    <strong>URL: </strong><?php echo e($plan->url); ?>

                </li>
                <li>
                    <strong>Preço: </strong> R$<?php echo e(number_format($plan->price, 2,',','.')); ?>

                </li>
                <li>
                    <strong>Descrição: </strong> <?php echo e($plan->description); ?>

                </li>
            </ul>
        </div>
    </div>
<?php $__env->stopSection(); ?>    
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\GitHub\PHP\larafood\resources\views/admin/pages/plans/show.blade.php ENDPATH**/ ?>