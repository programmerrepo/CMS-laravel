<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Post</div>

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
            
               
               
            <form  action ="<?php echo e(route('post.store')); ?>" method="POST" enctype="multipart/form-data">   <!--you can also write on action = /post/store-->
            
            <?php echo e(csrf_field()); ?>

<!--  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" name="title" placeholder="Enter Title">
    <small name="title" class="form-text text-muted">Please enter your post title.</small>
  </div>-->
  
  <div class="form-group">
    <label for="   ">Select Category of Post</label>
    <select class="form-control" name="catagory_id" id="categoryes">
    <?php $__currentLoopData = $dbcat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
      <option value ="<?php echo e($cate -> id); ?>"><?php echo e($cate -> name); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
    </select>
  </div>

   <div class="form-group">
    <label for="exampleFormControlInput1">Post Title</label>
    <input type="text" class="form-control" name="title"id="title-id" placeholder="Enter Title">
  </div>
    
    
  <div class="form-group">
    <label for="content">Descripation</label>
    <textarea class="form-control" name="content" rows="8" cols="8"></textarea>
  </div>
  
  <?php $__currentLoopData = $tager; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tagers): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="form-check">
  <input class="form-check-input" type="checkbox" name="tags[]" value=" <?php echo e($tagers -> id); ?>">
  <label class="form-check-label">
    <?php echo e($tagers -> tag); ?>

  </label> <br>
</div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      
 <br>
    <div class="form-group">
    <label for="featured">Photo</label>
    <input type="file" class="form-control-file" name="featured">
  </div>

    
  <button type="submit" class="btn btn-primary">Publish</button>
</form>               
          

               
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>