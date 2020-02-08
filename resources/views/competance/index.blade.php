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
         
     <h1>Exprience</h1>
    <div class="pull-right">
      <a class="btn btn-primary float-right" href="{{ url('cvs')}}">Nouveau competances dans autre cv</a>

    </div>

 <div class="pull-right">
 
    <div class="row">
  <!--div class="col-md-10"> 
               <h3 class="panel-title">&nbsp;&nbsp;Experience</h3> </div>
                
        </div-->
    </div>
   <div class="card-body">
   <div class="col-md-12">
      <!----creation formula de cv--->
    

        
     <table class="table">
      <thead>
    <tr>
          
       <td>competance </td>
      <td>niveau </td>
      
    </tr>
  </thead>
  <tbody>
    @foreach($listcompetance as $listcompetance)
   
        <td>{{ $listcompetance->id }}</td>
    
   <td>{{ $listcompetance->cv_id }}</td>

        <td>{{ $listcompetance->cv->id }}</td>

         
       <td>{{ $listcompetance->competance }}</td>
      <td>{{ $listcompetance->niveau }}</td>
      


      <td><a href="{{ url('competances/'.$listcompetance->id.'/edit/'.$listcompetance->cv_id)}}"  class="btn btn-primary">Editter</a></td>
      

  <td>
    
   <form action="{{url('competances/'.$listcompetance->cv_id)}}" method="post">
  
     {{ csrf_field()}}
     {{ method_field('DELETE') }}   
 
   
    <a  type = "submit" href="{{url('competances/'.$listcompetance->cv_id)}}"  class="btn btn-danger"  id="idcv" name="id">Suprimerr</a>
 </form>



  </td>
       

       
    </tr>
    
     @endforeach
  
  </tbody>
   <tr> <a class="btn btn-primary float-right" href="{{ url('cvs/'.$listcompetance->cv_id)}}">return dans mon profile cv</a></tr>
</table>

  
  
  </div>
</div>
</div>
    
    </div>



  <!---ajouter un tablauu--->


   </div>
</div>
@endsection