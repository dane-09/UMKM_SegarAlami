@extends('dashboard')

@section('title', 'Tambah About Us')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Tambah About Us</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Ada yang salah!</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
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
