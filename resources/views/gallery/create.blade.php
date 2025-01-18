@extends('dashboard')

@section('title', 'Tambah Gallery')

@section('content')
<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Tambah Gallery</h5>
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
            <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Gambar -->
                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar</label>
                    <input type="file" name="gambar" id="gambar" class="form-control" accept="image/*" required>
                </div>

                <!-- Deskripsi -->
                <div class="mb-3">
                    <label for="alt_text" class="form-label">Deskripsi</label>
                    <textarea name="alt_text" id="editor" rows="5" class="form-control" placeholder="Masukkan deskripsi..." required></textarea>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('gallery.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>

<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
</script>
@endsection
