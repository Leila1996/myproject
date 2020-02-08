@extends('layouts.app')




@section('content')

<div class="container">
   <div class="row">
   
       <div class="col-md-12">
       	@if(session()->has('success'))
       <div class="alert alert-success" role="alert">
       		{{ session()->get('success')}}


       	</div>
       	@endif
       	 
     <h1>la liste de mes offre</h1>
    <div class="pull-right">
      <a class="btn btn-primary float-right" href="{{ url('offres/create')}}">Nouveau offre</a>

    </div>


    <div class="row">
  @foreach($listoffre as $listoffre)
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">

  

    	<form action="{{ url('offres/'.$listoffre->id)}}" method="post">

  {{ csrf_field()}}
  {{ method_field('DELETE') }}
      <!--img src="{{ asset('storage/'.$listcv->photo)}}" alt="..." class="rounded-sm" width="304" height="236" -->
      <div class="caption">
        <h3>{{ $listcv->titre }}

        </h3>

       
        <p>
         <a href="{{ url('offres/'.$listoffre->id)}}" class="btn btn-primary" role="button">Details</a>
          @can('update', $listoffre)
         <a href="{{ url('offres/'.$listoffre->id.'/edit')}}" class="btn btn-warning" role="button">Eitter</a>
          @endcan
         @can('delete', $listoffre)
        <button type="submit" class="btn btn-danger">Suprimerr</button></p>
       @endcan
      </div>




      </form>
    </div>

  </div>
   @endforeach
    
</div>

    

    
    </div>
   </div>
</div>
@endsection