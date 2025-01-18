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
