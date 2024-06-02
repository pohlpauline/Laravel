

<?php $__env->startSection('title','Über uns'); ?>

<?php $__env->startSection('content'); ?>


<div class="container">



<div class="row justify-content-md-center hundeteam">

  <div class="col-md-4">
  <img src="<?php echo e(asset('images/hundeteam.jpg')); ?>" alt="hundeteam" id="hundeteam">
  </div>

  
  <div class="col-md-8">
    <h2 class="abouttitel">Wer wir sind...</h2>
    
            <?php $__currentLoopData = $about; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aboutitem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          
               <?php if(empty ($aboutitem->text )): ?>
               <p>Kein Text enthalten.</p>
               <?php else: ?>
                <p class="abouttext pos"> <?php echo e($aboutitem->text); ?> </p>
           
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   </div> 

  </div>
  </div>
  


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\pohlp\Pohl_Laravel\pauline_welpenblog\resources\views/about/index.blade.php ENDPATH**/ ?>