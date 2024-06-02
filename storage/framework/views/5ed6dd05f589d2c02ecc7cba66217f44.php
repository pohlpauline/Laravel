

<?php $__env->startSection('title','Home'); ?>

<?php $__env->startSection('content'); ?>


<div class="container p-4">



<div class="row justify-content-md-center bilder">
 
  <div class="col-md-4">
  <img src="<?php echo e(asset('images/hund1.jpg')); ?>" alt="bild_welpe1"  >
  
  
 
 
  
  
  </div>
  


  <div class="col-md-4">
  <img src="<?php echo e(asset('images/hund5.jpg')); ?>" alt="bild_welpe5"  >
  
  </div>

  <div class="col-md-4">
  <img src="<?php echo e(asset('images/hund2.jpg')); ?>" alt="bild_welpe2"  >
  

  
  
  
  </div>
 
      
  <div class="text">
  <div class="col-md-12 justify-content-md-center ">
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.</p>
  </div>
  <div class="col-md-12  ">
    <Lorem>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.</p>
  </div>
  <a href="<?php echo e(route('comment.index')); ?>" class="btn btn-primary" id="button" title="Infos">weiter </a>
  </div>

  <?php if(auth()->guard()->guest()): ?> 
  <div class="text" id="guest">
    <p> Registrierte User können mehr über den Welpenblog erfahren.</p>
  </div>
  <?php endif; ?>

  <?php if(Auth::check()): ?>
  
    <p>Angemeldeter Benutzer: <?php echo e(Auth::user()->name); ?></p>
 <?php else: ?>
    <p>Kein Benutzer angemeldet</p>
  <?php endif; ?>


  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\pohlp\Pohl_Laravel\pauline_welpenblog\resources\views/home.blade.php ENDPATH**/ ?>