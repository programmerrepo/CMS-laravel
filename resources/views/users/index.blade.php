@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">View User</div>

                <div class="card-body">
               
           @if($ser->count() > 0)    
          <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">User Image</th>
      <th scope="col">Name</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>

  @foreach($ser as $pot)
       <tr>
      
      
       <td  style="padding-left: 30px">
        
        <img src="https://www.pngarts.com/files/3/Avatar-PNG-Picture.png" class="img-thumbnail"  alt="{{$pot->name}}" width= 75px hight= 100px >

        </td>
        
        <td>
          {{$pot->name}}
          
        </td>
            
             <td>
           <a class="" href="{{route('user.edit' , ['id' => $pot ->id ])}}">
            <i style = " padding-left :7px" class="fas fa-edit"></i>
           </a>
            
            @if($pot->admin)
                 <a class="" href="{{route('user.notadmin' , ['id' => $pot -> id])}}">
                  Make User
                </a>
            @else
                <a class="" href="{{route('user.admin' , ['id' => $pot ->id])}}">
                  Make Admin
                </a>
            @endif
        
      </td>
        <td>
           <a href="{{route('user.delete' , ['id' => $pot ->id ])}}">
               <i style = " padding-left :15px" class="fas fa-trash-alt"></i>
           </a>
      </td>
  
    </tr>

  @endforeach
  
       
  </tbody>
</table>
    @else
    
    <p class="text-center">There is no user to view.</p>
        
 @endif 
            
               
                   
               
                
            </div>
        </div>
    </div>
</div>
@endsection
