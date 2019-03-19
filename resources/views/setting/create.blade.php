@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Setting</div>

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
            
               
               
            <form  action ="{{route('setting.update')}}" method="POST">   <!--you can also write on action = /post/store-->
            
            {{ csrf_field()}}
<!--  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" name="title" placeholder="Enter Title">
    <small name="title" class="form-text text-muted">Please enter your post title.</small>
  </div>-->
  

   <div class="form-group">
    <label for="exampleFormControlInput1">Site Name</label>
    <input type="text" class="form-control" name="blog_Name" id="title-id" placeholder="{{$solosetting->blog_Name}}">
  </div>
    
    
   <div class="form-group">
    <label for="exampleFormControlInput1">Number</label>
    <input type="text" class="form-control" name="number" id="title-id" placeholder="{{$solosetting->number}}">
  </div>
    
    
   <div class="form-group">
    <label for="exampleFormControlInput1">E-mail</label>
    <input type="text" class="form-control" name="email" id="title-id" placeholder="{{$solosetting->email}}">
  </div>
    
    
   <div class="form-group">
    <label for="exampleFormControlInput1">Address</label>
    <input type="text" class="form-control" name="address" id="title-id" placeholder="{{$solosetting->address}}">
  </div>
    
    

    
  <button type="submit" class="btn btn-primary">Save Setting</button>
</form>               
          

               
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
