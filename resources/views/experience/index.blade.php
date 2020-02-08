@extends('layouts.app')




@section('content')

<div class="container">
   <div class="row">
   
       <div class="col-md-8">
        @if(session()->has('success'))
       <div class="alert alert-success" role="alert">
          {{ session()->get('success')}}

  
        </div>
        @endif
         <div class="pull-right">
      <a class="btn btn-primary float-right" href="{{ url('cvs')}}">Nouveau experience dans autre cv</a>

    </div>

     <h1>Exprience</h1>
    
 <div class="pull-right">
 
    <div class="row">
  <!--div class="col-md-10"> 
               <h3 class="panel-title">&nbsp;&nbsp;Experience</h3> </div>
                
        </div-->
    </div>
   <div class="card-body">
   <div class="col-md-12">
      <!----creation formula de cv--->
    
 
</form>
        
     <table class="table">
      <thead>
    <tr>
       <th scope="col">id</th>
      <th scope="col">cv_id</th>
      <th scope="col">id</th>
      <th scope="col">intituler</th>
      <th scope="col">lieu</th>
      <th scope="col">date début</th>
      <th scope="col">date fin</th>
       <th scope="col">&nbsp;&nbsp;&nbsp;&nbsp;</th>
    </tr>
  </thead>
  <tbody>
    @foreach($listexperience as $listexperience)
   
        <td>{{ $listexperience->id }}</td>
    
   <td>{{ $listexperience->cv_id }}</td>

        <td>{{ $listexperience->cv->id }}</td>

         <td>{{ $listexperience->intituler }}</td>
       <td>{{ $listexperience->lieu }}</td>
      <td>{{ $listexperience->debut }}</td>
      <td>{{ $listexperience->fin }}</td>


     <td><a href="{{ url('experiences/'.$listexperience->id.'/edit/'.$listexperience->cv_id)}}"  class="btn btn-primary">Editter</a></td>
      

  <td>
    
 
     <form target="_blank" action="{{url('experiences/'.$listexperience->id.'/delete/'.$listexperience->cv_id)}}" method="post" enctype="multipart/form-data">
  
     {{ csrf_field()}}
     {{ method_field('DELETE') }}   


    <a  type = "submit" href="{{url('experiences/'.$listexperience->id.'/delete/'.$listexperience->cv_id)}}"  class="btn btn-danger"  id="idcv" name="id">Suprimerr</a>
     
  
 </form>
 

<td><form action="{{url('experiences/'.$listexperience->id)}}" method="delete">

  {{ csrf_field()}}
  {{ method_field('DELETE') }}


<a  type = "submit" href="{{url('experiences/'.$listexperience->id.'/delete/'.$listexperience->cv_id)}}"  class="btn btn-danger"  id="idcv" name="id">Suprimerr</a>
     




</form></td>


  </td>
       

       
    </tr>
    
     @endforeach
  
  </tbody>
       <tr> <a class="btn btn-primary float-right" href="{{ url('cvs/'.$listexperience->cv_id)}}">return dans mon profile cv</a></tr>

</table>

  
  </div>
</div>
</div>
    
    </div>



  <!---ajouter un tablauu--->


   </div>
</div>
@endsection