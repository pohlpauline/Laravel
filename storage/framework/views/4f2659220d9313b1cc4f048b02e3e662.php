

<?php $__env->startSection('title','Blog'); ?>

<?php $__env->startSection('content'); ?>

<div class="container p-3 ">
   <div class="row">
    <div class="col-md-12">
        <div class="card text-center m-2 ">
            <div class="card-header h3"> Allgemeine Infos</div>
            <?php if($hundeinfo->isEmpty()): ?>
            <p>Keine Hundeinfo vorhanden.</p>
            <?php else: ?>
            <?php $__currentLoopData = $hundeinfo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hundeitem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card-body bg-primary text-light">
               <?php if(empty ($hundeitem->hundename ) ||
               empty ($hundeitem->hundeinfo) ||
               empty ($hundeitem->erfahrungen) ): ?>
               <p>Keine Informationen gefunden.</p>
               <?php else: ?>

                <h3> <?php echo e($hundeitem->hundeinfo); ?></h3>
                <p> <?php echo e($hundeitem->hundename); ?> </p>
                <p> <?php echo e($hundeitem->erfahrungen); ?> </p>
                <?php endif; ?>
                
               
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>

    </div>

   </div> 
   <!--neuen Beitrag erstellen button-->
  <!-- <a href="besitzer/create" class="btn btn-success">
      <i class="fa-solid fa-circle-plus"></i>
             Neuen Kommentar erstellen
    </a>-->

    <!--Test-->
    <div class="card m-1">
  <div class="card-header h2">
    
    Kommentieren
  </div>
  <div class="card-body">
  <form action="<?php echo e(url('besitzer')); ?>" method="post"> <!--für store  -->
  <?php echo csrf_field(); ?>
                        <div class="form-group">
                                <label for="betreff">Betreff</label>
                                <input type="text" id="betreff" name="betreff" value="<?php echo e(old('betreff')); ?>"
                                 class="form-control" />
                                 <small class="form-text text-danger"><?php echo $errors->first('betreff'); ?></small>
                        </div>
                        
                        <div class="form-group">
                                <label for="name">Name des Hundes</label>
                                <input type="text" id="name" name="hundename" value="<?php echo e(old('hundename')); ?>"
                                 class="form-control" />
                                 <small class="form-text text-danger"><?php echo $errors->first('hundename'); ?></small>
                        </div>
                                                
                        <div class="form-group">
                                <label for="kommentar">Kommentar</label>
                                <textarea id="kommentar" name="kommentar"  
                                 class="form-control"><?php echo e(old('kommentar')); ?></textarea>
                                 <small class="form-text text-danger"><?php echo $errors->first('kommentar'); ?></small> <!--Fehlermeldung wird unten angezeigt, die erste Fehlermeldung wird angezeigt-->
                        </div>
         
                                                
                        <button type="submit" class="btn btn-success mt-2">
                                <i class="fa-solid fa-circle-plus fs-1"></i>
                                neuen Beitrag anlegen
                        </button>
                </form>
 
    <a href="<?php echo e(url('/')); ?>" class="btn btn-primary mt-2 float-end">
      <i class="fa-solid fa-circle-left fs-4"></i>
      Home
    </a>
  </div>
</div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\pohlp\Pohl_Laravel\pauline_welpenblog\resources\views/besitzer/index.blade.php ENDPATH**/ ?>