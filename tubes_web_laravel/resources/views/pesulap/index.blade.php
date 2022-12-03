@extends('dashboard')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Pesulap</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{ url('pesulap') }}">Pesulap</a>
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
                            <a href="{{ route('pesulap.create') }}" class="btn btn-md btn-success mb-3">TAMBAH
                                PESULAP</a>
                            
                            <div class="table-responsive p-0">
                                <table class="table table-hover textnowrap">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Nama Pesulap</th>
                                            <th class="text-center">Harga Pesulap</th>
                                            <th class="text-center">Image Pesulap</th>
                                            <th class="text-center">Deskripsi Pesulap</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($pesulap as $item)
                                            <tr>
                                                <td class="text-center">{{ $item->Nama }}</td>
                                                <td class="text-center">{{ $item->Harga }}</td>
                                                <td class="text-center">
                                                    <img src="{{ Storage::url('public/pesulaps/').$item->Image }}" class="rounded" style="width: 150px">
                                                </td>
                                                <td class="text-center">{{ $item->Deskripsi }}</td>
                                                <td class="text-center">
                                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                        action="{{ route('pesulap.destroy', $item->id) }}"
                                                        method="POST">
                                                        <a href="{{ route('pesulap.edit', $item->id) }}"
                                                            class="btn btn-sm btn-primary">EDIT</a>

                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <div class="alert alert-danger">Data Pesulap belum tersedia
                                            </div>
                                        @endforelse
                                    </tbody>
                                </table>
                                <div class="d-flex justify-content-center">
                                    {{ $pesulap->links() }}
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
