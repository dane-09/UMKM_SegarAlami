

<x-app-layout>
    <div class="max-w-4xl py-6 mx-auto">
        <h1 class="mb-4 text-2xl font-bold">Tambah Contact</h1>


        @if ($errors->any())
        <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Ada yang salah!</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
        <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Sukses!</strong> {{ session('success') }}
        </div>
    @endif

        <form action="{{ route('contact.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label class="block text-sm font-medium">Lokasi</label>
                <input type="text" name="lokasi" class="block w-full mt-1 border-gray-300 rounded-md" />
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium">No</label>
                <input type="text" name="no" class="block w-full mt-1 border-gray-300 rounded-md" />
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium">Email</label>
                <input type="text" name="email" class="block w-full mt-1 border-gray-300 rounded-md" />
            </div>

            <button type="submit" class="px-4 py-2 text-white bg-blue-500 rounded">Simpan</button>
        </form>
    </div>
</x-app-layout>
