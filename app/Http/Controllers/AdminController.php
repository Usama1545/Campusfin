<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class AdminController extends Controller
{
    public function index()
    {
        return view("dashboard");
    }

    public function login()
    {
        return view("login");
    }

    public function register()
    {


        return view("register");
    }

    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'employee_name' => 'required|string|max:255',
            'employee_email' => 'required|string|email|max:255|unique:employees',
            'employee_phone' => 'required|string|max:20',
            'employee_password' => 'required|string|min:6',
        ]);

        // Create a new employee instance and fill it with the validated data
        $employee = new Employee();
        $employee->employee_name = $validatedData['employee_name'];
        $employee->employee_email = $validatedData['employee_email'];
        $employee->employee_phone = $validatedData['employee_phone'];
        $employee->employee_password = bcrypt($validatedData['employee_password']); // Hash the password

        // Save the employee record to the database
        $employee->save();

        // Redirect back or to a success page
        return redirect()->back()->with('success', 'Employee registered successfully!');
    }




}
