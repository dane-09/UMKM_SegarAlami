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
