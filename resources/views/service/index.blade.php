<<<<<<< HEAD
@extends('dashboard')

@section('title', 'Tabel About Us')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Tabel About Us</h1>

    <!-- Tombol Tambah -->
    <a href="{{ route('service.create') }}" class="btn btn-primary mb-3">Tambah Service</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Tabel About Us -->
    <table class="table table-bordered table-striped table-hover">
        <thead class="table-primary">
            <tr>
                <th>Tagline</th>
                <th>Deskripsi</th>
                <th>Gambar Deskripsi</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($service as $item)
            <tr>
                <td>{{ $item->tagline }}</td>
                <td>{{ $item->deskripsi }}</td>
                <td class="text-center">
                    <img src="{{ asset('storage/' . $item->gambar_deskripsi) }}"
                         alt="Gambar"
                         class="img-thumbnail"
                         style="width: 100px; height: 100px; object-fit: cover;">
                </td>
                <td class="text-center">
                    <img src="{{ asset('storage/' . $item->gambar) }}"
                         alt="Gambar"
                         class="img-thumbnail"
                         style="width: 100px; height: 100px; object-fit: cover;">
                </td>
                <td>
                    <!-- Tombol Edit -->
                    <a href="{{ route('service.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>

                    <!-- Tombol Hapus -->
                    <form action="{{ route('service.destroy', $item->id) }}" method="POST" style="display:inline;">
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
@endsection
=======
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel About Us</title>
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
        <h1 class="mb-4">Tabel About Us</h1>

        <!-- Tombol Tambah -->
        <a href="{{ route('service.create') }}" class="btn btn-primary mb-3">Tambah Service</a>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Tabel About Us -->
        <table class="table table-bordered table-striped table-hover">
            <thead class="table-primary">
                <tr>
                    <th>Tagline</th>
                    <th>Deskripsi</th>
                    <th>Gambar Deskripsi</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($service as $item)
                <tr>
                    <td>{{ $item->tagline }}</td>
                    <td>{{ $item->deskripsi }}</td>
                    <td>
                        @if($item->gambar_deskripsi)
                        <img src="{{ asset('storage/' . $item->gambar_deskripsi) }}" alt="Gambar Deskripsi {{ $item->tagline }}" class="img-thumbnail">
                        @else
                        <span class="text-muted">Tidak Ada</span>
                        @endif
                    </td>
                    <td>
                        @if($item->gambar)
                        <img src="{{ asset('storage/' . $item->gambar) }}" alt="Gambar {{ $item->tagline }}" class="img-thumbnail">
                        @else
                        <span class="text-muted">Tidak Ada</span>
                        @endif
                    </td>
                    <td>
                        <!-- Tombol Edit -->
                        <a href="{{ route('service.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>

                        <!-- Tombol Hapus -->
                        <form action="{{ route('service.destroy', $item->id) }}" method="POST" style="display:inline;">
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
