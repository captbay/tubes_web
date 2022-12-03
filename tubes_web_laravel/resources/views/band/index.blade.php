@extends('dashboard')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Band</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{ url('band') }}">Band</a>
                        </li>
                        <li class="breadcrumb-item active">Index</li>
                    </ol>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
    </div>
    <!-- /.container-fluid -->
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{ route('band.create') }}" class="btn btn-md btn-success mb-3">TAMBAH BAND</a>
                            
                            <div class="table-responsive p-0">
                                <table class="table table-hover textnowrap">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Nama Band</th>
                                            <th class="text-center">Harga Band</th>
                                            <th class="text-center">Image Band</th>
                                            <th class="text-center">Deskripsi Band</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($band as $item)
                                            <tr>
                                                <td class="text-center">{{ $item->Nama }}</td>
                                                <td class="text-center">{{ $item->Harga }}</td>
                                                <td class="text-center">
                                                    <img src="{{ Storage::url('public/bands/').$item->Image }}" class="rounded" style="width: 150px">
                                                </td>
                                                <td class="text-center">{{ $item->Deskripsi }}</td>
                                                <td class="text-center">
                                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                        action="{{ route('band.destroy', $item->id) }}"
                                                        method="POST">
                                                        <a href="{{ route('band.edit', $item->id) }}"
                                                            class="btn btn-sm btn-primary">EDIT</a>

                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <div class="alert alert-danger">Data Band belum tersedia
                                            </div>
                                        @endforelse
                                    </tbody>
                                </table>
                                <div class="d-flex justify-content-center">
                                    {{ $band->links() }}
                                </div>

                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
@endsection
