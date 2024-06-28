<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Daftar Karyawan
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <a href="{{ route('employees.create') }}"
                        class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700 mb-3">Tambah
                        Karyawan</a>
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead>
                                <tr class="bg-gray-50">
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-sm font-medium text-gray-900 uppercase tracking-wider">
                                        ID
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-sm font-medium text-gray-900 uppercase tracking-wider">
                                        Nama Karyawan
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-sm font-medium text-gray-900 uppercase tracking-wider">
                                        Departemen
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-sm font-medium text-gray-900 uppercase tracking-wider">
                                        Tugas
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-sm font-medium text-gray-900 uppercase tracking-wider">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($employees as $employee)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{ $employee->id }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{ $employee->name }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{ $employee->department->name }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{ $employee->task->name }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">

                                            <a href="{{ route('employees.edit', $employee) }}"
                                                class="ml-4 text-yellow-600 hover:text-yellow-900">Edit</a>
                                            <form action="{{ route('employees.destroy', $employee) }}" method="POST"
                                                style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="ml-4 text-red-600 hover:text-red-900"
                                                    onclick="return confirm('Apakah Anda yakin ingin menghapus karyawan ini?')">Hapus</button>
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
    </div>
</x-app-layout>
