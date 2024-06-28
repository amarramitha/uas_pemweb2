<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-2xl font-bold mb-6">Edit Karyawan: {{ $employee->name }}</h1>
                    <form action="{{ route('employees.update', $employee) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label for="name" class="block text-xl font-medium text-gray-700">Nama Karyawan:</label>
                            <input type="text" id="name" name="name" value="{{ $employee->name }}" required
                                class="mt-1 block w-full px-3 py-2 border border-gray-300 shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                        </div>

                        <div class="mb-4">
                            <label for="department_id"
                                class="block text-xl font-medium text-gray-700">Departemen:</label>
                            <select id="department_id" name="department_id"
                                class="mt-1 block w-full px-3 py-2 border border-gray-300 shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                                @foreach ($departments as $department)
                                    <option value="{{ $department->id }}"
                                        {{ $employee->department_id == $department->id ? 'selected' : '' }}>
                                        {{ $department->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="task_id" class="block text-xl font-medium text-gray-700">Tugas:</label>
                            <select id="task_id" name="task_id"
                                class="mt-1 block w-full px-3 py-2 border border-gray-300 shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                                @foreach ($tasks as $task)
                                    <option value="{{ $task->id }}"
                                        {{ $employee->task_id == $task->id ? 'selected' : '' }}>{{ $task->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="flex justify-end">
                            <button type="submit"
                                class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
