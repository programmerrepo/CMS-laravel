@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Post {{$solopost->title}} </div>

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
               
               
            <form  action ="{{route('post.update' , ['id' => $solopost -> id])}}" method="POST" enctype="multipart/form-data">   <!--you can also write on action = /post/store-->
            
            {{ csrf_field()}}
            
            
            <label for="   ">Select Category of Post</label>
    <select class="form-control" name="catagory_id" id="categoryes">
    @foreach($cate as $dbcat)
        @if($dbcat -> id == $solopost->catagory_id )
      <option value ="{{$dbcat -> id}}" selected>{{$dbcat -> name}}</option>
    @else
        <option value ="{{$dbcat -> id}}">{{$dbcat -> name}}</option>
       @endif     
    @endforeach    
    </select>
        
        


   <div class="form-group">
    <label for="exampleFormControlInput1">Post Title</label>
    <input type="text" class="form-control" name="title"id="title-id" placeholder="{{$solopost->title}}">
  </div>
    
    
  <div class="form-group">
    <label for="content">Descripation</label>
    <textarea class="form-control" name="content" rows="8" cols="8" ></textarea>
  </div>

  
       
      @foreach($tagersss as $tager)
       <div class="form-check">   
       
       <label class="form-check-label">
       <input class="form-check-input" type="checkbox" name="tags[]" value=" {{$tager -> id}}"
       
        @foreach($solopost->Tag as $tagsrrr)
            @if($tagsrrr->id == $tager->id )
                checked
            @endif
        @endforeach    
         > {{$tager -> tag}}
       </label> <br>
       </div>
  @endforeach
  
    
    
    
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
