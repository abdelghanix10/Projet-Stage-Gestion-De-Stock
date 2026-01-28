<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Employees";
        $employees = Employee::get();
        return view('employees', compact('title', 'employees'));
    }

    /**
     * Display a form for adding the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Add Employee";
        return view('add-employee', compact(
            'title'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'email|string',
            'phone' => 'max:13',
            'brith_date' => 'required',
            'address' => 'required|max:200',
        ]);
        Employee::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'brith_date' => $request->brith_date,
            'address' => $request->address,
        ]);
        $notification = array(
            'message' => "Employee has been added",
            'alert-type' => 'success',
        );
        return redirect()->route('employees')->with($notification);
    }

    /**
     * Display the specified resource.
     *@param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $title = "Edit Employee";
        $employee = Employee::find($id);
        return view('edit-employee', compact(
            'title', 'employee'
        ));
    }

    /**
     * Display the specified resource.
     */

    public function display($id)
    {

        $employee = Employee::find($id);
        return view('employee-display', ['employee' => $employee]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'email|string',
            'phone' => 'max:13',
            'brith_date' => 'required',
            'address' => 'required|max:200',
        ]);

        $employee->update($request->all());
        $notification = array(
            'message' => "Employee has been updated",
            'alert-type' => 'success',
        );
        return redirect()->route('employees')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $employee = Employee::find($request->id);
        $employee->delete();
        $notification = array(
            'message' => "Employee has been deleted",
            'alert-type' => 'success',
        );
        return back()->with($notification);
    }
}
