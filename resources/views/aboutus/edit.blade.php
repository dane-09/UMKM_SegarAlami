<<<<<<< HEAD
@extends('dashboard')

@section('title', 'Edit About Us')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Edit About Us</h1>

    <form action="{{ route('aboutus.update', $aboutu->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="sub_tagline" class="form-label">Sub Tagline</label>
            <input type="text" name="sub_tagline" id="sub_tagline" value="{{ $aboutu->sub_tagline }}" class="form-control" required />
        </div>

        <div class="mb-3">
            <label for="tagline" class="form-label">Tagline</label>
            <input type="text" name="tagline" id="tagline" value="{{ $aboutu->tagline }}" class="form-control" required />
        </div>

        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea name="deskripsi" id="editor" rows="5" class="form-control" required>{{ $aboutu->deskripsi }}</textarea>
        </div>

        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar</label>
            <input type="file" name="gambar" id="gambar" class="form-control" accept="image/*" />
            @if ($aboutu->gambar)
                <div class="mt-3">
                    <img src="{{ Storage::url($aboutu->gambar) }}" class="img-thumbnail" style="max-width: 150px; height: auto;" alt="Gambar About Us">
                </div>
            @endif
        </div>

        <div class="text-end">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</div>

<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
</script>
@endsection
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <x-app-layout>
        <div class="max-w-4xl mx-auto py-6">
            <h1 class="text-2xl font-bold mb-4">Edit About Us</h1>
            <form action="{{ route('aboutus.update', $aboutu->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label class="block text-sm font-medium">Sub tagline</label>
                    <input type="text" name="sub_tagline" value="{{ $aboutu->sub_tagline }}" class="mt-1 block w-full border-gray-300 rounded-md" required />
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium">tagline</label>
                    <input type="text" name="tagline" value="{{ $aboutu->tagline }}" class="mt-1 block w-full border-gray-300 rounded-md" required />
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium">deskripsi</label>
                    <textarea name="deskripsi" id="editor" rows="5" class="mt-1 block w-full border-gray-300 rounded-md" required>{{ $aboutu->deskripsi }}</textarea>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium">Gambar</label>
                    <input type="file" name="gambar" class="mt-1 block w-full" accept="gambar/*" />
                    @if ($aboutu->gambar)
                        <img src="{{ Storage::url($aboutu->gambar) }}" class="h-48 mt-2" alt="Gambar aboutus" />
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
