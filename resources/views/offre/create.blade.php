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
   
     <div class="col-md-12">
     	<!----creation formula de cv--->
       <form action="{{ url('offres')}}" method="post" enctype="multipart/form-data">
       	{{ csrf_field()}}
          <div class="form-group">

           <label for=""><b>intitule</b></label>
         
           <input type="text" class="form-control" id="basic-url"  name="intitule" value="">
     
        </div>


         <div class="form-group">

           <label for=""><b>type</b></label>
         

            <input type="text" class="form-control" id="basic-url"  name="type" value="">
     
        </div>

  

       <!--div class="form-group">

           <label for="file">Image</label>
         
           <input type="file" class="form-control" id="file" name="photo">
        </div-->

        

        <div class="form-group">

           <label for=""></label>
         
           <input type="submit" class="form-control btn btn-primary" value="Enregister">
        </div>
        </form>
     </div>
   
 </div>
</div>


@endsection