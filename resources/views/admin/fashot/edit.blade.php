@extends('stisla')
@section('title')
  <title>Fasilitas Hotel Page</title>
@endsection
@section('content')
  <section class="section">
    <div class="section-header">
      <h1>Edit Fasilitas Hotel Page</h1>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <p>Halaman Edit Data Fasilitas Hotel</p>
          </div>
          <div class="card-body">
            <form action="{{ route('fashot.update', $fashot->id) }}" method="POST">
              @csrf
              @method('put')
              <table class="table table-bordered">
                <tr>
                  <td>Nama Fasilitas</td>
                  <td><input type="text" name="name" class="form-control" value="{{ $fashot->name }}"></td>
                <tr>
                  <td>Detail</td>
                  <td><input type="text" name="detail" class="form-control" value="{{ $fashot->detail }}"></td>
                <tr>
                  <td>&nbsp;</td>
                  <td><button type="submit" class="btn btn-primary">Save</button></td>
                </tr>
                </tr>
              </table>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
