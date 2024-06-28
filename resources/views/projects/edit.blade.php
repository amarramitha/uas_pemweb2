<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="container mx-auto">
                        <h1 class="text-2xl font-bold mb-6">Edit Proyek: {{ $project->name }}</h1>
                        <form action="{{ route('projects.update', $project) }}" method="POST" class="space-y-4">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name" class="block text-l font-medium text-gray-700">Nama
                                    Proyek:</label>
                                <input type="text"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                    id="name" name="name" value="{{ $project->name }}" required>
                            </div>
                            <button type="submit"
                                class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Edit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
