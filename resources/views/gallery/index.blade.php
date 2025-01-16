<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Gallery</title>
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
        <h1 class="mb-4">Tabel Gallery</h1>

        <!-- Tombol Tambah -->
        <a href="{{ route('gallery.create') }}" class="btn btn-primary mb-3">Tambah Gallery</a>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Tabel Gallery -->
        <table class="table table-bordered table-striped table-hover">
            <thead class="table-primary">
                <tr>
                    <th>Gambar</th>
                    <th>Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($gallery as $item)
                    <tr>


                        <td><img src="{{ asset('storage/' . $item->gambar) }}" alt="Gambar {{ $item->tagline }}"
                                class="img-thumbnail"></td>
                        <td>{{ $item->alt_text }}</td>
                        <td>
                            <!-- Tombol Edit -->
                            <a href="{{ route('gallery.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>

                            <!-- Tombol Hapus -->
                            <form action="{{ route('gallery.destroy', $item->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</button>
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
