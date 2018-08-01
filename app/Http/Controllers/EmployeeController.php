<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     * Url : /employee method (get)
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::all();


        return view('employee.index',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
         return View('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employee = Employee::create($request->all());

        return view('employee.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
       return view('employee.show',compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        return View('employee.edit',compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $employee)
    {
        //
        Employee::find($employee)->update($request->all());
        return redirect('employee');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy( $employee)
    {
        
         // delete
        $employees = Employee::find($employee);
        $employees->delete();

        
        return Redirect('employee');
        
    }
    public function createqr($id){
       $employee = App\Employee::findOrFail($id);

    $firstName = $employee->first_name;
    $lastName = $employee->last_name;
    $title = '';
    $email = $employee->email;
    
    // Addresses
    $homeAddress = [
        'type' => '',
        'pref' => '',
        'street' => '',
        'city' => '',
        'state' => '',
        'country' => '',
        'zip' => ''
    ];
    $wordAddress = [
        'type' => '',
        'pref' => false,
        'street' => '',
        'city' => '',
        'state' => '',
        'country' => '',
        'zip' => ''
    ];
    
    $addresses = [$homeAddress, $wordAddress];
    
    // Phones
    $workPhone = [
        'type' => '',
        'number' => '',
        'cellPhone' => false
    ];
    $homePhone = [
        'type' => '',
        'number' => '',
        'cellPhone' => false
    ];
    $cellPhone = [
        'type' =>  '',
        'number' => $employee->phone_number,
        'cellPhone' => true
    ];
    
    $phones = [$workPhone, $homePhone, $cellPhone];

    $data = [
        'first_name' => $firstName,
        'last_name' => $lastName,
        'email' => $email,
        'title' => $title,
        'addresses' => $addresses,
        'phones' => $phones
    ];



    }
}
