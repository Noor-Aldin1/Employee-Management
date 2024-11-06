<?php

// app/Http/Controllers/DepartmentController.php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employee;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    // Display a listing of all departments
    public function index()
    {
        $departments = Department::all(); // Fetch all departments
        return view('departments.index', compact('departments'));
    }

    // Show the form to create a new department
    public function create()
    {
        return view('departments.create');
    }

    // Store a new department
    public function store(Request $request)
    {
        $request->validate([
            'department_name' => 'required|string|max:255',
            'department_description' => 'nullable|string',
        ]);

        Department::create([
            'department_name' => $request->department_name,
            'department_description' => $request->department_description,
        ]);

        return redirect()->route('departments.index')->with('success', 'Department created successfully.');
    }

    // Show the details of a specific department along with employees
    public function show($id)
    {
        $department = Department::with('employees')->findOrFail($id); // Get department and related employees
        return view('departments.show', compact('department'));
    }

    // Show the form to edit a department
    public function edit($id)
    {
        $department = Department::findOrFail($id);
        return view('departments.edit', compact('department'));
    }

    // Update a department's information
    public function update(Request $request, $id)
    {
        $request->validate([
            'department_name' => 'required|string|max:255',
            'department_description' => 'nullable|string',
        ]);

        $department = Department::findOrFail($id);
        $department->update([
            'department_name' => $request->department_name,
            'department_description' => $request->department_description,
        ]);

        return redirect()->route('departments.index')->with('success', 'Department updated successfully.');
    }

    // Delete a department
    public function destroy($id)
    {
        $department = Department::findOrFail($id);
        $department->delete();

        return redirect()->route('departments.index')->with('success', 'Department deleted successfully.');
    }
}
