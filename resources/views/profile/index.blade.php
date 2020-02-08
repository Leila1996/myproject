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
      <th scope="col">nom</th>
        <th scope="col">prenom</th>
      <th scope="col">email</th>
      <th scope="col">tel</th>
      <th scope="col">adress</th>
       <th scope="col">&nbsp;&nbsp;&nbsp;&nbsp;</th>
    </tr>
  </thead>
  <tbody>
    @foreach($listprofile as  $listprofile)
   
        <td>{{ $listprofile->id }}</td>
    
   <td>{{ $listprofile->cv_id }}</td>

      

      
            <td>{{ $listprofile->diplome }}</td>
       <td>{{ $listprofile->lieu }}</td>
      <td>{{ $listprofile->debut }}</td>
      <td>{{ $listprofile->fin }}</td>


     <td><a href="{{ url('profiles/'.$listprofile->id.'/edit/'.$listprofile->cv_id)}}"  class="btn btn-primary">Editter</a></td>
      

  <td>
    
   <form action="{{url('profiles/'.$listprofile->cv_id)}}" method="post">
  
     {{ csrf_field()}}
     {{ method_field('DELETE') }}   
 
   
    <a  type = "submit" href="{{url('profiles/'.$listprofile->cv_id)}}"  class="btn btn-danger"  id="idcv" name="id">Suprimerr</a>




 </form>



  </td>
       

       
    </tr>
    
    
     @endforeach
  
  </tbody>
</table>

  
  </div>
</div>
</div>
    
    </div>



  <!---ajouter un tablauu--->


   </div>
</div>
@endsection