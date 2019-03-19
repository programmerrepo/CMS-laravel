@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Post</div>

                <div class="card-body">
               
               <!--error handling if any field not insert data-->
               <div class="card-body" style="color: red;">
               @if(count($errors)>0)
                   
                     <ul class="navbar-nav mr-auto">
                     @foreach($errors->all() as $error)
                            <li class="nav-item active">
                               {{$error}}
                            </li>
                  @endforeach
                     </ul>
               @endif
               </div>
            
               
               
            <form  action ="{{route('post.store')}}" method="POST" enctype="multipart/form-data">   <!--you can also write on action = /post/store-->
            
            {{ csrf_field()}}
<!--  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" name="title" placeholder="Enter Title">
    <small name="title" class="form-text text-muted">Please enter your post title.</small>
  </div>-->
  
  <div class="form-group">
    <label for="   ">Select Category of Post</label>
    <select class="form-control" name="catagory_id" id="categoryes">
    @foreach($dbcat as $cate)  
      <option value ="{{$cate -> id}}">{{$cate -> name}}</option>
    @endforeach    
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
  
  @foreach($tager as $tagers)
  <div class="form-check">
  <input class="form-check-input" type="checkbox" name="tags[]" value=" {{$tagers -> id}}">
  <label class="form-check-label">
    {{$tagers -> tag}}
  </label> <br>
</div>
  @endforeach
      
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
@endsection
