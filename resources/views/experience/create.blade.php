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
       <form action="{{ url('experiences/'.$listcv->id)}}" method="post" enctype="multipart/form-data">
        {{ csrf_field()}}
          

       <div class="form-group">
           <label for=""><b>intituler</b></label>  
                   
           <input type="text" class="form-control" id="basic-url"  name="intituler" value="" >
    
     
        </div>


        <div class="form-group">

           <label for=""><b>lieu</b></label>
         
           <input type="text" class="form-control" id="basic-url"  name="lieu" value=""  >
    
     
        </div>


        <div class="form-group">

           <label for=""><b>date début</b></label>
         
           <input type="date" class="form-control" id="basic-url"  name="debut" value="" >
    
     
        </div>
         <div class="form-group">

           <label for=""><b>date fin</b></label>
         
           <input type="date" class="form-control" id="basic-url"  name="fin" value="" >
    
     
        </div>

      
     <div class="form-group">
    <label for="selectExperience"></label>
   
     
     <button type="submit" class="btn btn-warning" id="idcv" name="cv_id"   value="{{$listcv->id}}" > save 3liya &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
    
  
       

        </div>
  


        <div class="form-group">

           <label for=""></label>
         
         
        </div>
        </form>
     </div>
   
 </div>
</div>


@endsection