<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Tag <?php echo e($taged->tag); ?> </div>

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
               
               
            <form  action ="<?php echo e(route('tag.update' , ['id' => $taged -> id])); ?>" method="POST" >   <!--you can also write on action = /post/store-->
            
            <?php echo e(csrf_field()); ?>

        
        
        


   <div class="form-group">
    <label for="exampleFormControlInput1">New Tag</label>
    <input type="text" class="form-control" name="tag" id="title-id" placeholder="<?php echo e($taged->title); ?>">
  </div>
    

    
    <button type="submit" class="btn btn-primary">Edit Tag</button>
    
</form>               
               
               
               
               
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>