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
   
     <div class="col-md-8">
      <!----creation formula de cv--->
       <form action="{{ url('profiles/'.$listcv->id)}}" method="post" enctype="multipart/form-data">
        {{ csrf_field()}}
          

       <div class="form-group">
           <label for=""><b>nom</b></label>  
                   
           <input type="text" class="form-control" id="basic-url"  name="nom" value="" >
    
     
        </div>


        <div class="form-group">
           <label for=""><b>prenom </b></label>  
                   
           <input type="text" class="form-control" id="basic-url"  name="prenom" value="" >
    
     
        </div>


        <div class="form-group">

           <label for=""><b>email</b></label>
         
           <input type="text" class="form-control" id="basic-url"  name="email" value=""  >
    
     
        </div>


        <div class="form-group">

           <label for=""><b>tel</b></label>
         
           <input type="text" class="form-control" id="basic-url"  name="tel" value="" >
    
     
        </div>
         <div class="form-group">

           <label for=""><b>adress</b></label>
         
           <input type="text" class="form-control" id="basic-url"  name="adress" value="" >
    
     
        </div>

      
     <div class="form-group">
    <label for="selectExperience"></label>
   
     
     <button type="submit" class="btn btn-warning" id="idcv" name="cv_id"   value="{{$listcv->id}}" > save  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
    
  
       

        </div>
  


        <div class="form-group">

           <label for=""></label>
         
         
        </div>
        </form>
     </div>
   
 </div>
</div>


@endsection