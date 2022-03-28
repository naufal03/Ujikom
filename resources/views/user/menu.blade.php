@extends('master')
@section('title')
  <title>Menu Page</title>
@endsection

@section('content')
  <!-- Navbar Start -->
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
  <!-- Menu  Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
        <h1 class="mb-3">Kamar</h1>
        <p>Kamar yang dimiliki oleh hotel morioh</p>
      </div>
      @foreach ($kamar as $kr)
        <div class="tab-content">
          <div id="tab-1" class="tab-pane fade show p-0 active">
            <div class="row g-4">
              <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="property-item rounded overflow-hidden">
                  <div class="position-relative overflow-hidden">
                    <a href="{{ route('boking.index') }}"><img class="img-fluid"
                        src="{{ asset('Arkan/img/deluxe1.jpg') }}" alt=""></a>
                    <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                    </div>
                  </div>
                  <div class="p-4 pb-0">
                    <a class="d-block h5 mb-2" href="">{{ $kr->type->name }} Room</a>
                  </div>
                  <div class="d-flex border-top">
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="property-item rounded overflow-hidden">
                  <div class="position-relative overflow-hidden">
                    <a href=""><img class="img-fluid" src="{{ asset('arkan/img/deluxe2.jpg') }}" alt=""></a>

                    <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                    </div>
                  </div>
                  <div class="p-4 pb-0">
                    <a class="d-block h5 mb-2" href="">{{ $kr->type->name }} Room</a>
                  </div>
                  <div class="d-flex border-top">
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="property-item rounded overflow-hidden">
                  <div class="position-relative overflow-hidden">
                    <a href=""><img class="img-fluid" src="{{ asset('Arkan/img/deluxe3.jpg') }}" alt=""></a>
                    <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                    </div>
                  </div>
                  <div class="p-4 pb-0">
                    <a class="d-block h5 mb-2" href="">{{ $kr->type->name }} Room</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      @endforeach
      {{-- menu end --}}
      <br><br><br>
      {{-- fasilitas start --}}
      <div class="container-xxl py-5">
        <div class="container">
          <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-3">Fasilitas Hotel</h1>
            <p>Fasilitas yang dimiliki oleh hotel morioh</p>
          </div>
          <div class="row g-4">
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
              <a class="cat-item d-block bg-light text-center rounded p-3">
                <div class="rounded p-4">
                  <div class="icon mb-3">
                    <img class="img-fluid" src="{{ asset('Arkan/img/resto.jpg') }}" alt="Icon">
                  </div>
                  <h6>Restoran</h6>
                </div>
              </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
              <a class="cat-item d-block bg-light text-center rounded p-3">
                <div class="rounded p-4">
                  <div class="icon mb-3">
                    <img class="img-fluid" src="{{ asset('Arkan/img/kolam.jpg') }}" alt="Icon">
                  </div>
                  <h6>Kolam Renang</h6>
                </div>
              </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
              <a class="cat-item d-block bg-light text-center rounded p-3">
                <div class="rounded p-4">
                  <div class="icon mb-3">
                    <img class="img-fluid" src="{{ asset('Arkan/img/taman.jpg') }}" alt="Icon">
                  </div>
                  <h6>Taman</h6>
                </div>
              </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
              <a class="cat-item d-block bg-light text-center rounded p-3">
                <div class="rounded p-4">
                  <div class="icon mb-3">
                    <img class="img-fluid" src="{{ asset('Arkan/img/bar.jpg') }}" alt="Icon">
                  </div>
                  <h6>Bar</h6>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    @endsection
