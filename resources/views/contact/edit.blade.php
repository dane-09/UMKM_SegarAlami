
    <x-app-layout>
        <div class="max-w-4xl mx-auto py-6">
            <h1 class="text-2xl font-bold mb-4">Edit Contact</h1>
            <form action="{{ route('contact.update', $contact->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label class="block text-sm font-medium">Lokasi</label>
                    <input type="text" name="lokasi" value="{{ $contact->lokasi }}" class="mt-1 block w-full border-gray-300 rounded-md" required />
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium">No</label>
                    <input type="text" name="no" value="{{ $contact->no }}" class="mt-1 block w-full border-gray-300 rounded-md" required />
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium">email</label>
                    <input type="text" name="email" value="{{ $contact->email }}" class="mt-1 block w-full border-gray-300 rounded-md" required />
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
            </form>
        </div>
    </x-app-layout>

