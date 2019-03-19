<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Post <?php echo e($solopost->title); ?> </div>

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
               
               
            <form  action ="<?php echo e(route('post.update' , ['id' => $solopost -> id])); ?>" method="POST" enctype="multipart/form-data">   <!--you can also write on action = /post/store-->
            
            <?php echo e(csrf_field()); ?>

            
            
            <label for="   ">Select Category of Post</label>
    <select class="form-control" name="catagory_id" id="categoryes">
    <?php $__currentLoopData = $cate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dbcat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($dbcat -> id == $solopost->catagory_id ): ?>
      <option value ="<?php echo e($dbcat -> id); ?>" selected><?php echo e($dbcat -> name); ?></option>
    <?php else: ?>
        <option value ="<?php echo e($dbcat -> id); ?>"><?php echo e($dbcat -> name); ?></option>
       <?php endif; ?>     
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
    </select>
        
        


   <div class="form-group">
    <label for="exampleFormControlInput1">Post Title</label>
    <input type="text" class="form-control" name="title"id="title-id" placeholder="<?php echo e($solopost->title); ?>">
  </div>
    
    
  <div class="form-group">
    <label for="content">Descripation</label>
    <textarea class="form-control" name="content" rows="8" cols="8" ></textarea>
  </div>

  
       
      <?php $__currentLoopData = $tagersss; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tager): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <div class="form-check">   
       
       <label class="form-check-label">
       <input class="form-check-input" type="checkbox" name="tags[]" value=" <?php echo e($tager -> id); ?>"
       
        <?php $__currentLoopData = $solopost->Tag; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tagsrrr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($tagsrrr->id == $tager->id ): ?>
                checked
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
         > <?php echo e($tager -> tag); ?>

       </label> <br>
       </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
    
    
    
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