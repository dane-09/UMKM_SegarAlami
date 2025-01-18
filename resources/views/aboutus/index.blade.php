<<<<<<< HEAD
@extends('dashboard')

@section('title', 'Daftar About Us')

@section('content')
<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Daftar About Us</h5>
        </div>
        <div class="card-body">
            <div class=" mb-3">
                <a href="{{ route('aboutus.create') }}" class="btn btn-primary mb-3">Tambah About Us</a>
            </div>

            @if (session('success'))
                <div class="alert alert-success">
                    <strong>Sukses!</strong> {{ session('success') }}
                </div>
            @endif

            @if ($aboutus->isEmpty())
                <p class="text-center">Belum ada data About Us.</p>
            @else
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <thead class="table-primary text-center">
                            <tr>
                                <th>Sub Tagline</th>
                                <th>Tagline</th>
                                <th>Deskripsi</th>
                                <th>Gambar</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($aboutus as $item)
                                <tr>
                                    <td>{{ $item->sub_tagline }}</td>
                                    <td>{{ $item->tagline }}</td>
                                    <td>{{ Str::limit($item->deskripsi, 50) }}</td>
                                    <td class="text-center">
                                        <img src="{{ asset('storage/' . $item->gambar) }}" alt="Gambar About Us" class="img-thumbnail" style="width: 100px; height: 100px; object-fit: cover;">
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('aboutus.edit', $item->id) }}" class="btn btn-warning btn-sm">
                                            <i class="bi bi-pencil"></i> Edit
                                        </a>
                                        <form action="{{ route('aboutus.destroy', $item->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus About Us ini?')">
                                                <i class="bi bi-trash"></i> Hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>
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
        <a href="{{ route('aboutus.create') }}" class="btn btn-primary mb-3">Tambah About Us</a>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Tabel About Us -->
        <table class="table table-bordered table-striped table-hover">
            <thead class="table-primary">
                <tr>
                    <th>Sub Tagline</th>
                    <th>Tagline</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($aboutus as $item)
                <tr>
                    <td>{{ $item->sub_tagline }}</td>
                    <td>{{ $item->tagline }}</td>
                    <td>{{ $item->deskripsi }}</td>
                    <td><img src="{{ asset('storage/' . $item->gambar) }}" alt="Gambar {{ $item->tagline }}" class="img-thumbnail"></td>
                    <td>
                        <!-- Tombol Edit -->
                        <a href="{{ route('aboutus.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>

                        <!-- Tombol Hapus -->
                        <form action="{{ route('aboutus.destroy', $item->id) }}" method="POST" style="display:inline;">
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
