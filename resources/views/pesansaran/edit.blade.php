<<<<<<< HEAD
@extends('dashboard')

@section('title', 'Edit Pesan Saran')

@section('content')
<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Edit Pesan Saran</h5>
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

            <!-- Form Edit -->
            <form action="{{ route('pesansaran.update', $pesansaran->id) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- Nama -->
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input
                        type="text"
                        name="nama"
                        id="nama"
                        class="form-control"
                        value="{{ $pesansaran->nama }}"
                        placeholder="Masukkan nama Anda (Opsional)" />
                </div>

                <!-- Subject -->
                <div class="mb-3">
                    <label for="subject" class="form-label">Subject</label>
                    <input
                        type="text"
                        name="subject"
                        id="subject"
                        class="form-control"
                        value="{{ $pesansaran->subject }}"
                        placeholder="Masukkan subject" />
                </div>

                <!-- Pesan -->
                <div class="mb-3">
                    <label for="pesan" class="form-label">Pesan</label>
                    <textarea
                        name="pesan"
                        id="editor"
                        rows="5"
                        class="form-control"
                        placeholder="Masukkan pesan"
                        required>{{ $pesansaran->pesan }}</textarea>
                </div>

                <!-- Tombol -->
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('pesansaran.index') }}" class="btn btn-secondary">Kembali</a>
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
=======
<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('pesan_saran.update', $pesanSaran->id) }}">
            @csrf
            @method('PUT')

            <!-- Nama -->
            <div>
                <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                <input type="text" name="nama" id="nama" value="{{ (  $pesanSaran->nama) }}"
                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <x-input-error :messages="$errors->get('nama')" class="mt-2" />
            </div>

            <!-- Pesan -->
            <div class="mt-4">
                <label for="pesan" class="block text-sm font-medium text-gray-700">Pesan</label>
                <textarea name="pesan" id="pesan" rows="4"
                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">{{ ( $pesanSaran->pesan) }}</textarea>
                <x-input-error :messages="$errors->get('pesan')" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-primary-button class="mt-4">
                    Simpan Perubahan
                </x-primary-button>
            </div>
        </form>
    </div>
</x-app-layout>
>>>>>>> 0d517a97a973fa312f467932224028c03d0fefaa
