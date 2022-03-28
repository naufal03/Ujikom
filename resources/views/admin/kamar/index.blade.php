@extends('stisla')

@section('title')
  <title> Kamar Page</title>
@endsection

@section('content')
  <section class="section">
    <div class="section-header">
      <h1>kamar Pages</h1>
    </div>
    <div class="row">
      <div class="col-12">
        <div class=" card card-primary">
          <div class="card-header">
            <a href="{{ route('kamar.create') }}" class="btn btn-primary">Add Kamar</a>
          </div>
          <div class="card-body">
            <div class="table table-responsive">
              <table class="table table-striped">
                <thead>
                  <th>No</th>
                  <th>Type</th>
                  <th>Jumlah Kamar</th>
                  <th>Kapasitas</th>
                  <th>Harga</th>
                  {{-- <th>Room Status</th> --}}
                  <th>Aksi</th>
                </thead>
                <tbody>
                  @foreach ($kamar as $kr)
                    <tr>
                      <td>{{ $loop->iteration}}</td>
                      <td>{{ $kr->type->name }}</td>
                      <td>{{ $kr->number }}</td>
                      <td>{{ $kr->capacity }}</td>
                      <td>{{ $kr->price }}</td>
                      {{-- <td>{{ $kr->roomstatus_id }}</td> --}}
                      <td><a href="{{ route('kamar.edit', $kr->id) }}" class="btn btn-outline-warning"><i
                            class="fas fa-edit"></i></a>
                        <form action="{{ route('kamar.destroy', $kr->id) }}" method="post">
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
