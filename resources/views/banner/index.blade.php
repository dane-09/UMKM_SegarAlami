@extends('dashboard')

@section('title', 'Daftar Banner')

@section('content')
<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Daftar Banner</h5>
        </div>
        <div class="card-body">
            <div class=" mb-3">
                <a href="{{ route('banner.create') }}" class="btn btn-primary mb-3">Tambah Banner</a>
            </div>

            @if (session('success'))
                <div class="alert alert-success">
                    <strong>Sukses!</strong> {{ session('success') }}
                </div>
            @endif

            @if ($banner->isEmpty())
                <p class="text-center">Belum ada data banner.</p>
            @else
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <thead class="table-primary text-center">
                            <tr>
                                <th>Tagline</th>
                                <th>Deskripsi</th>
                                <th>Gambar</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($banner as $item)
                                <tr>
                                    <td>{{ $item->tagline }}</td>
                                    <td>{{ Str::limit($item->deskripsi) }}</td>
                                    <td class="text-center">
                                        <img src="{{ asset('storage/' . $item->gambar) }}"
                                             alt="Gambar"
                                             class="img-thumbnail"
                                             style="width: 100px; height: 100px; object-fit: cover;">
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('banner.edit', $item->id) }}" class="btn btn-warning btn-sm">
                                            <i class="bi bi-pencil"></i> Edit
                                        </a>
                                        <form action="{{ route('banner.destroy', $item->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus banner ini?')">
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
