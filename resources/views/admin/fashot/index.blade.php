@extends('stisla')

@section('title')
  <title>Fasilitas Hotel Page</title>
@endsection

@section('content')
  <section class="section">
    <div class="section-header">
      <h1>Fasilitas Hotel Page</h1>
    </div>
    <div class="row">
      <div class="col-12">
        <div class=" card card-primary">
          <div class="card-header">
            <a href="{{ route('fashot.create') }}" class="btn btn-primary">Add Fasilitas Hotel</a>
          </div>
          <div class="card-body">
            <div class="table table-responsive">
              <table class="table table-striped">
                <thead>
                  <th>No</th>
                  <th>Nama Fasilitas</th>
                  <th>Detail</th>
                  <th>Aksi</th>
                </thead>
                <tbody>
                  @foreach ($fashot as $fh)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $fh->name }}</td>
                      <td>{{ $fh->detail }}</td>
                      <td><a href="{{ route('fashot.edit', $fh->id) }}" class="btn btn-outline-warning"><i
                            class="fas fa-edit"></i></a>
                        <form action="{{ route('fashot.destroy', $fh->id) }}" method="post">
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
