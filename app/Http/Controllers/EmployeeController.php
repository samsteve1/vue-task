<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;
use App\Http\Resources\EmployeeResource;
class EmployeeController extends Controller
{
    public function index ()
    {
        $employees = Employee::get();
        return EmployeeResource::collection($employees);
    }
    public function store() 
    {
        
    }
    public function destroy(Employee $employee)
    {
        $employee->delete();

        return response()->json(['message' => 'Employess deleted!'], 200);
    }
}
