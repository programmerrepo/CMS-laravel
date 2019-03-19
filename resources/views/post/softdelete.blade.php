@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Post Soft Delete</div>

                <div class="card-body">
               
@if($posted->count() > 0)                 
          <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Image</th>
      <th scope="col">Title</th>
      <th scope="col">Deleted_at</th>
      <th scope="col">Update_at</th>
      <th scope="col">Restore</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  
       @foreach($posted as $pot)
       <tr>
      
        
        <td>
        
        <img src="{{$pot->featured}}" class="img-thumbnail" alt="{{$pot->title}}">

        </td>
        
        <td>
          {{$pot->title}}
          
        </td>
     
      <td>
         {{$pot->deleted_at}}
      </td>
        
        <td>
         {{$pot->updated_at}}
      </td>
        <td>
           <a href="{{route('post.restore' , ['id' => $pot ->id ])}}">
               <i style = " padding-left :15px" class="fas fa-window-restore"></i>
           </a>
      </td>
        
     <td>
           <a href="{{route('post.hdelete' , ['id' => $pot ->id ])}}">
              <i style = " padding-left :15px" class="fas fa-trash-alt"></i>
           </a>
      </td>
  
    </tr>

       @endforeach    
  </tbody>
</table>
@else

    <p class="text-center">There is no post deleted.</p>
        
 @endif 
                
               
               
                
            </div>
        </div>
    </div>
</div>
@endsection
