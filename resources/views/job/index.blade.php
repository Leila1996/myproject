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
       	 
     <h1>fromation</h1>
    <div class="pull-right">
      <a class="btn btn-primary float-right" href="{{ url('cvs')}}">Nouveau job dans autre cv</a>

    </div>

 <div class="pull-right">
 
    
  <!--div class="col-md-10"> 
               <h3 class="panel-title">&nbsp;&nbsp;Experience</h3> </div>
                
        </div-->

        
    
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
      <th scope="col">intitue</th>
      <th scope="col">type</th>
      <th scope="col">demande</th>
      <th scope="col">diplome</th>
      <th scope="col">discription</th>
      
      <th scope="col">&nbsp;&nbsp;&nbsp;&nbsp;</th>
    </tr>
  </thead>
  <tbody>
    @foreach($listjob as  $listjob)
   
        <td>{{ $listjob->id }}</td>
    
   <td>{{ $listjob->cv_id }}</td>

        <td>{{ $listjob->cv->id }}</td>

         <td>{{ $listjob->intitue }}</td>
            <td>{{ $listjob->type }}</td>
       <td>{{ $listjob->demande }}</td>
      <td>{{ $listjob->diplome }}</td>
      <td>{{ $listjob->discription }}</td>


     <td><a href="{{ url('jobs/'.$listjob->id.'/edit/'.$listjob->cv_id)}}"  class="btn btn-primary">Editter</a></td>
      

  <td>
    
   <form action="{{url('jobs/'.listjob->cv_id)}}" method="post">
  
     {{ csrf_field()}}
     {{ method_field('DELETE') }}   
 
   
    <a  type = "submit" href="{{url('jobs/'.$listjob->cv_id)}}"  class="btn btn-danger"  id="idcv" name="id">Suprimerr</a>




 </form>



  </td>
       

       
    </tr>
    
    
     @endforeach
  
  </tbody>
  <tr> <a class="btn btn-primary float-right" href="{{ url('cvs/'.$listformation->cv_id)}}">return dans mon profile cv</a></tr>
</table>

  
  </div>
</div>
</div>
    
    </div>



  <!---ajouter un tablauu--->


   </div>
</div>
@endsection