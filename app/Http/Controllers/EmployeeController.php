<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Http\Requests\EmployeeStoreRequest;
use Illuminate\Http\Request;
use App\Http\Resources\EmployeeResource;
class EmployeeController extends Controller
{
    public function index ()
    {
        $employees = Employee::get();
        return EmployeeResource::collection($employees);
    }
    public function store(EmployeeStoreRequest $request) 
    {
       $employee =  Employee::create([
            'name' => $request->name,
            'job_title' => $request->job_title,
            'salary' => ((int)$request->salary) * 100,
            'work_type' => ucfirst($request->work_type),
            'status' => ucfirst($request->status)
        ]);
        return new EmployeeResource($employee);
    }
    public function destroy(Employee $employee)
    {
        $employee->delete();

        return response()->json(['message' => 'Employess deleted!'], 200);
    }
}
