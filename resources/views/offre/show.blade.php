@extends('layouts.app')




@section('content')
 <link href="{{ asset('css/app.css') }}" rel="stylesheet">



<style type="text/css">
  



  body{

}
.emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
}
.profile-img{
    text-align: center;
}
.profile-img img{
    width: 70%;
    height: 100%;
}
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.profile-head h5{
    color: #333;
}
.profile-head h6{
    color: #0062cc;
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 600;
    color: #6c757d;
    cursor: pointer;
}
.proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
}
.proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
}
.profile-head .nav-tabs{
    margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #0062cc;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
}
.profile-work p{
    font-size: 12px;
    color: #818182;
    font-weight: 600;
    margin-top: 10%;
}
.profile-work a{
    text-decoration: none;
    color: #495057;
    font-weight: 600;
    font-size: 14px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600;
}
.profile-tab p{
    font-weight: 600;
    color: #0062cc;
}
</style>
 
<div class="container" id="root">



   <div class="row">

   
      

 



 
 




   



<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
 <img src="{{ asset($listcv->user->photo)}}" alt="..." class="rounded-sm" width="304" height="236" >
                            <div class="file btn btn-lg btn-primary">




     
      <div class="caption">
                                Change Photo
                                <input type="file" name="file"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                        {{ $listcv->user->name }}
                                    </h5>
                                    <h6>
                                     {{ $listcv->user->profession }}
                                    </h6>
                                    <p class="proile-rating">RANKINGS : <span>8/10</span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">presentation</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p>presentation</p>
                            
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>User Id</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $listcv->user->id }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $listcv->user->name }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $listcv->user->email }} </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $listcv->user->tel }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Profession</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $listcv->user->profession }}</p>
                                            </div>
                                        </div>




                                         <div class="row">
                                            <div class="col-md-6">
                                                <label>Niveau d'Etude</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $listcv->user->niveau }}</p>
                                            </div>
                                        </div>




                                         <div class="row">
                                            <div class="col-md-6">
                                                <label>Civilite</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $listcv->user->civilite }}</p>
                                            </div>
                                        </div>
                            </div>
                               <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                           
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h2>{{ $listcv->presentation }}</h2>
                                            </div>
                                            
                                        </div>
                                       
                            </div>
                        </div>
                    </div>


            </form>   
             <div class="row">
                    <div class="col-lg-offset-3 col-lg-">
                       @can('update', $listcv)
                        
                        <a href="{!! route('change') !!}" class="btn btn-primary btn-block">Edit Profile</a>
                       @endcan
                    </div></div>
                </div>        
        </div>

<hr>
<div class="card">
  <div class="card bg-info text-white">

       <div class="row">
         <div class="col-md-10"> 
               <h3 class="panel-title">&nbsp;&nbsp;Formation</h3> </div>
                 <div class="col-md-2 text-right">
                    
                       @can('update', $listcv)
               <a class="btn btn-primary float-right" href="{{ url('getFormations/'.$id)}}">Nouveau formation</a>
                         @endcan
            </div>
        </div>




    </div>

    <div class="card-body">
      


<table class="table">
      <thead>
    <tr>

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
   
       

       

         <td>{{ $listformation->diplome }}</td>
            <td>{{ $listformation->diplome }}</td>
       <td>{{ $listformation->lieu }}</td>
      <td>{{ $listformation->debut }}</td>
      <td>{{ $listformation->fin }}</td>
     @can('update', $listcv)

    <td><a href="{{ url('formations/'.$listformation->id.'/edit/'.$listformation->cv_id)}}"  class="btn btn-primary">Editter</a></td>
    @endcan

  <td>
    
   <form action="{{url('formations/'.$listformation->cv_id)}}" method="post">
  
     {{ csrf_field()}}
     {{ method_field('DELETE') }}   
 
   @can('update', $listcv)

    <a  type = "submit" href="{{url('formations/'.$listformation->cv_id)}}"  class="btn btn-danger"  id="idcv" name="id">Suprimerr</a>
       @endcan



 </form>



  </td>
       

       
    </tr>
    
    
     @endforeach
    </div>
   
  </div>

</tbody></table></div>
    




  <div class="card">
 <div class="card bg-secondary text-white">

       <div class="row">
         <div class="col-md-10"> 
               <h3 class="panel-title">&nbsp;&nbsp;Experience</h3> </div>
                 <div class="col-md-2 text-right">
               @can('update', $listcv)
      <a class="btn btn-primary float-right" href="{{ url('getExperiences/'.$id)}}">Nouveau experience</a>
      @endcan
            </div>

   
    
   
       
  </div></div></div>
  <div class="card-body">
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

@can('update', $listcv)
     <td><a href="{{ url('experiences/'.$listexperience->id.'/edit/'.$listexperience->cv_id)}}"  class="btn btn-primary">Editter</a></td>
      @endcan

  <td>
    
   <form action="{{url('experiences/'.$listexperience->cv_id)}}" method="post">
  
     {{ csrf_field()}}
     {{ method_field('DELETE') }}   
 
       @can('update', $listcv)
    <a  type = "submit" href="{{url('experiences/'.$listexperience->cv_id)}}"  class="btn btn-danger"  id="idcv" name="id">Suprimerr</a>
    @endcan
 </form>



  </td>
       

       
    </tr>
    
     @endforeach
  
  </tbody>
</table>





  </div>

                




 <div class="card">
 <div class="card bg-secondary text-white">
       <div class="row">
         <div class="col-md-10"> 
               <h3 class="panel-title">&nbsp;&nbsp;Compitance</h3> </div>
                 <div class="col-md-2 text-right">
               @can('update', $listcv)
                    <a class="btn btn-primary float-right" href="{{ url('getCompetances/'.$id)}}">Nouveau Compitance</a>
              @endcan
            </div>
        </div></div></div>
  <div class="card-body">








