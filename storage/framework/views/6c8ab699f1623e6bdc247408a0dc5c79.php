

<?php $__env->startSection('title','Kommentar aktualisieren'); ?>

<?php $__env->startSection('content'); ?>


<div class="container">
<div class="row">



<div class="card">
  <div class="card-header h4">
    
      Kommentar bearbeiten
  </div>
  <div class="card-body">
  <form action="<?php echo e(url('comment')); ?>/<?php echo e($comment->id); ?>" method="post"> <!--für edit brauche ich die id deswegen <?php echo e($comment->id); ?> -->
  <?php echo csrf_field(); ?>
  <?php echo method_field('PUT'); ?>
                        
                                                
                        <div class="form-group">
                                <label for="betreff">Betreff</label>
                                <input type="text" id="betreff" name="betreff"  
                                 class="form-control <?php echo e($errors->has('betreff') ? 'border-danger': ''); ?> "
                               value= " <?php echo isset($errors) && $errors->has('betreff') ? old('betreff') : $comment->betreff;?>"  ></input>
                               <small class="form-text text-danger"><?php echo $errors->first('betreff'); ?></small> <!--steht bitte betreff eingeben-->   
                        </div>
                        
                      
                        <div class="form-group">
                                <label for="kommentar">Kommentar über den Hund</label>
                                <textarea id="kommentar" name="kommentar"  
                                 class="form-control  <?php echo e($errors->has('kommentar') ? 'border-danger': ''); ?> "
                                 ><?php echo isset($errors) && $errors->has('kommentar') ? old('kommentar') : $comment->kommentar;?></textarea>
                                 <small class="form-text text-danger"><?php echo $errors->first('kommentar'); ?></small>  
                        </div>
                                                
                        <button type="submit" class="btn btn-success mt-2">
                                
                                 Kommentar aktualisieren
                        </button>
                </form>
 
    <a href="<?php echo e(url() ->previous()); ?>" class="btn btn-primary mt-2 float-end">
      <i class="fa-solid fa-circle-left fs-4"></i>
      zurück
    </a>
  </div>
</div>

</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\pohlp\Pohl_Laravel\pauline_welpenblog\resources\views/comment/edit.blade.php ENDPATH**/ ?>