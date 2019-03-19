@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">View Post</div>

                <div class="card-body">
               
           @if($posts->count() > 0)    
          <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Image</th>
      <th scope="col">Title</th>
      <th scope="col">Created_at</th>
      <th scope="col">Update_at</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>

  @foreach($posts as $pot)
       <tr>
      
        
        <td>
        
        <img src="{{$pot->featured}}" class="img-thumbnail" alt="{{$pot->title}}">

        </td>
        
        <td>
          {{$pot->title}}
          </td>
     
      <td>
         {{$pot->created_at}}
      </td>
        
        <td>
         {{$pot->updated_at}}
      </td>
       <td>
           <a class="" href="{{route('post.edit' , ['id' => $pot ->id ])}}">
            <i style = " padding-left :7px" class="fas fa-edit"></i>
           </a>
        
      </td>
        <td>
           <a href="{{route('post.delete' , ['id' => $pot ->id ])}}">
               <i style = " padding-left :15px" class="fas fa-trash-alt"></i>
           </a>
      </td>
  
    </tr>

  @endforeach
  
       
  </tbody>
</table>
    @else
    
    <p class="text-center">There is no post to view.</p>
        
 @endif 
            
               
                   
               
                
            </div>
        </div>
    </div>
</div>
@endsection
