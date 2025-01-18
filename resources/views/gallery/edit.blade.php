@extends('dashboard')

@section('title', 'Edit Gallery')

@section('content')
<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Edit Gallery</h5>
        </div>
        <div class="card-body">
            <!-- Error Alert -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Terjadi kesalahan!</strong>
                    <ul>
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

            <form action="{{ route('gallery.update', $gallery->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label class="block text-sm font-medium">Gambar</label>
                    <input type="file" name="gambar" class="form-control" accept="image/*" />
                    @if ($gallery->gambar)
                        <img src="{{ Storage::url($gallery->gambar) }}" class="img-thumbnail mt-2" alt="Gambar Gallery" style="max-width: 150px;" />
                    @endif
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium">Deskripsi</label>
                    <textarea name="alt_text" id="editor" rows="5" class="form-control" required>{{ $gallery->alt_text }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
</script>
@endsection
