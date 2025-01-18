<<<<<<< HEAD
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
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>
    <x-app-layout>
        <div class="max-w-4xl mx-auto py-6">
            <h1 class="text-2xl font-bold mb-4">Edit Service</h1>
            <form action="{{ route('service.update', $service->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label class="block text-sm font-medium">tagline</label>
                    <input type="text" name="tagline" value="{{ $service->tagline }}" class="mt-1 block w-full border-gray-300 rounded-md" required />
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium">deskripsi</label>
                    <textarea name="deskripsi" id="editor" rows="5" class="mt-1 block w-full border-gray-300 rounded-md" required>{{ $service->deskripsi }}</textarea>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium">Gambar</label>
                    <input type="file" name="gambar_deskripsi" class="mt-1 block w-full" accept="gambar/*" />
                    @if ($service->gambar)
                        <img src="{{ Storage::url($service->gambar_deskripsi) }}" class="h-48 mt-2" alt="Gambar service" />
                    @endif
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium">Gambar</label>
                    <input type="file" name="gambar" class="mt-1 block w-full" accept="gambar/*" />
                    @if ($service->gambar)
                        <img src="{{ Storage::url($service->gambar) }}" class="h-48 mt-2" alt="Gambar service" />
                    @endif
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
            </form>
        </div>

        <script>
            ClassicEditor
                .create(document.querySelector('#editor'))
                .catch(error => {
                    console.error(error);
                });
        </script>
    </x-app-layout>

</body>
</html>
>>>>>>> 0d517a97a973fa312f467932224028c03d0fefaa
