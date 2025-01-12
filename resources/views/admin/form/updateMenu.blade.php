@extends('layouts.appAdmin')

@section('content')
    <div class="container-fluid px-4 mt-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="mb-0">Edit Menu</h4>
            <a href="{{ route('menu.index') }}" class="btn btn-secondary">Kembali</a>
        </div>

        <!-- Form Edit Menu -->
        <div class="card shadow-sm">
            <div class="card-body">
                <form action="{{ route('menu.update', $menu->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Menu</label>
                        <input type="text" id="nama" name="nama" class="form-control" 
                            value="{{ $menu->nama }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea id="deskripsi" name="deskripsi" class="form-control" rows="3">{{ $menu->deskripsi }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="number" id="harga" name="harga" class="form-control" 
                            value="{{ $menu->harga }}" required>
                    </div>
                    <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
