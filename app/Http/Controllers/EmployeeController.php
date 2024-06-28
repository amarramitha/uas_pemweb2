<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Department;
use App\Models\Task;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::with('department', 'task')->get();
        return view('employees.index', compact('employees'));
    }

    public function create()
    {
        $departments = Department::all();
        $tasks = Task::all();
        return view('employees.create', compact('departments', 'tasks'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'department_id' => 'required|exists:departments,id',
            'task_id' => 'required|exists:tasks,id|unique:employees,task_id,NULL,id,department_id,' . $request->department_id,
        ]);

        Employee::create($request->only('name', 'department_id', 'task_id'));

        return redirect()->route('employees.index')->with('success', 'Employee created successfully.');
    }

    public function show(Employee $employee)
    {
        return view('employees.show', compact('employee'));
    }

    public function edit(Employee $employee)
    {
        $departments = Department::all();
        $tasks = Task::all();
        return view('employees.edit', compact('employee', 'departments', 'tasks'));
    }

    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'department_id' => 'required|exists:departments,id',
            'task_id' => 'required|exists:tasks,id|unique:employees,task_id,' . $employee->id . ',id,department_id,' . $request->department_id,
        ]);

        $employee->update($request->only('name', 'department_id', 'task_id'));

        return redirect()->route('employees.index')->with('success', 'Employee updated successfully.');
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();

        return redirect()->route('employees.index')->with('success', 'Employee deleted successfully.');
    }
}