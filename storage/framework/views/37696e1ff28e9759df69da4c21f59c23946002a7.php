<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create User</div>

                <div class="card-body">
               
               <!--error handling if any field not insert data-->
               <div class="card-body" style="color: red;">
               <?php if(count($errors)>0): ?>
                   
                     <ul class="navbar-nav mr-auto">
                     <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="nav-item active">
                               <?php echo e($error); ?>

                            </li>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </ul>
               <?php endif; ?>
               </div>
            
               
               
            <form  action ="<?php echo e(route('user.store')); ?>" method="POST">   <!--you can also write on action = /post/store-->
            
            <?php echo e(csrf_field()); ?>

<!--  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" name="title" placeholder="Enter Title">
    <small name="title" class="form-text text-muted">Please enter your post title.</small>
  </div>-->
  


   <div class="form-group">
    <label for="exampleFormControlInput1">Username</label>
    <input type="text" class="form-control" name="name" id="title-id" placeholder="Enter your username">
  </div>

   <div class="form-group">
    <label for="exampleFormControlInput1">E-mail</label>
    <input type="email" class="form-control" name="email" id="title-id" placeholder="Enter email">
  </div>
    
  <button type="submit" class="btn btn-primary">Save Tag</button>
</form>               
          

               
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>