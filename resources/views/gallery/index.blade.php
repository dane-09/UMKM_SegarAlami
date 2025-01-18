@extends('dashboard')

@section('title', 'Tabel Gallery')

@section('content')
<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Tabel Gallery</h5>
        </div>
        <div class="card-body">
            <!-- Success Alert -->
            @if (session('success'))
                <div class="alert alert-success">
                    <strong>Sukses!</strong> {{ session('success') }}
                </div>
            @endif

            <!-- Tombol Tambah -->
            <a href="{{ route('gallery.create') }}" class="btn btn-primary mb-3">Tambah Gallery</a>

            <!-- Tabel Gallery -->
            <table class="table table-bordered table-striped table-hover">
                <thead class="table-primary">
                    <tr>
                        <th>Gambar</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($gallery as $item)
                    <tr>
                        <td class="text-center">
                            <img src="{{ asset('storage/' . $item->gambar) }}"
                                 alt="Gambar"
                                 class="img-thumbnail"
                                 style="width: 100px; height: 100px; object-fit: cover;">
                        </td>
                        <td>{{ $item->alt_text }}</td>
                        <td>
                            <!-- Tombol Edit -->
                            <a href="{{ route('gallery.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>

                            <!-- Tombol Hapus -->
                            <form action="{{ route('gallery.destroy', $item->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
