@extends('dashboard')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Band</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="#">Band</a>
                        </li>
                        <li class="breadcrumb-item active">Edit</li>
                    </ol>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            
                            <form action="{{ route('band.update', $band->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label class="font-weight-bold">Nama Band</label>
                                        <input type="text"
                                            class="form-control @error('Nama') is-invalid @enderror"
                                            name="Nama" value="{{ old('Nama', $band->Nama) }}"
                                            placeholder="Masukkan Nama Band">
                                        @error('Nama')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label class="font-weight-bold">Harga Band</label>
                                        <input type="number"
                                            class="form-control @error('Harga') is-invalid @enderror"
                                            name="Harga" value="{{ old('Harga', $band->Harga) }}"
                                            placeholder="Masukkan Harga">
                                        @error('Harga')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label class="font-weight-bold">Image Band</label>
                                        <input type="file" class="form-control @error('Image') is-invalid @enderror" name="Image">
                                    
                                        <!-- error message untuk title -->
                                        @error('Image')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label class="font-weight-bold">Deskirpsi Band</label>
                                        <textarea class="form-control @error('Deskripsi') is-invalid @enderror" name="Deskripsi" rows="5" placeholder="Masukkan Deskripsi">{{ old('Deskripsi',  $band->Deskripsi) }}</textarea>
                                    
                                        <!-- error message untuk Deskripsi -->
                                        @error('Deskripsi')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
                                {{-- <button type="reset" class="btn btn-md btn-warning">RESET</button> --}}
                            </form>
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
