@extends('layouts.app')
@section('content')
<div class="hero-wrap" style="background-image: url({{ asset('main/images/bg.jpg') }});">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
            <div class="col-md-9 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><strong>Explore <br></strong> amazing trainers</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section">
  <div class="container">
    <div class="row justify-content-start mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate">
        <h2 class="mb-4">
          <strong>Amazing</strong> Trainers
        </h2>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
        @foreach($trainerData as $trainer)
      <div class="col-sm col-md-6 col-lg ftco-animate">
        <div class="destination">
          <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url({{ asset( $trainer['image'] ) }});">
          </a>
          <div class="text p-3">
            <div class="d-flex">
              <div class="one">
                <h3>
                  <a href="#">{{ $trainer['name'] }}</a>
                </h3>

                <!-- <p class="rate">
                  <i class="icon-star"></i>
                  <i class="icon-star"></i>
                  <i class="icon-star"></i>
                  <i class="icon-star"></i>
                  <i class="icon-star-o"></i>
                  <span>8 Rating</span>
                </p> -->
              </div>
              <!-- <div class="two">
                <span class="price per-price">$40 <br>
                  <small>/night</small>
                </span>
              </div> -->
            </div>
            <a class="color-black" href="{{ route('getTrainerDetail', ['id' => $trainer['id']]) }}"><p class="ellipse-text">{{ $trainer['description'] }}</p></a>
            <hr>
            <p class="bottom-area d-flex">
              <!-- <span>
                <i class="icon-map-o"></i> Miami, Fl </span> -->
              <span class="ml-auto">
                <a href="#">Book Now</a>
              </span>
            </p>
          </div>
        </div>
      </div>
        @endforeach
    </div>
  </div>
</section>
@endsection