@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Tag</div>

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
            
               
               
            <form  action ="{{route('tag.store')}}" method="POST">   <!--you can also write on action = /post/store-->
            
            {{ csrf_field()}}
<!--  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" name="title" placeholder="Enter Title">
    <small name="title" class="form-text text-muted">Please enter your post title.</small>
  </div>-->
  


   <div class="form-group">
    <label for="exampleFormControlInput1">Tag</label>
    <input type="text" class="form-control" name="tag" id="title-id" placeholder="Enter Tag">
  </div>


    
  <button type="submit" class="btn btn-primary">Save Tag</button>
</form>               
          

               
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
