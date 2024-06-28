<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-2xl font-bold mb-6">Tambah Departemen Baru</h1>
                    <form action="{{ route('departments.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="block text-xl font-medium text-gray-700">Nama
                                Departemen</label>
                            <input type="text" name="name" id="name" autocomplete="name" required
                                class="mt-1 p-2 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        <button type="submit"
                            class="inline-block px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-700">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
