<!-- resources/views/projects/index.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Project') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="{{ route('projects.create') }}"
                        class="inline-block bg-blue-500 text-white px-4 py-2 rounded mb-3 hover:bg-blue-700">Tambah
                        Project</a>
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-sm font-medium text-gray-900 uppercase tracking-wider">
                                        ID
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-sm font-medium text-gray-900 uppercase tracking-wider">
                                        Nama Projek
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-sm font-medium text-gray-900 uppercase tracking-wider">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($projects as $project)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $project->id }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $project->name }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-m font-medium">
                                            <a href="{{ route('projects.edit', $project->id) }}"
                                                class="ml-4 text-yellow-600 hover:text-yellow-900">Edit</a>
                                            <form action="{{ route('projects.destroy', $project->id) }}" method="POST"
                                                class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="ml-4 text-red-600 hover:text-red-900"
                                                    onclick="return confirm('Apakah Anda yakin ingin menghapus projek ini?')">Hapus</button>
                                            </form>
                                        </td>

                                        {{-- <td class="px-6 py-4 whitespace-nowrap space-x-2">
                                            <a href="{{ route('projects.edit', $project->id) }}"
                                                class="inline-block bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-700">Edit</a>
                                            <form action="{{ route('projects.destroy', $project->id) }}" method="POST"
                                                class="inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="inline-block bg-red-500 text-white px-4 py-2 rounded hover:bg-red-700">Delete</button>
                                            </form>
                                        </td> --}}
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
