@extends('dashboard')

@section('title', 'Edit Product')

@section('content')
<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Edit Product</h5>
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
            <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Tagline -->
                <div class="mb-3">
                    <label for="tagline" class="form-label">Tagline</label>
                    <input type="text" id="tagline" name="tagline" value="{{ $product->tagline }}"
                           class="form-control" placeholder="Masukkan tagline..." required>
                </div>

                <!-- Deskripsi -->
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea id="deskripsi" name="deskripsi" rows="5" class="form-control"
                              placeholder="Masukkan deskripsi..." required>{{ $product->deskripsi }}</textarea>
                </div>

                <!-- Gambar -->
                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar</label>
                    <input type="file" id="gambar" name="gambar" class="form-control" accept="image/*">
                    @if ($product->gambar)
                        <div class="mt-3">
                            <img src="{{ Storage::url($product->gambar) }}"
                                 alt="Gambar Product"
                                 class="img-thumbnail"
                                 style="max-width: 150px; height: auto; object-fit: cover;">
                        </div>
                    @endif
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('product.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection
