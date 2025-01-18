@extends('dashboard')

@section('title', 'Tabel Pesan Saran')

@section('content')
<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Tabel Pesan Saran</h5>
        </div>
        <div class="card-body">
            <!-- Tombol Tambah -->
            <a href="{{ route('pesansaran.create') }}" class="btn btn-primary mb-3">Tambah Pesan Saran</a>

            <!-- Success Alert -->
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Tabel Pesan Saran -->
            <table class="table table-bordered table-striped table-hover">
                <thead class="table-primary">
                    <tr>
                        <th>Nama</th>
                        <th>Subject</th>
                        <th>Pesan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pesansaran as $item)
                    <tr>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->subject }}</td>
                        <td>{{ $item->pesan }}</td>
                        <td>
                            <!-- Tombol Edit -->
                            <a href="{{ route('pesansaran.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>

                            <!-- Tombol Hapus -->
                            <form action="{{ route('pesansaran.destroy', $item->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus pesan saran ini?')">Hapus</button>
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
