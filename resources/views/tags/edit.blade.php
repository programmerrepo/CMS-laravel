@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Tag {{$taged->tag}} </div>

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
               
               
            <form  action ="{{route('tag.update' , ['id' => $taged -> id])}}" method="POST" >   <!--you can also write on action = /post/store-->
            
            {{ csrf_field()}}
        
        
        


   <div class="form-group">
    <label for="exampleFormControlInput1">New Tag</label>
    <input type="text" class="form-control" name="tag" id="title-id" placeholder="{{$taged->title}}">
  </div>
    

    
    <button type="submit" class="btn btn-primary">Edit Tag</button>
    
</form>               
               
               
               
               
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
