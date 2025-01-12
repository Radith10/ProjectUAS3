@extends('layouts.appAdmin')

@section('content')
    <div class="container-fluid px-4 mt-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="mb-0">Tambah Menu</h4>
            <a href="{{ route('menu.index') }}" class="btn btn-secondary">Kembali</a>
        </div>

        <!-- Form Tambah Menu -->
        <div class="card shadow-sm">
            <div class="card-body">
                <form action="{{ route('menu.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Menu</label>
                        <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama menu" required>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea id="deskripsi" name="deskripsi" class="form-control" rows="3" placeholder="Deskripsi menu"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="number" id="harga" name="harga" class="form-control" placeholder="Harga menu" required>
                    </div>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
