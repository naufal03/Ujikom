@extends('stisla')
@section('title')
  <title>Fasilitas Kamar Page</title>
@endsection
@section('content')
  <section class="section">
    <div class="section-header">
      <h1>Create Fasilitas Kamar Page</h1>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <p>Halaman Add Data Fasilitas Kamar</p>
          </div>
          <div class="card-body">
            <form action="{{ route('faskam.store') }}" method="POST">
              @csrf
              <table class="table table-bordered">
                <td>Type</td>
                <td> <select name="type_id" class="form-control">
                    <option value="0">-Pilih Data-</option>
                    @foreach ($type as $tp)
                      <option value="{{ $tp->id }}">{{ $tp->name }}</option>
                    @endforeach
                  </select></td>
                </tr>
                <tr>
                  <td>Fasilitas</td>
                  <td><input type="text" name="facility1" class="form-control"></td>
                </tr>
                <tr>
                  <td>Fasilitas</td>
                  <td><input type="text" name="facility2" class="form-control"></td>
                </tr>
                <tr>
                  <td>Fasilitas</td>
                  <td><input type="text" name="facility3" class="form-control"></td>
                </tr>
                <tr>
                  <td>Fasilitas</td>
                  <td><input type="text" name="facility4" class="form-control"></td>
                </tr>
                <tr>
                  <td>Fasilitas</td>
                  <td><input type="text" name="facility5" class="form-control"></td>
                </tr>
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
