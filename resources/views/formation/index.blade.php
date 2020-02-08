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
      <a class="btn btn-primary float-right" href="{{ url('cvs')}}">Nouveau foramtion dans autre cv</a>

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
      <th scope="col">diplome</th>
        <th scope="col">diplome</th>
      <th scope="col">lieu</th>
      <th scope="col">date début</th>
      <th scope="col">date fin</th>
       <th scope="col">&nbsp;&nbsp;&nbsp;&nbsp;</th>
    </tr>
  </thead>
  <tbody>
    @foreach($listformation as  $listformation)
   
        <td>{{ $listformation->id }}</td>
    
   <td>{{ $listformation->cv_id }}</td>

        <td>{{ $listformation->cv->id }}</td>

         <td>{{ $listformation->diplome }}</td>
            <td>{{ $listformation->diplome }}</td>
       <td>{{ $listformation->lieu }}</td>
      <td>{{ $listformation->debut }}</td>
      <td>{{ $listformation->fin }}</td>


     <td><a href="{{ url('formations/'.$listformation->id.'/edit/'.$listformation->cv_id)}}"  class="btn btn-primary">Editter</a></td>
      

  <td>
    
   <form action="{{url('formations/'.$listformation->cv_id)}}" method="post">
  
     {{ csrf_field()}}
     {{ method_field('DELETE') }}   
 
   
    <a  type = "submit" href="{{url('formations/'.$listformation->cv_id)}}"  class="btn btn-danger"  id="idcv" name="id">Suprimerr</a>




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