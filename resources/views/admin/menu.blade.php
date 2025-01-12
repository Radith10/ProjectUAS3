@extends('layouts.appAdmin')

@section('content')
    <div class="container-fluid px-4 mt-4">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="mb-0">Daftar Menu</h4>
            <a href="{{ route('menu.create') }}" class="btn btn-success">Tambah Menu</a>
        </div>

        <!-- Form Pencarian -->
        <form action="{{ route('menu.index') }}" method="GET" class="mb-3">
            <div class="input-group">
                <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari menu..."
                    class="form-control rounded">
                <button type="submit" class="btn btn-primary">Cari</button>
            </div>
        </form>

        <!-- Tabel Data -->
        <div class="table-responsive">
            <table class="table table-striped table-bordered text-center">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Deskripsi</th>
                        <th>Harga</th>
                        <th>Tanggal Dibuat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($menus as $index => $menu)
                        <tr>
                            <td>{{ $menus->firstItem() + $index }}</td>
                            <td>{{ $menu->nama }}</td>
                            <td>{{ $menu->deskripsi }}</td>
                            <td>Rp {{ number_format($menu->harga, 2, ',', '.') }}</td>
                            <td>{{ $menu->created_at->format('d-m-Y H:i') }}</td>
                            <td>
                                <a href="{{ route('menu.edit', $menu->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('menu.destroy', $menu->id) }}" method="POST" class="d-inline-block"
                                    onsubmit="return confirm('Yakin ingin menghapus menu ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">Tidak ada menu ditemukan.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Link Paginasi -->
        <div class="d-flex justify-content-center mt-4">
            {{ $menus->appends(request()->input())->links() }}
        </div>
    </div>
@endsection
