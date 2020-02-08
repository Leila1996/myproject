@extends('layouts.app')




@section('content')



<!--@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif-->
<div class="container">
 <div class="row">
   
     <div class="col-md-12">
     	<!----creation formula de cv--->
       <form action="{{ url('cvs')}}" method="post" enctype="multipart/form-data">
       	{{ csrf_field()}}
          <div class="form-group @if($errors->get('titre')) has-error @endif">

           <label for=""><b>titre</b></label>
         
           <input type="text" class="form-control" id="basic-url"  name="titre" value="{{ old('titre')}}" class="@error('titre') is-invalid @enderror">
       @if($errors->get('titre'))
         @foreach($errors->get('titre') as $message) 
     <li>  {{$message}}</li>

          @endforeach
       @endif
        </div>


         <div class="form-group @if($errors->get('presentation')) has-error @endif">

           <label for=""><b>presentation</b></label>
         
           <textarea class="form-control" id="basic-url" aria-describedby="basic-addon3" name="presentation">{{ old('presentation')}}</textarea>
            @if($errors->get('presentation'))
         @foreach($errors->get('presentation') as $message) 
     <li>  {{$message}}</li>

          @endforeach
       @endif
        </div>

  

       <div class="form-group">

           <label for="file">Image</label>
         
           <input type="file" class="form-control" id="file" name="photo">
        </div>

        

        <div class="form-group">

           <label for=""></label>
         
           <input type="submit" class="form-control btn btn-primary" value="Enregister">
        </div>
        </form>
     </div>
   
 </div>
</div>


@endsection