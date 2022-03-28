@extends('master')
@section('title')
    <title>Welcome Page</title>
@endsection

@section('content')
<div class="section">
    <div class="section-header">
        <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
          <div class="col-md-6 p-5 mt-lg-5">
            <h1 class="display-5 animated fadeIn mb-4">Welcome To <br> <span class="text-primary-morioh">Morioh Hotel</span>
              <br><a href="{{ route('menu.index') }}" class="btn btn-primary py-3 px-5 me-3 animated fadeIn"> Lihat kamar</a>
          </div>
          <div class="col-md-6 animated fadeIn">
            <div class="owl-carousel header-carousel">
              <div class="owl-carousel-item">
                <img class="img-fluid" src="{{ asset('Arkan/img/1.jpg') }}" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>

@endsection

