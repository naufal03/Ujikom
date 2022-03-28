@extends('stisla')
@section('title')
  <title>Kamar Page</title>
@endsection
@section('content')
  <section class="section">
    <div class="section-header">
      <h1>Edit Fasilitas Kamar Page</h1>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <p>Halaman Edit Fasilitas Data Kamar</p>
          </div>
          <div class="card-body">
            <form action="{{ route('faskam.update', $faskam->id)}}" method="POST">
              @csrf
              @method('put')
              <table class="table table-bordered">
                <tr>
                  <td>type</td>
                  <td> <select name="type_id" class="form-control">
                      <option value="0">-Pilih Data-</option>
                      @foreach ($type as $tp)
                        <option value="{{ $tp->id }}">{{ $tp->name }}</option>
                      @endforeach
                    </select></td>
                <tr>
                  <td>Fasilitas</td>
                  <td><input type="text" name="facility1" class="form-control" value="{{ $faskam->facility1 }}"></td>
                </tr>
                <tr>
                  <td>Fasilitas</td>
                  <td><input type="text" name="facility2" class="form-control" value="{{ $faskam->facility2 }}"></td>
                </tr>
                <tr>
                  <td>Fasilitas</td>
                  <td><input type="text" name="facility3" class="form-control" value="{{ $faskam->facility3 }}"></td>
                </tr>
                <tr>
                  <td>Fasilitas</td>
                  <td><input type="text" name="facility4" class="form-control" value="{{ $faskam->facility4 }}"></td>
                </tr>
                <tr>
                  <td>Fasilitas</td>
                  <td><input type="text" name="facility5" class="form-control" value="{{ $faskam->facility5 }}"></td>
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
