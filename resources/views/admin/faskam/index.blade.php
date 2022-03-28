@extends('stisla')

@section('title')
  <title>Fasilitas Kamar Page</title>
@endsection

@section('content')
  <section class="section">
    <div class="section-header">
      <h1> Fasilitas kamar Pages</h1>
    </div>
    <div class="row">
      <div class="col-12">
        <div class=" card card-primary">
          <div class="card-header">
            <a href="{{ route('faskam.create') }}" class="btn btn-primary">Add Fasiltas Kamar</a>
          </div>
          <div class="card-body">
            <div class="table table-responsive">
              <table class="table table-striped">
                <thead>
                  <th>No</th>
                  <th>Type</th>
                  <th>Fasilitas</th>
                  <th>Fasilitas</th>
                  <th>Fasilitas</th>
                  <th>Fasilitas</th>
                  <th>Fasilitas</th>
                  <th>Aksi</th>
                </thead>
                <tbody>
                  @foreach ($faskam as $fk)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $fk->type->name }}</td>
                      <td>{{ $fk->facility1 }}</td>
                      <td>{{ $fk->facility2 }}</td>
                      <td>{{ $fk->facility3 }}</td>
                      <td>{{ $fk->facility4 }}</td>
                      <td>{{ $fk->facility5 }}</td>
                      <td><a href="{{ route('faskam.edit', $fk->id) }}" class="btn btn-outline-warning"><i
                            class="fas fa-edit"></i></a>
                        <form action="{{ route('faskam.destroy', $fk->id) }}" method="post">
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