<table class="table">
      <thead>
    <tr>
           


        <th scope="col">id</th>
      <th scope="col">cv_id</th>
      <th scope="col">id</th>
      <th scope="col">competance</th>
      <th scope="col">niveau</th>
      
       <th scope="col">&nbsp;&nbsp;&nbsp;&nbsp;</th>
    </tr>
  </thead>
  <tbody>
    @foreach($listcompetance as $listcompetance)
   
        <td>{{ $listcompetance->id }}</td>
    
   <td>{{ $listcompetance->cv_id }}</td>

        <td>{{ $listcompetance->cv->id }}</td>

         
       <td>{{ $listcompetance->competance }}</td>
      <td>{{ $listcompetance->niveau }}</td>
      

 @can('update', $listcv)
      <td><a href="{{ url('competances/'.$listcompetance->id.'/edit/'.$listcompetance->cv_id)}}"  class="btn btn-primary">Editter</a></td>
      @endcan

  <td>
    
   <form action="{{url('competances/'.$listcompetance->cv_id)}}" method="post">
  
     {{ csrf_field()}}
     {{ method_field('DELETE') }}   
 
   @can('update', $listcv)
    <a  type = "submit" href="{{url('competances/'.$listcompetance->id)}}"  class="btn btn-danger"  id="idcv" name="id">Suprimerr</a>
    @endcan
 </form>



  </td>
       

       
    </tr>
    
     @endforeach
  
  </tbody>
</table>





</div>



    
  <hr>

</div></div></div></div>




   
   <!--div class="card-body">
    <table class="table">
      <thead>
    <tr>
      <th scope="col">Compétance</th>
      <th scope="col">Niveau</th>
     
       <th scope="col">&nbsp;&nbsp;&nbsp;&nbsp;</th>
    </tr>
  </thead>
  <tbody>
    <tr>
     <td>#</td>
       <td>#</td>
      
     <td><button type="button" class="btn btn-outline-primary">Editter</button></td>
    </tr>
   
  </tbody>
</table>

  </div>
</div>


 <!--div class="card-body">
  
         <div class="row" v-if="open1">
   
     <div class="col-md-12">
      <!----creation formula de cv>
      <for  @click.prevent="getExperiences()"  action="{{ url('addExperiences')}}" method="post" enctype="multipart/form-data">

          <div class="form-group">



           <label for=""><b>intituler</b></label>  
                   
           <input type="text" class="form-control" id="basic-url"  name="intituler" value="" v-model="experience.intituler">
    
     
        </div>
      
      <div class="form-group">

           <label for=""><b>lieu</b></label>
         
           <input type="text" class="form-control" id="basic-url"  name="lieu" value="" v-model="experience.lieu" >
    
     
        </div>
      <div class="form-group">

           <label for=""><b>date début</b></label>
         
           <input type="date" class="form-control" id="basic-url"  name="debut" value="" v-model="experience.debut">
    
     
        </div>
         <div class="form-group">

           <label for=""><b>date fin</b></label>
         
           <input type="date" class="form-control" id="basic-url"  name="fin" value="" v-model="experience.fin">
    
     
        </div>


          <button type="submit" class="btn btn-info btn-block"  @click="addExperiences">ajouter </button--
  
  $table->string('svlt');
               $table->string('divren');
                $table->string('nvEt');



           $profile->cvlt=$request->input('cvlt');
  $profile->divren=$request->input('divren');
  $profile->nvEt=$request->input('nvEt');>




   
        
    


  

      </div></div></div></div>
 

<script>
    export default {
        data() {
            return {
                name: null
            }
        },
        methods: {
            submit() {
                console.log('submit profile')
                console.log(this.name)
            }
        }
    }
</script>


<script> 



    
         
   var app =new Vue( {
                el:'#root',
                data (){
                  return {
                    message: 'je suis leila mereimm hasnaoui ',
                    experiences: [],
                    open : false,
                    open1 : false,
                    experience: {
                     id: 0,
                     cv_id: window.Laravel.cv_id,
                     intituler: '',
                     lieu : '',
                     debut: '',
                     fin: ''


}  
                    }

                    
                },
                 methods: {
                   getExperiences: function(){

                  axios.get(window.Laravel.url+'/getExperiences/'+window.Laravel.cv_id)

                  .then(response =>{
                    console.log(response.data);
                    this.experiences=response.data;
                  })
                  .catch(error =>{


                     console.log('errors:', error);

                  })
                 },

                  addExperiences: function(){


                  axios.post(window.Laravel.url+'/addexperiences'+ this.experience)

                  .then(response =>{
                    method :post;
                    if(response.data.etat){

                      this.open=false;
                      this.push(this.experience);
                     this.experience= {
                     id: 0,
                     cv_id: window.Laravel.cv_id,
                     intituler: '',
                     lieu : '',
                     debut: '',
                     fin: ''




                    }


                    }
                  })
                  .catch(error =>{


                     console.log(error);

                  })
                 },

               
               



                          


                created:function(){
                this.getExperiences();
                                this.addExperiences();



                }



            }


          });


          
        </script>





@endsection


@section('javascripts')
<script style="js/vue.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

<script>
 window.Laravel={!! json_encode([
  'csrftoken'   =>csrf_token(),
  'cv_id'=>$id,
  'url'    =>url('/')
  ])!!};
</script>


 @endsection


 @yield('content1')