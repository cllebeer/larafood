

<?php $__env->startSection('title', 'Cadastra novo Plano'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Cadastra novo Plano</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-body">
         <form action="<?php echo e(route('plans.store')); ?>" class="form" method="POST">
             <?php echo csrf_field(); ?>

             <div class="form-group">
                 <label>Nome:</label>
                 <input type="text" name="name" class="form-control" placeholder="Nome:">
             </div>
             <div class="form-group">
                 <label>Preço:</label>
                 <input type="text" name="price" class="form-control" placeholder="Preço:">
             </div>
             <div class="form-group">
                 <label>Descrição:</label>
                 <input type="text" name="description" class="form-control" placeholder="Descrição:">
             </div>
             <div class="form-group">
                 <button type="submit" class="btn btn-dark">Gravar</button>
             </div>
         </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>        
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\GitHub\PHP\larafood\resources\views/admin/pages/plans/create.blade.php ENDPATH**/ ?>