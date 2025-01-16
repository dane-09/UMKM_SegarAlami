
    <x-app-layout>
        <div class="max-w-4xl mx-auto py-6">
            <h1 class="text-2xl font-bold mb-4">Edit Product</h1>
            <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label class="block text-sm font-medium">tagline</label>
                    <input type="text" name="tagline" value="{{ $product->tagline }}" class="mt-1 block w-full border-gray-300 rounded-md" required />
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium">deskripsi</label>
                    <textarea name="deskripsi" id="editor" rows="5" class="mt-1 block w-full border-gray-300 rounded-md" required>{{ $product->deskripsi }}</textarea>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium">Gambar</label>
                    <input type="file" name="gambar" class="mt-1 block w-full" accept="gambar/*" />
                    @if ($product->gambar)
                        <img src="{{ Storage::url($product->gambar) }}" class="h-48 mt-2" alt="Gambar product" />
                    @endif
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
            </form>
        </div>
    </x-app-layout>

</body>
</html>
