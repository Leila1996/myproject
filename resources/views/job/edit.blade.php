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
       <form action="{{ url('formations/'.$listjob->id.'/save/'.$listjob->cv_id)}}" method="post" enctype="multipart/form-data">
         <input type="hidden" name="_method" value="PUT"/>
        {{ csrf_field()}}
          

      <div class="form-group">
           <label for=""><b>diplome </b></label>  
                   
           <input type="text" class="form-control" id="basic-url"  name="diplome" value="" >
    
     
        </div>


        <div class="form-group">
           <label for=""><b>domaine </b></label>  
                   
           <input type="text" class="form-control" id="basic-url"  name="domaine" value="" >
    
     
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
   
     
     <button type="submit"  id="idcv" name="cv_id" class="btn btn-warning"  value="{{$listjob->cv_id}}">Enregister la modification</button>
    
  
       

        </div>
  

        </form>
     </div>
   
 </div>
</div>


@endsection