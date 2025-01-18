@extends('dashboard')

@section('title', 'Edit Service')

@section('content')
<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Edit Service</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('service.update', $service->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Tagline -->
                <div class="mb-3">
                    <label for="tagline" class="form-label">Tagline</label>
                    <input type="text" id="tagline" name="tagline" value="{{ $service->tagline }}"
                           class="form-control" required>
                </div>

                <!-- Deskripsi -->
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea id="deskripsi" name="deskripsi" rows="5"
                              class="form-control" required>{{ $service->deskripsi }}</textarea>
                </div>

                <!-- Gambar Deskripsi -->
                <div class="mb-3">
                    <label for="gambar_deskripsi" class="form-label">Gambar Deskripsi</label>
                    <input type="file" id="gambar_deskripsi" name="gambar_deskripsi" class="form-control" accept="image/*">
                    @if ($service->gambar_deskripsi)
                        <div class="mt-3">
                            <img src="{{ Storage::url($service->gambar_deskripsi) }}"
                                 alt="Gambar Deskripsi Service"
                                 class="img-thumbnail"
                                 style="max-width: 150px; height: auto; object-fit: cover;">
                        </div>
                    @endif
                </div>

                <!-- Gambar -->
                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar</label>
                    <input type="file" id="gambar" name="gambar" class="form-control" accept="image/*">
                    @if ($service->gambar)
                        <div class="mt-3">
                            <img src="{{ Storage::url($service->gambar) }}"
                                 alt="Gambar Service"
                                 class="img-thumbnail"
                                 style="max-width: 150px; height: auto; object-fit: cover;">
                        </div>
                    @endif
                </div>

                <!-- Tombol Submit -->
                <div class="text-end">
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save"></i> Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
