@extends('welcome2');

@section('content')

<div id="slider" class="carousel slide" data-ride="carousel">

          <!-- Indicators -->
          <ul class="carousel-indicators">
            <li data-target="#slider" data-slide-to="0" class="active"></li>
            <li data-target="#slider" data-slide-to="1"></li>
            <li data-target="#slider" data-slide-to="2"></li>
          </ul>

            <!-- The slideshow -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{ asset('slideshow/photocat2.jpg') }}" alt="">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('slideshow/photocat3.jpg') }}" alt="">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('slideshow/photocat4.jpg') }}" alt="">
            </div>
          </div>

            <!-- Left and right controls -->
          <a class="carousel-control-prev" href="#slider" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#slider" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>
     </div><hr>

     <div class="row text-left">
      <div class="col-sm-12" style="margin-top: 40px;">

        <div class="well">
          <h3>Japan equips Kenya Police Service with 15 Vehicles - August 18, 2016</h3>
          <p>The Japanese Ambassador to Kenya Mr. Toshitsugu Uesawa, handed over 15 operational cars to the Kenya Police Service. The event, conducted at Police Headquarters marked yet another important step towards the improvement of police capacity in tackling crime.</p>

          <p>“We shall forever be grateful to the Japanese Government for this proactive initiative which will go a long way in ensuring that public safety is improved in our great city” said the Deputy Inspector General, Mr. Joel Kitili when he received the 15 motor vehicles and two motor cycles.</p>
        </div>
      </div>      
    </div>

@stop