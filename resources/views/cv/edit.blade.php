@extends('layouts.app')




@section('content')


@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="container">
 <div class="row">
   
     <div class="col-md-12">
     	<!----creation formula de cv--->
       <form target="_blank" action="{{ url('cvs/'.$cv->id)}}" method="post" enctype="multipart/form-data">
          <input type="hidden" name="_method" value="PUT"/>
    
       	{{ csrf_field()}}

       	 <div class="form-group">

           <label for=""><b>titre</b></label>
         
           <input type="text" class="form-control" id="basic-url"  name="titre" value="{{ $cv->titre}}">
        </div>


        <div class="form-group">

           <label for=""><b>presentation</b></label>
         
           <textarea class="form-control" id="basic-url" aria-describedby="basic-addon3" name="presentation">{{ $cv->presentation}}</textarea>
        </div>


        
    <div class="form-group">

           <label for="file">Image</label>
         
           <input type="file" class="form-control" id="file" name="photo">
        </div>

        <div class="form-group">

           <label for=""></label>
         
           <input type="submit" class="btn btn-warning"  aria-describedby="basic-addon3" value="Modifier">
        </div>
        </form>
     </div>
   
 </div>
</div>


@endsection