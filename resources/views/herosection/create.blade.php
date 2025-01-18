@extends('dashboard')

@section('title', 'Tambah Hero Section')

@section('content')
<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Tambah Hero Section</h5>
        </div>
        <div class="card-body">
            <!-- Error Alert -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <h6 class="alert-heading">Ada yang salah!</h6>
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Success Alert -->
            @if (session('success'))
                <div class="alert alert-success">
                    <strong>Sukses!</strong> {{ session('success') }}
                </div>
            @endif

            <!-- Form -->
            <form action="{{ route('herosection.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Tagline -->
                <div class="mb-3">
                    <label for="tagline" class="form-label">Tagline</label>
                    <input type="text" name="tagline" id="tagline" class="form-control" placeholder="Masukkan tagline..." required>
                </div>

                <!-- Deskripsi -->
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea name="deskripsi" id="editor" rows="5" class="form-control" placeholder="Masukkan deskripsi..." required></textarea>
                </div>

                <!-- Gambar -->
                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar</label>
                    <input type="file" name="gambar" id="gambar" class="form-control" accept="image/*" required>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('herosection.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>

<!-- CKEditor Script -->
<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
</script>
@endsection
