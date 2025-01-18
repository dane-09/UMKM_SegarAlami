<<<<<<< HEAD
@extends('dashboard')

@section('title', 'Tabel Product')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Tabel Product</h1>

    <!-- Tombol Tambah -->
    <a href="{{ route('product.create') }}" class="btn btn-primary mb-3">Tambah Product</a>

    <!-- Pesan Sukses -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Tabel Product -->
    <table class="table table-bordered table-striped table-hover">
        <thead class="table-primary">
            <tr>
                <th>Tagline</th>
                <th>Deskripsi</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($product as $item)
            <tr>
                <td>{{ $item->tagline }}</td>
                <td>{{ $item->deskripsi }}</td>
                <td class="text-center">
                    <img src="{{ asset('storage/' . $item->gambar) }}"
                         alt="Gambar"
                         class="img-thumbnail"
                         style="width: 100px; height: 100px; object-fit: cover;">
                </td>
                <td>
                    <!-- Tombol Edit -->
                    <a href="{{ route('product.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>

                    <!-- Tombol Hapus -->
                    <form
                        action="{{ route('product.destroy', $item->id) }}"
                        method="POST"
                        style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button
                            type="submit"
                            class="btn btn-danger btn-sm"
                            onclick="return confirm('Apakah Anda yakin ingin menghapus?')">
                            Hapus
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
=======
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Hero Section</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .img-thumbnail {
            max-width: 100px;
            height: auto;
        }
    </style>
</head>
<body>

    <div class="container mt-5">
        <h1 class="mb-4">Tabel Hero Section</h1>

        <!-- Tombol Tambah -->
        <a href="{{ route('product.create') }}" class="btn btn-primary mb-3">Tambah Hero Section</a>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Tabel Hero Section -->
        <table class="table table-bordered table-striped table-hover">
            <thead class="table-primary">
                <tr>
                    <th>Tagline</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($product as $item)
                <tr>
                    <td>{{ $item->tagline }}</td>
                    <td>{{ $item->deskripsi }}</td>
                    <td><img src="{{ asset('storage/' . $item->gambar) }}" alt="Gambar {{ $item->tagline }}" class="img-thumbnail"></td>
                    <td>
                        <!-- Tombol Edit -->
                        <a href="{{ route('product.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>

                        <!-- Tombol Hapus -->
                        <form action="{{ route('product.destroy', $item->id) }}" method="POST" style="display:inline;">
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
>>>>>>> 0d517a97a973fa312f467932224028c03d0fefaa
