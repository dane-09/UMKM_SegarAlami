<<<<<<< HEAD
@extends('dashboard')

@section('title', 'Tambah About Us')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Tambah About Us</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Ada yang salah!</strong>
=======


<x-app-layout>
    <div class="max-w-4xl py-6 mx-auto">
        <h1 class="mb-4 text-2xl font-bold">Tambah HeroSection</h1>


        @if ($errors->any())
        <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Ada yang salah!</strong>
>>>>>>> 0d517a97a973fa312f467932224028c03d0fefaa
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
<<<<<<< HEAD
        <div class="alert alert-success">
            <strong>Sukses!</strong> {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('aboutus.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="sub_tagline" class="form-label">Sub Tagline</label>
            <input type="text" name="sub_tagline" id="sub_tagline" class="form-control" required />
        </div>

        <div class="mb-3">
            <label for="tagline" class="form-label">Tagline</label>
            <input type="text" name="tagline" id="tagline" class="form-control" required />
        </div>

        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea name="deskripsi" id="editor" rows="5" class="form-control" required></textarea>
        </div>

        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar</label>
            <input type="file" name="gambar" id="gambar" class="form-control" accept="image/*" />
        </div>

        <div class="text-end">
            <button type="submit" class="btn btn-primary">Simpan</button>
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
        <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Sukses!</strong> {{ session('success') }}
        </div>
    @endif

        <form action="{{ route('aboutus.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label class="block text-sm font-medium">SUb Tagline</label>
                <input type="text" name="sub_tagline" class="block w-full mt-1 border-gray-300 rounded-md" />
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium">Tagline</label>
                <input type="text" name="tagline" class="block w-full mt-1 border-gray-300 rounded-md" />
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium">Deskripsi</label>
                <textarea name="deskripsi" id="editor" rows="5" class="block w-full mt-1 border-gray-300 rounded-md"></textarea>
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium">Gambar</label>
                <input type="file" name="gambar" class="block w-full mt-1" accept="gambar/*" />
            </div>
            <button type="submit" class="px-4 py-2 text-white bg-blue-500 rounded">Simpan</button>
        </form>
    </div>
   
</x-app-layout>
>>>>>>> 0d517a97a973fa312f467932224028c03d0fefaa
