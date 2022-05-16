@extends('stisla')
@section('title')
  <title>resepsionis Page</title>
@endsection
@section('content')
  <section class="section">
    <div class="section-header">
      <h1>Edit resepsionis Page</h1>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <p>Halaman Edit Data Kamar</p>
          </div>
          <div class="card-body">
            <form action="{{ route('resepsionis.update', $resep->id) }}" method="POST">
              @csrf
              @method('put')
              <table class="table table-bordered">
                <tr>
                  <td>Nama</td>
                  <td><input type="text" name="name" class="form-control" value="{{ $resep->name }}"></td>
                </tr>
                <tr>
                    <td>No Hp</td>
                    <td><input type="text" name="nohp" class="form-control" value="{{ $resep->nohp }}"></td>
                </td>
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
                  <td>Check In</td>
                  <td><input type="text" name="check_in" class="form-control" value="{{ $resep->check_in }}"></td>
                </tr>
                <tr>
                  <td>Check Out</td>
                  <td><input type="text" name="check_out" class="form-control" value="{{ $resep->check_out }}"></td>
                </tr>
                <tr>
                  <td>Jumlah Kamar</td>
                  <td><input type="text" name="jumlah" class="form-control" value="{{ $resep->jumlah }}"></td>
                </tr>
                <tr>
                  <td>No Kamar</td>
                  <td><input type="text" name="nokamar" class="form-control" value="{{ $resep->nokamar }}"></td>
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
