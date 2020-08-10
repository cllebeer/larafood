

<?php $__env->startSection('title', 'Planos'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Planos</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
 filtro
        </div>
        <div class="card-body">
        <table class="table table-condensed">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th width="50">Ações</th>
                </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                  <td><?php echo e($plan->name); ?></td>
                  <td>R$ <?php echo e(number_format($plan->price, 2,',','.')); ?></td>
                  <td style="width: 10px;"><a href="<?php echo e(route('plans.show', $plan->url)); ?>" class="btn btn-warning">Ver</a></td>
              </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        </div>
        <div class="card-footer">
         <?php echo $plans->links(); ?>

        </div>
    </div>
    <a href="<?php echo e(route('plans.create')); ?>" class="btn btn-dark">Novo</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\GitHub\PHP\larafood\resources\views/admin/pages/plans/index.blade.php ENDPATH**/ ?>