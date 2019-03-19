@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Post</div>

                <div class="card-body">
               
               
               
            <form  action ="{{route('post.store')}}" method="POST">   <!--you can also write on action = /post/store-->
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" name="title" placeholder="Enter Title">
    <small id="title" class="form-text text-muted">Please enter your post title.</small>
  </div>
  <div class="form-group">
    <label for="content">Describation</label>
    <textarea class="form-control" name="content" rows="8" cols="8"></textarea>
  </div>
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
@endsection
