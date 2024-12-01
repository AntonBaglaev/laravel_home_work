<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;


class EmployeeController extends Controller
{
    public function index(): View|Factory|Application
    {
        return view('employee_form');
    }
    public function store(Request $request): void
    {
        $employee = new Employee();
        $this->extracted($request, $employee);
        echo "Employee $employee->name $employee->soname with id№ $employee->id was created";
    }
    public function update(Request $request, $id): void
    {
        $employee = Employee::where('id', $id)->first();
        if (isset($employee)) {
            $this->extracted($request, $employee);
            echo "Employee with id№ $employee->id was updated";
        }
    }
    public function showAll(): View|Factory|Application
    {
        $employees = Employee::select(['id', 'name', 'soname', 'email', 'address', 'position', 'workData'])->get();
        return view('employees_table', ['employees' => $employees]);
    }
    public function showJsonTextarea(): Factory|Application|View
    {
        return view('json_textarea');
    }
    public function jsonData(Request $request): void
    {
        $json = $request->input('json_entry');
        echo json_decode($json);
    }
    /**
     * @param Request $request
     * @param $employee
     * @return void
     */
    public function extracted(Request $request, $employee): void
    {
        $employee->name = $request->name;
        $employee->soname = $request->soname;
        $employee->email = $request->email;
        $employee->address = $request->address;
        $employee->position = $request->position;
        $employee->workData = $request->workData;
        $employee->save();
    }
    private function getPath(Request $request): string
    {
        return $request->path();
    }
    private function getUrl(Request $request): string
    {
        return $request->url();
    }
}
