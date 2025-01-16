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
        <a href="{{ route('contact.create') }}" class="btn btn-primary mb-3">Tambah Hero Section</a>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Tabel Hero Section -->
        <table class="table table-bordered table-striped table-hover">
            <thead class="table-primary">
                <tr>
                    <th>Lokasi</th>
                    <th>No</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contact as $item)
                <tr>
                    <td>{{ $item->lokasi }}</td>
                    <td>{{ $item->no }}</td>
                    <td>{{ $item->email }}</td>
                    <td>
                        <!-- Tombol Edit -->
                        <a href="{{ route('contact.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>

                        <!-- Tombol Hapus -->
                        <form action="{{ route('contact.destroy', $item->id) }}" method="POST" style="display:inline;">
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
