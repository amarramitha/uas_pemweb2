<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="container mx-auto">
                        <h1 class="text-2xl font-bold mb-6">Tambah Proyek Baru</h1>
                        <form action="{{ route('projects.store') }}" method="POST" class="space-y-4">
                            @csrf
                            <div class="form-group">
                                <label for="name" class="block text-xl font-medium text-gray-700">Nama
                                    Proyek:</label>
                                <input type="text"
                                    class="mt-1 block w-full text-xl font-medium rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                    id="name" name="name" required>
                            </div>
                            <button type="submit"
                                class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
