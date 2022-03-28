@extends('stisla')
@section('title')
  <title>Kamar Page</title>
@endsection
@section('content')
  <section class="section">
    <div class="section-header">
      <h1>Edit Kamar Page</h1>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <p>Halaman Edit Data Kamar</p>
          </div>
          <div class="card-body">
            <form action="{{ route('kamar.update', $kamar->id) }}" method="POST">
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
                  <td>Jumlah Kamar</td>
                  <td><input type="text" name="number" class="form-control" value="{{ $kamar->number }}"></td>
                </tr>
                <tr>
                  <td>Kapasitas</td>
                  <td><input type="text" name="capacity" class="form-control" value="{{ $kamar->capacity }}"></td>
                </tr>
                <tr>
                  <td>Harga</td>
                  <td><input type="text" name="price" class="form-control" value="{{ $kamar->price }}"></td>
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
