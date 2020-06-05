<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Http\Resources\EmployeeResource;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pages.index');
    }
    public function create()
    {
        return view('pages.create');
    }
    public function edit(Employee $employee)
    {
        // $employee = new EmployeeResource($employee);
        return view('pages.edit', compact('employee'));
    }
}
