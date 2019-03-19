@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">View Category</div>

                <div class="card-body">
               
     @if($cat->count() > 0)
         
         
          <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  @foreach($cat as $categoyName)
       <tr>
      <th scope="row">{{$categoyName->name}}</th>
      <td>
           <a class="" href="{{route('category.edit' , ['id' => $categoyName ->id ])}}">
            <i style = " padding-left :7px" class="fas fa-edit"></i>
           </a>
        
      </td>
      <td>
           <a href="{{route('category.delete' , ['id' => $categoyName ->id ])}}">
               <i style = " padding-left :15px" class="fas fa-trash-alt"></i>
           </a>
      </td>
  
    </tr>

  @endforeach    
  </tbody>
</table>

@else
    <p class="text-center">There is no category.</p>
        
 @endif       
            
               
               
                      
               
               
               
               
                
            </div>
        </div>
    </div>
</div>
@endsection
