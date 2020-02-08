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
       <form action="{{ url('jobs/'.$listjob->id)}}" method="post" enctype="multipart/form-data">
        {{ csrf_field()}}
          

       <div class="form-group">
           <label for=""><b>intitue </b></label>  
                   
           <input type="text" class="form-control" id="basic-url"  name="intitue" value="" >
    
     
        </div>


        <div class="form-group">
           <label for=""><b>type </b></label>  
                   
           <input type="text" class="form-control" id="basic-url"  name="type" value="" >
    
     
        </div>


        <div class="form-group">

           <label for=""><b>demande</b></label>
         
           <input type="text" class="form-control" id="basic-url"  name="lieu" value=""  >
    
     
        </div>



        <div class="form-group">

           <label for=""><b>diplome</b></label>
         
           <input type="text" class="form-control" id="basic-url"  name="diplome" value=""  >
    
     
        </div>


         <div class="form-group">

           <label for=""><b>discription</b></label>
         
           <input type="text" class="form-control" id="basic-url"  name="discription" value=""  >
    
     
        </div>

      
     <div class="form-group">
    <label for="selectExperience"></label>
   
     
     <button type="submit" class="btn btn-warning" id="idcv" name="cv_id"   value="{{$listjob->id}}" > save 3liya &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
    
  
       

        </div>
  


        <div class="form-group">

           <label for=""></label>
         
         
        </div>
        </form>
     </div>
   
 </div>
</div>


@endsection