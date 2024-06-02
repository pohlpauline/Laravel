

<?php $__env->startSection('title','Blog'); ?>

<?php $__env->startSection('content'); ?>
<div class="container p-3">
<?php if(session()->has('msg_success')): ?>
    <div class="alert alert-success">
        <?php echo session()->get('msg_success'); ?>

    </div>
<?php endif; ?>
<div class="container p-3">
<?php if(session()->has('nachricht')): ?>
    <div class="alert alert-success">
        <?php echo session()->get('nachricht'); ?>

    </div>
<?php endif; ?>


<div class="container p-3 ">
   <div class="row">
    <div class="col-md-12">
        <div class="card text-center m-2 ">
            <div class="card-header h3">Kommentare</div>
            <?php if($comment->isEmpty()): ?>
            <p>Keine Kommentare vorhanden.</p>
            <?php else: ?>
            <?php $__currentLoopData = $comment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $commentitem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card-body bg-primary text-light">
               <?php if(empty ($commentitem->hundename ) ||
               empty ($commentitem->betreff) ||
               empty ($commentitem->kommentar) ): ?>
               <p>Keine Kommentare gefunden.</p>
               <?php else: ?>
              
                <h3> <?php echo e($commentitem->hundename); ?></h3>
                <p> <?php echo e($commentitem->betreff); ?> </p>
                <p> <?php echo e($commentitem->kommentar); ?> </p>
                <?php if(Auth::check() && Auth::id()=== $commentitem->user_id): ?>
                 <!--Bearbeiten-Button-->
               <a href="/comment/<?php echo e($commentitem ->id); ?>/edit" class="ms-2 btn btn-outline-primary" title="Hundenamen bearbeiten">
            <i class="fa-solid fa-pen-to-square h4 m-0 me-1 text-dark"></i>
           
            <?php endif; ?>
            <?php endif; ?>
              </a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>

    </div>
    <!--pagination-->
    <div class="pagination"><?php echo e($comment->links('pagination::bootstrap-4')); ?></div>

   </div> 
  

    <!--Formular:neuen Kommentar erstellen-->
    <?php if(Auth::check() && Auth::id()): ?>
    <div class="card m-1">
  <div class="card-header h2">
    Kommentieren
  </div>
  <div class="card-body">
  <form action="<?php echo e(url('comment')); ?>" method="post"> <!--für store  -->
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
  <?php endif; ?>
</div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\pohlp\Pohl_Laravel\pauline_welpenblog\resources\views/comment/index.blade.php ENDPATH**/ ?>