

<?php $__env->startSection('title','Beitrag vom angemeldeten User löschen'); ?>

<?php $__env->startSection('content'); ?>




<div class="container">
    <div class="row justify-content-center">
     
            <div class="col-md-10">
          
                <div class="card mb-3">
                    <div class="card-body">
                    <?php if($user->hundename == null && $user->erfahrungen == null): ?>
                    <p> Keine Details vorhanden.</p>
                    <?php else: ?>
                        <p class="card-text"><?php echo e($user->hundename); ?></p>
                        <p class="card-text"><?php echo e($user->erfahrungen); ?></p>
                                               
                    </div>
                    <?php endif; ?>
                    <?php if(Auth::check() && Auth::user()->id === $user->id && isset($user->hundename) && isset($user->erfahrungen)): ?>  <!-- zuerst if-Abfrage an falscher Stelle gesetzt-->
                    <form action="/user/<?php echo e($user->id); ?>" method="POST">
    <?php echo csrf_field(); ?> 
    <?php echo method_field('DELETE'); ?> <!-- Methode für das Zurücksetzen -->

    <button type="submit" class="btn btn-danger">Beitrag zurücksetzen</button>
</form>

                </div>
                <?php else: ?>
                    <!-- Andernfalls zeige den Button nicht -->
                <?php endif; ?>
            </div>
   
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\pohlp\Pohl_Laravel\pauline_welpenblog\resources\views/user/show.blade.php ENDPATH**/ ?>