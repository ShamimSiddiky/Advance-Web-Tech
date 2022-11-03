<?php

namespace App\Http\Controllers;

use App\Models\employee;
use App\Http\Requests\StoreemployeeRequest;
use App\Http\Requests\UpdateemployeeRequest;
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreemployeeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreemployeeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateemployeeRequest  $request
     * @param  \App\Models\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateemployeeRequest $request, employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(employee $employee)
    {
        //
    }
    public function __construct(){
        $this->middleware('ValidManager');
    }

    public function employeeCreate(){
        return view('employeeCreate');
    }


    public function employeeCreateSubmitted(Request $request){
        $validate = $request->validate([
            "name"=>"required|max:20",
            "id"=>"required",
            'email'=>'email',
            'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/',
            'managedBy'=>'required'
        ],
        ['name.required'=>"Please put you name here"]
    );
        $employee = new  employee();
        $employee->name = $request->name;
        $employee->id = $request->id;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->managedBy = $request->managedBy;
        $employee->save();

        return redirect()->route('employeeList');

    }

    public function employeeEdit(Request $request){
        $employee = employee::where('id', $request->id)->first();
        return view('employeeEdit')->with('employee', $employee);
    }
    public function employeeEditSubmitted(Request $request){
        $employee = employee::where('id', $request->id)->first();
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->managedBy = $request->managedBy;
        $employee->save();
        return redirect()->route('employeeList');

    }

    public function employeeList(){
        $employees = employee::all();
        return view('employeeList')->with('employees', $employees);
    }

    public function employeeDelete(Request $request){
        $employee = employee::where('id', $request->id)->first();
        $employee->delete();

        return redirect()->route('employeeList');
    }
}
