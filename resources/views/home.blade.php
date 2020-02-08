@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
    
                         pustuler voter cv<br>
             

                            <a href="{{  url('/cvs') }}">déposer un CV</a>
                      
                         </div>
            </div>

 <section class="banner_part">
       
       
        <div class="hero-app-1 custom-animation"><img src="img/animate_icon/icon_1.png" alt=""></div>
        <div class="hero-app-2 custom-animation2"><img src="img/animate_icon/icon_2.png" alt=""></div>
        <div class="hero-app-5 custom-animation4"><img src="img/animate_icon/icon_5.png" alt=""></div>
        <div class="hero-app-7 custom-animation2"><img src="img/animate_icon/icon_7.png" alt=""></div>
        <div class="hero-app-8 custom-animation"><img src="img/animate_icon/icon_8.png" alt=""></div>
    </section>
     <section class="about_part">
       
        <div class="hero-app-7 custom-animation"><img src="img/animate_icon/icon_1.png" alt=""></div>
        <div class="hero-app-8 custom-animation2"><img src="img/animate_icon/icon_2.png" alt=""></div>
        <div class="hero-app-6 custom-animation3"><img src="img/animate_icon/icon_3.png" alt=""></div>
    </section>



            
        </div>




  


    </div>
</div>
@endsection
