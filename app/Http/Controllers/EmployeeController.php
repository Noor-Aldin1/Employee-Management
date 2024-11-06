<?php



namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Department;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{

    public function index()
    {
        $employees = Employee::with('department')->paginate(10);
        $departments = Department::all();
        return view('admin.pages.all_employees', compact('employees', 'departments'));
    }


    public function create()
    {
        $departments = Department::all();
        return view('employees.create', compact('departments'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|unique:employees,email',
            'phone_number' => 'nullable|string|max:15',
            'date_of_employment' => 'required|date',
            'department_id' => 'required|exists:departments,id',
        ]);

        Employee::create([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'date_of_employment' => $request->date_of_employment,
            'department_id' => $request->department_id,
        ]);

        return redirect()->route('employees.index')->with('success', 'Employee created successfully.');
    }


    public function show($id)
    {
        $employee = Employee::with('department')->findOrFail($id);
        return view('employees.show', compact('employee'));
    }


    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        $departments = Department::all();
        return view('employees.edit', compact('employee', 'departments'));
    } // Update an employee's information
    public function update(Request $request, $id)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|unique:employees,email,' . $id,
            'phone_number' => 'nullable|string|max:15',
            'date_of_employment' => 'required|date',
            'department_id' => 'required|exists:departments,id',
        ]);

        $employee = Employee::findOrFail($id);
        $employee->update([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'date_of_employment' => $request->date_of_employment,
            'department_id' => $request->department_id,
        ]);

        return redirect()->route('employees.index')->with('success', 'Employee updated successfully.');
    }


    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();

        // Return a JSON response
        return response()->json([
            'success' => true,
            'message' => 'Employee deleted successfully.'
        ]);
    }
}
