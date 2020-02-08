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
       	 
     <h1>la liste de mes cv</h1>
    <div class="pull-right">
      <a class="btn btn-primary float-right" href="{{ url('cvs/create')}}">Nouveau cv</a>

    </div>


    <div class="row">
  @foreach($listcv as $listcv)
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
    	<form action="{{ url('cvs/'.$listcv->id)}}" method="post">
  
  {{ csrf_field()}}
  {{ method_field('DELETE') }}
      <img src="{{ asset('storage/'.$listcv->photo)}}" alt="..." class="rounded-sm" width="304" height="236" >
      <div class="caption">
        <h3>{{ $listcv->experiences }}

        </h3>

       
        <p>
         <a href="{{ url('cvs/'.$listcv->id)}}" class="btn btn-primary" role="button">Details</a>
         <a href="{{ url('cvs/'.$listcv->id.'/edit')}}" class="btn btn-warning" role="button">Eitter</a>
        <button type="submit" class="btn btn-danger">Suprimerr</button>
 

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