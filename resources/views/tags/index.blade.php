@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">View Post</div>

                <div class="card-body">
               
           @if($tagss->count() > 0)    
          <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Tag</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>

  @foreach($tagss as $pos)
       <tr>
        <td>
         {{$pos->tag}}
      </td>
       <td>
           <a class="" href="{{route('tag.edit' , ['id' => $pos ->id ])}}">
            <i style = " padding-left :7px" class="fas fa-edit"></i>
           </a>
        
      </td>
        <td>
           <a href="{{route('tag.delete' , ['id' => $pos ->id ])}}">
               <i style = " padding-left :15px" class="fas fa-trash-alt"></i>
           </a>
      </td>
  
    </tr>

  @endforeach
  
       
  </tbody>
</table>
    @else
    
    <p class="text-center">There is no tag to view.</p>
        
 @endif 
            
               
                   
               
                
            </div>
        </div>
    </div>
</div>
@endsection
