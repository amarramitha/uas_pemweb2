<!-- resources/views/departments/index.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Daftar Departemen
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ route('departments.create') }}"
                        class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700 mb-3">Tambah
                        Departemen</a>
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3  text-left text-sm font-bold text-gray-900 uppercase tracking-wider">
                                    ID
                                </th>
                                <th scope="col"
                                    class="px-6 py-3  text-left text-sm font-bold text-gray-900 uppercase tracking-wider">
                                    Nama Departemen
                                </th>
                                <th scope="col"
                                    class="px-6 py-3  text-left text-sm font-bold text-gray-900 uppercase tracking-wider">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($departments as $department)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-m font-medium text-gray-900">
                                        {{ $department->id }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-m text-gray-900">
                                        {{ $department->name }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-m font-medium">
                                        <a href="{{ route('departments.edit', $department) }}"
                                            class="ml-4 text-yellow-600 hover:text-yellow-900">Edit</a>
                                        <form action="{{ route('departments.destroy', $department) }}" method="POST"
                                            class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="ml-4 text-red-600 hover:text-red-900"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus departemen ini?')">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
