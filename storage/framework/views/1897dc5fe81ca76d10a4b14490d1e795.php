<nav class="navbar navbar-expand-md">
    <div class="container">
        <a class="navbar-brand text-dark fs-4" href="<?php echo e(url('/')); ?>">
            welpenblog
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
          <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link <?php echo e(Request::is('/') ? 'current': ''); ?>" href="<?php echo e(url('/')); ?>">Home</a>
              
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo e(Request::is('about*') ? 'current': ''); ?>" href="<?php echo e(url('about')); ?>">Über uns</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo e(Request::is('user*') ? 'current': ''); ?>" href="<?php echo e(url('user')); ?>">Erfahrungsberichte von Hundebesitzer</a>
            </li>

        </ul>

        
        <ul class="navbar-nav ms-auto">
              <!--aus welcome.blade kopiert-->

              <?php if(Route::has('login')): ?>
              
              <?php if(Auth::check() && Auth::id()): ?>
                        <li class="nav-item">
                        <a href="<?php echo e(url('/dashboard')); ?>" class="nav-link"><?php echo e(Auth::user()->name); ?></a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                        <a href="<?php echo e(route('login')); ?>" class="nav-link text-dark">Log in</a>
                        </li>
                        <?php if(Route::has('register')): ?>
                            <li class="nav-item">
                            <a href="<?php echo e(route('register')); ?>" class="nav-link text-dark">Register</a>
                            </li>
                        <?php endif; ?>
                    <?php endif; ?>
               
            <?php endif; ?>

        

        </ul>
       
      

    </div>
    </div>
</nav><?php /**PATH C:\Users\pohlp\Pohl_Laravel\pauline_welpenblog\resources\views/_partials/nav.blade.php ENDPATH**/ ?>