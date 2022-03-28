@extends('stisla')

@section('content')
<div class="section-header">
    <h1>Welcome</h1>
  </div>
<div class="row">
    <div class="col-12">
      <div class="col-12 mb-4">
        <div class="hero text-white hero-bg-image hero-bg-parallax">
          <div class="hero-inner">
            <h2>Selamat Datang, {{ Auth::user()->name }} !</h2>
            <p class="lead">hak akses {{ Auth::user()->level }} telah diberikan kepada akun
              Anda!
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
