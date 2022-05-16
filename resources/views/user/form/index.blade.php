@extends('master')
@section('title')
  <title>Form Pemesanan</title>
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
        <h1 class="m-0 text-primary">Pesan</h1>
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
  {{-- form start --}}
  <div class="tables">
    <form action="{{ route('resepsionis.store') }}" method="POST">
      @csrf
      <table class="table table-bordered">
        <tr>
          <td>Nama Pemesan</td>
          <td><input type="text" name="name" class="form-control"></td>
        </tr>
        <tr>
          <td>No HP</td>
          <td><input type="number" name="nohp" class="form-control"></td>
        </tr>
        <tr>
            <td>type</td>
            <td> <select name="type_id" class="form-control">
                <option value="0">-Pilih Data-</option>
                @foreach ($type as $tp)
                  <option value="{{ $tp->id }}">{{ $tp->name }}</option>
                @endforeach
              </select></td>
          <tr>
        <tr>
          <td>Check In</td>
          <td><input type="date" name="check_in" class="form-control"></td>
        </tr>
        <tr>
          <td>Check Out</td>
          <td><input type="date" name="check_out" class="form-control"></td>
        </tr>
        <tr>
          <td>Jumlah</td>
          <td><input type="text" name="jumlah" class="form-control"></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><button type="submit" class="btn btn-primary">Kirim</button></td>
        </tr>
      </table>
    </form>
  </div>
  <div class="card-body">
    <div class="table table-responsive">
      <table class="table table-striped">
        <thead>
          <th>No</th>
          <th>Nama Pemesan</th>
          <th>No Hp</th>
          <th>Tipe Kamar</th>
          <th>check In</th>
          <th>check Out</th>
          <th>Jumalah Kamar</th>
          <th>No Kamar</th>
        </thead>
        <tbody>
          @foreach ($resep as $rs)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $rs->name }}</td>
              <td>{{ $rs->nohp }}</td>
              <td>{{ $rs->type->name }}</td>
              <td>{{ $rs->check_in }}</td>
              <td>{{ $rs->check_out }}</td>
              <td>{{ $rs->jumlah }}</td>
              <td>{{ $rs->nokamar }}</td>

            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
