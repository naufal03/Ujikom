@extends('master')
@section('title')
  <title>Boking Page</title>
@endsection

{{-- start --}}
@section('content')
  <div class="container-fluid nav-bar bg-transparent">
    <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
      <a href="index.html" class="navbar-brand d-flex align-items-center text-center">
        <div class="icon p-2 me-2">
          <img class="img-fluid" src="{{ asset('Arkan/img/logo.png') }}" alt="Icon"
            style="width: 30px; height: 30px;">
        </div>
        <h1 class="m-0 text-primary">Morioh Hotel</h1>
      </a>
      <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto">
            <div class="d-sm-none d-lg-inline-block">{{ Auth::user()->name }}</div>
          <a class="dropdown-item has-icon text-danger" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
            <i class="fas fa-sign-out-alt"></i> Logout
            </a>
          </form>
        </div>
      </div>
    </nav>
  </div>
  {{-- content --}}
  <div class="container-xxl py-5">
    <div class="container">
      <div class="row g-5 align-items-center">
        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
          <div class="about-img position-relative overflow-hidden p-5 pe-0">
            <img class="img-fluid w-100" src="{{ asset('Arkan/img/deluxe1.jpg') }}">
          </div>
        </div>
        @foreach ($kamar as $kr)
        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
            <h1 class="mb-4">{{ $kr->type->name }}</h1>

            <p class="mb-4">RP. {{ $kr->price }}</p>
            @foreach ($faskam as $fk)
            <p><i class="fa fa-check text-primary me-3"></i>{{ $fk->facility1 }}</p>
            <p><i class="fa fa-check text-primary me-3"></i>{{ $fk->facility2 }}</p>
            <p><i class="fa fa-check text-primary me-3"></i>{{ $fk->facility3 }}</p>
            <p><i class="fa fa-check text-primary me-3"></i>{{ $fk->facility4 }}</p>
            <p><i class=""></i>Kapasitas : {{ $kr->capacity }}</p>
            @endforeach
            @endforeach
            <a class="btn btn-primary py-3 px-5 mt-3" href="{{ route('resepsionis.create') }}">Pesan</a>
        </div>
      </div>
    </div>
  </div>
@endsection
