@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit User {{$solopost->name}} </div>

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
               
               
            <form  action ="{{route('user.update' , ['id' => $solopost -> id])}}" method="POST" enctype="multipart/form-data">   <!--you can also write on action = /post/store-->
            
            {{ csrf_field()}}
            
            
  
        
        


   <div class="form-group">
    <label for="exampleFormControlInput1">Username</label>
    <input type="text" class="form-control" name="name" id="title-id" placeholder="{{$solopost->name}}">
  </div>
    
    
                             <div class="form-group row" style ="padding-right: 250px">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email"  placeholder="{{$solopost->email}}" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                            
                            
                        <div class="form-group row" style ="padding-right: 250px">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                            

                          <div class="form-group row" style ="padding-right: 250px">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
    
    
       <div class="form-group">
    <label for="featured">image</label>
    <input type="file" class="form-control-file" name="avatar">
  </div>
    
    <button type="submit" class="btn btn-primary">Edit</button>
    
</form>               
               
               
               
               
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
