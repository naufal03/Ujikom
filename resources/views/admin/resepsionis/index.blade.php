@extends('stisla')

@section('title')
  <title>Resepsionis Page</title>
@endsection

@section('content')
  <section class="section">
    <div class="section-header">
      <h1>Resepsionis Page</h1>
    </div>
    <div class="row">
      <div class="col-12">
        <div class=" card card-primary">
          <div class="card-header">
            <a href="#" class="btn btn-primary"></a>
          </div>
          {{-- search --}}
          <form action="{{ route('resepsionis.index') }}" method="GET">
            <div class="input-group">
              <input type="text" class="form-control" name="cari" placeholder="cari" value="{{ $request->cari }}">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-primary">Cari</button>
                </div>
            </div>
          </form>
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
                      <td>

                        <a href="{{ route('resepsionis.edit', $rs->id) }}" class="btn btn-outline-warning"><i
                            class="fas fa-edit"></i></a>
                        <form action="{{ route('resepsionis.destroy', $rs->id) }}" method="post">
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-danger"><i class="fas fa-trash "></i></button>
                        </form>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
